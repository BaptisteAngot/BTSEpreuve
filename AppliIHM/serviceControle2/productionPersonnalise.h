#ifndef PRODUCTIONPERSONNALISE_H_INCLUDED
#define PRODUCTIONPERSONNALISE_H_INCLUDED

#include "boitier.h"
#include "traitement.h"
#include <string>

class ProductionPersonnalise
{
public:
    ProductionPersonnalise(std::string nom, Boitier &boitier, Traitement &traitement); //construteur
    //ProductionPersonnalise(const ProductionPersonnalise &pp); // constructeur de recopie




    std::string getNom() const {return nom;}
    std::string getNomB() const {return boitier.getNom();}
    std::string getNomT() const {return traitement.getNom();}


private:
    std::string nom;
    Boitier &boitier;
    Traitement &traitement;

};

#endif // PRODUCTIONPERSONNALISE_H_INCLUDED
