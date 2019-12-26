#include "commModbus.h"
#include "lot.h"
#include "optimiserProduction.h"
#include <iostream>
#include <boost/asio.hpp>
//#include "chat_message.hpp"

using namespace std;


/* reste à faire
- transmettre la liste de lot à l'IHM
    - echanger des infos entre vous
    - multithread
- récupérer l'état de lot
- recupérer les lots dans la base de données
- trier la liste de lot

*/

int main()
{

    /*OptimiserProduction production;
    production.demarrerProd();
    */

    /* cout << "On commence par instancier maPp" << endl;
     Boitier boitier("rouge");
     Traitement traitement("tamponnage");
     ProductionPersonnalise maPp("maPpSpecial", boitier, traitement);
     cout << "ensuite on instancie monLot" << endl;
     Lot monLot(maPp, 5, "1", 0);

     cout << "Nom de maPP : " << maPp.getNom() << endl;
     cout << "Nom de la pp de monLot : " << monLot.getNomPP() << endl;
     cout << "Nom du Boitier :" << maPp.getNomB() << endl;
     cout << "Nom du traitement :" << maPp.getNomT() << endl;
     */

    /*OptimiserProduction lol;
    lol.chargerListeLots();*/
}
