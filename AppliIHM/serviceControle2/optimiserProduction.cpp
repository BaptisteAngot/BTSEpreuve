#include "optimiserProduction.h"


void OptimiserProduction::demarrerProd()
{
    CommMachine automate;
    automate.distributing();
    automate.testing();
    automate.handling1();
    automate.processing();
    automate.handling2();
    automate.sorting();
}

void OptimiserProduction::chargerListeLots()
{
    Boitier boitier("rouge");
    Traitement traitement("tamponnage");
    ProductionPersonnalise maPp("maPpSpecial", boitier, traitement);

    Lot monLot(maPp, 5, "1", 0);

    Boitier boitier2("bleu");
    Traitement traitement2("tamponnage");
    ProductionPersonnalise maPp2("maPpSpecial", boitier, traitement);

    Lot monLot2(maPp2, 1, "2", 0);

    Boitier boitier3("rouge");
    Traitement traitement3("tamponnage");
    ProductionPersonnalise maPp3("maPpSpecial", boitier, traitement);

    Lot monLot3(maPp3, 10, "3", 0);
    //recuperer les lots dans la base de donnees

    //ajouter tous les lots dans la liste
    listeDeLots.push_back(monLot);
    listeDeLots.push_back(monLot2);
    listeDeLots.push_back(monLot3);

    for (std::list<Lot>::iterator it=listeDeLots.begin(); it!=listeDeLots.end(); it++)
    {
        Lot &lot = *it;
        cout << lot.getNumCommande()<<endl;
    }
}

