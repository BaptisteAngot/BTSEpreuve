#include "commJSONRPC.h"

bool commJSONRPC::setListeLots(list<Lot> listeDeLots)
{
	string requeteJsonRPC = "{\"jsonrpc\": \"2.0\", \"method\": \"setListeLots\", \"params\": {\"listeDeLots\": [";
	for (list<Lot>:iterator it = listeDeLots.begin(); it != listeDeLots.end(); it++)
	{
		Lot &l = *it;
		requeteJsonRPC += l.toJson();
		if (it.hasNext())
			requeteJsonRPC += ", ";
	}
	requeteJsonRPC += "]}, \"id\" : ";
	requeteJsonRPC += string(jsonrpcnextid++);
	requeteJsonRPC += "}";

	commTCPIHM.envoyer(requeteJsonRPC);
}
