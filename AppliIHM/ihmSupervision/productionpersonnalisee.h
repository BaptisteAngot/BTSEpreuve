#ifndef PRODUCTIONPERSONNALISEE_H
#define PRODUCTIONPERSONNALISEE_H
#include "boitier.h"
#include "traitement.h"

class ProductionPersonnalisee
{
public:
    ProductionPersonnalisee();
    ProductionPersonnalisee(std::string nomBoitier, std::string nomTraitement);

   void setTraitement(Traitement traitement);
   void setBoitier(Boitier &boitier);

   Boitier getBoitier();
   Traitement getTraitement();

private:
     Boitier boitier;
     Traitement traitement;
};

#endif // PRODUCTIONPERSONNALISEE_H
