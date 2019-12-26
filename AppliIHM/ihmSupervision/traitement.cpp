#include "traitement.h"
Traitement::Traitement()
{

}
Traitement::Traitement(std::string nomTraitement)
{
    this->nom = nomTraitement;
}



std::string Traitement::getNom()
{
    return this->nom;
}

void Traitement::setNom(std::string nom)
{

    this->nom = nom;
}



