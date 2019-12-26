#include "boitier.h"

Boitier::Boitier()
{

}

Boitier::Boitier(std::string nomBoitier)
{
    this->nom = nomBoitier;
}


std::string Boitier::getNom()
{
    return this->nom;
}

void Boitier::setNom(std::string nom)
{

    this->nom = nom;
}

