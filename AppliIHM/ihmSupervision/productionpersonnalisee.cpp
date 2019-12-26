#include "productionpersonnalisee.h"
#include "traitement.h"
#include "boitier.h"

ProductionPersonnalisee::ProductionPersonnalisee()
{

}
ProductionPersonnalisee::ProductionPersonnalisee(std::string nomBoitier, std::string nomTraitement) : boitier(nomBoitier), traitement(nomTraitement)
{

}



Boitier ProductionPersonnalisee::getBoitier()
{
    return this->boitier;
}

void ProductionPersonnalisee::setBoitier(Boitier& nom)
{

    this->boitier = nom;
}


Traitement ProductionPersonnalisee::getTraitement()
{
    return this->traitement;
}

void ProductionPersonnalisee::setTraitement(Traitement nom)
{

    this->traitement = nom;
}



