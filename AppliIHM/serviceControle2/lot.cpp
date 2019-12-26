#include "lot.h"
#include <iostream>
using namespace std;


Lot::Lot(ProductionPersonnalise &pp, int quantite, string numCommande, bool statut) : pp(pp)
{
    this->quantite=quantite;
    this->numCommande=numCommande;
    this->statut=statut;
}

