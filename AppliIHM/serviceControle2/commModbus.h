#ifndef COMMMODBUS_H_INCLUDED
#define COMMMODBUS_H_INCLUDED
#include <iostream>
#include <modbus.h>
#include <modbus-tcp.h>
#include <modbus-version.h>
#include <stdlib.h>
#include <stdio.h>
#include <iostream>

class CommModbus
{

public :

    void connectionMachine(); // Fonction qui permet de se connecter à la machine
    void deconnexionMachine();
    uint16_t lireMot(int mwX);
    ecrireMot(uint16_t src, int mwX);

private :
    modbus_t *ctx;
};


#endif // COMMMODBUS_H_INCLUDED
