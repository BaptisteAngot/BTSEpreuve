#ifndef TRAITEMENT_H_INCLUDED
#define TRAITEMENT_H_INCLUDED
#include <string>
using namespace std;


class Traitement
{
    public :
        Traitement(string nomTraitement);
        std::string getNom() const {return nomTraitement;}
        //void setNom(pNom);

    private:
        string nomTraitement;

};

#endif // TRAITEMENT_H_INCLUDED
