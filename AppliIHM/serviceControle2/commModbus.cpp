#include "commModbus.h"

void CommModbus::connectionMachine() // Fonction qui permet de se connecter � la machine (� l'automate ma�tre)
{

    //alloue et initialise une structure modbus_t pour communiquer avec
    ctx = modbus_new_tcp("10.176.160.20", 502);
    //SI ctx ne contient rien
    if (ctx == NULL)
    {
        //impossible de se connecter
        fprintf(stderr, "Unable to allocate libmodbus context\n");
    }
    //Si la fonction modbus_connect retourne -1
    if (modbus_connect(ctx) == -1)
    {
        //impossible de se connecter et lib�re ctx
        fprintf(stderr, "Connection failed: %s\n", modbus_strerror(errno));
        modbus_free(ctx);
    }

}

uint16_t CommModbus::lireMot(int mwX) // Fonction qui prend en param�tre une adresse sur un automate et retourne le mot
{
    uint16_t dest;

    //connectionMachine();

    if (modbus_read_registers(ctx, mwX, sizeof(dest), &dest ) == -1)   // fonction read coil status
    {
        fprintf(stderr, "lecture �chou�e\n");
    }
    else
    {

        uint8_t *ptr = (uint8_t *)&dest;

        printf("%p : 0x%02X\n ", ptr, *ptr);

    }
    return dest;

}

CommModbus::ecrireMot(uint16_t src, int mwX) // Methode qui prend en param�tre une adresse sur un automate et le mot � �crire et �crit le mot
{

    //connectionMachine();

    //Fonction qui prend en param�tre une structure Modbus, l'adresse Mw, la taille du mot et le mot et l'ecris � l'adresse mw
    if (modbus_write_registers(ctx, mwX, sizeof(src), (uint16_t *)&src) == -1)
    {
        fprintf(stderr, "ecriture �chou�e\n");
    }
    else
    {
        printf ("�criture r�ussi\n");
    }
    return 0;
}

void CommModbus::deconnexionMachine()
{
    modbus_close(ctx);
    modbus_free(ctx);
}
