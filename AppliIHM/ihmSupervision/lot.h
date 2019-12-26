#ifndef LOT_H
#define LOT_H
#include "productionpersonnalisee.h"
#include <string>

class Lot
{
public:
    Lot();
    Lot(std::string nomBoitier, std::string nomTraitement, int qte);


    ProductionPersonnalisee getProductionPersonnalisee();

    void setProductionPersonnalisee(ProductionPersonnalisee pp);

    int getQuantite();

    void setQuantite(int quantite);

private:

    ProductionPersonnalisee productionPersonnalisee;
    int quantite;
    bool statut; // 0=non produit, 1= produit

};

#endif // LOT_H
