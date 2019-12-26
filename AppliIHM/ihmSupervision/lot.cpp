#include "lot.h"
#include "productionpersonnalisee.h"

Lot::Lot()
{


}
Lot::Lot(std::string nomBoitier, std::string nomTraitement, int qte) : productionPersonnalisee(nomBoitier,nomTraitement)
{
    this->quantite = qte;
}

ProductionPersonnalisee Lot::getProductionPersonnalisee()
{
    return this->productionPersonnalisee;
}

void Lot::setProductionPersonnalisee(ProductionPersonnalisee PP)
{

    this->productionPersonnalisee = PP;
}



int Lot::getQuantite()

{
   return quantite;

}

void Lot::setQuantite(int p_quantite)

{

    this->quantite = p_quantite;

}
