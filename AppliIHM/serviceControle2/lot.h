#ifndef LOT_H_INCLUDED
#define LOT_H_INCLUDED

#include "productionPersonnalise.h"
#include <string>

class Lot
{
    public : Lot(ProductionPersonnalise &pp, int quantite, string numCommande, bool statut);

             //void setPP(ProductionPersonnalise, int quantite);
             std::string getNomPP() { return pp.getNom();}

             int getQuantite() {return quantite;}
             std::string getNumCommande() {return numCommande;}
             bool getStatut() {return statut;}



    private:
             ProductionPersonnalise &pp;

             int quantite;
             std::string numCommande;
             bool statut; // 0:non produit 1:produit

};

#endif // LOT_H_INCLUDED
