#ifndef TRAITEMENT_H
#define TRAITEMENT_H
#include <string>


class Traitement
{
public:

    Traitement();
    Traitement(std::string nomTraitement);


    std::string getNom();

    void setNom(std::string nom);



private:

    std::string nom;

};


#endif // TRAITEMENT_H
