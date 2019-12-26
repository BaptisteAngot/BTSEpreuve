#include <stdio.h>
#include "commMachine.h"



/*void CommMachine::configurerTraitement(Traitement traitement)
{
    CommModbus automate;
    int mwX = 140;
    uint16_t motAEcrire;
    automate.connectionMachine();

    //Si le traitement n'existe pas
    if (traitement =! 0 || 1 || 2)
    {
        printf ("configuration du traitement échoué");
    }
    //Si traitement est sans usinage

    if (traitement.getNom() == "aucun")
    {
        motAEcrire = 0x00;
        automate.ecrireMot(mwX, motAEcrire);
    }
    //Si traitement est 1 usinage
    if (traitement.getNom() == "fraisage")
    {
        motAEcrire = 0x01;
        automate.ecrireMot(mwX, motAEcrire);
    }
    //Si traitement est 2 usinages
    if (traitement.getNom() == "lesDeux")
    {
        motAEcrire = 0x02;
        automate.ecrireMot(mwX, motAEcrire);
    }
    automate.deconnexionMachine();
}
*/
void CommMachine::distributing()
{
    int mwX = 111; // adresse d'ecriture pour demarrer le cycle
    int mwX2 = 10; // adresse de lecture pour le fin de cycle
    uint16_t motAEcrire = 0x00;
    CommModbus automate;
    automate.connectionMachine();
    automate.ecrireMot(mwX, motAEcrire); // Ecris le mot pour demarrer le cycle
    while (automate.lireMot(mwX2)!= 0x00)
    {
    };
    automate.deconnexionMachine();
}

void CommMachine::testing()
{
    int mwX = 121; // adresse d'ecriture pour demarrer le cycle
    int mwX2 = 20; // adresse de lecture pour le fin de cycle
    uint16_t motAEcrire = 0x00;
    CommModbus automate;
    automate.connectionMachine();
    automate.ecrireMot(mwX, motAEcrire); // Ecris le mot pour demarrer le cycle
    while (automate.lireMot(mwX2)!= 0x00)
    {
    };
    automate.deconnexionMachine();
}

void CommMachine::handling1()
{
    int mwX = 131; // adresse d'ecriture pour demarrer le cycle
    int mwX2 = 30; // adresse de lecture pour le fin de cycle
    uint16_t motAEcrire = 0x00;
    CommModbus automate;
    automate.connectionMachine();
    automate.ecrireMot(mwX, motAEcrire); // Ecris le mot pour demarrer le cycle
    while (automate.lireMot(mwX2)!= 0x00)
    {
    };
    automate.deconnexionMachine();
}

void CommMachine::processing()
{
    int mwX = 141; // adresse d'ecriture pour demarrer le cycle
    int mwX2 = 40; // adresse de lecture pour le fin de cycle
    uint16_t motAEcrire = 0x00;
    CommModbus automate;
    automate.connectionMachine();
    automate.ecrireMot(mwX, motAEcrire); // Ecris le mot pour demarrer le cycle
    while (automate.lireMot(mwX2)!= 0x00)
    {
    };
    automate.deconnexionMachine();
}

void CommMachine::handling2()
{
    int mwX = 151; // adresse d'ecriture pour demarrer le cycle
    int mwX2 = 50; // adresse de lecture pour le fin de cycle
    uint16_t motAEcrire = 0x00;
    CommModbus automate;
    automate.connectionMachine();
    automate.ecrireMot(mwX, motAEcrire); // Ecris le mot pour demarrer le cycle
    while (automate.lireMot(mwX2)!= 0x00)
    {
    };
    automate.deconnexionMachine();

}

void CommMachine::sorting()
{
    int mwX = 161; // adresse d'ecriture pour demarrer le cycle
    int mwX2 = 60; // adresse de lecture pour le fin de cycle
    uint16_t motAEcrire = 0x00;
    CommModbus automate;
    automate.connectionMachine();
    automate.ecrireMot(mwX, motAEcrire); // Ecris le mot pour demarrer le cycle
    while (automate.lireMot(mwX2)!= 0x00)
    {
    };
    automate.deconnexionMachine();
}
