#ifndef BOITIER_H
#define BOITIER_H
#include <string>
#include "couleur.h"

class Boitier
{
public:
    Boitier();
    Boitier(std::string nomBoitier);

   std::string getNom();

    void setNom(std::string nom);


private:

     std::string nom;



};

#endif // BOITIER_H
 /*bonjour*/
