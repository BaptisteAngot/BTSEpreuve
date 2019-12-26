#ifndef OPTIMISERPRODUCTION_H_INCLUDED
#define OPTIMISERPRODUCTION_H_INCLUDED

#include "commMachine.h"
#include <list>

class OptimiserProduction
{

public :

    void demarrerProd();
    void alerteCommandeFini();
    void trierOrdreLot();    //
    void chargerListeLots(); // recuperer dans la BDD pour maj la liste de lot



private:
    std::list<Lot> listeDeLots;
    std::list<Lot>::iterator itParcours;

};

#endif // OPTIMISERPRODUCTION_H_INCLUDED
