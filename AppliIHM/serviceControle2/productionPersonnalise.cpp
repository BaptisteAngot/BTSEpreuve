#include "productionPersonnalise.h"
#include <iostream>
using namespace std;

ProductionPersonnalise::ProductionPersonnalise(string nom, Boitier &b, Traitement &t) : boitier(b), traitement(t)
{
    this->nom = nom;
}



