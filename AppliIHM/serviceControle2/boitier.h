#ifndef BOITIER_H_INCLUDED
#define BOITIER_H_INCLUDED
#include <string>

using namespace std;

class Boitier
{
    public :
        Boitier(string nomCouleur);
        std::string getNom() const {return nomCouleur;}

    private:
        string nomCouleur;


};
#endif // BOITIER_H_INCLUDED
