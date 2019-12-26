#ifndef COMMMACHINE_H_INCLUDED
#define COMMMACHINE_H_INCLUDED

#include "Lot.h"
#include "commModbus.h"

class CommMachine
{
public :

        void distributing();               // Fonction qui permet de demarrer le cycle distributing
        void testing();                    // Fonction qui permet de demarrer le cycle testing
        void handling1();                  // Fonction qui permet de demarrer le cycle handling1
        void processing();                 // Fonction qui permet de demarrer le cycle processing
        void handling2();                  // Fonction qui permet de demarrer le cycle handling2
        void sorting();                    // Fonction qui permet de demarrer le cycle sorting

        void configurerTraitement(Traitement traitement); // Fonction qui configure le traitement pour l'usinage du boitier
        void resetGrafcet();                       // Fonction qui permet d'arreter le fonctionnement de la machine

        //Boitier identifierBoitier();
private :

};

#endif // COMMMACHINE_H_INCLUDED
