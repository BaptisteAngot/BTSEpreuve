#include <ctime>
#include <fstream>
#include <iostream>
#include <unistd.h>

#include "Decodage.h"
#include "PriseDePhoto.h"

using namespace std;


int main(int argc,char **argv)
{
    string contenuQRCode;

    // Le programme doit être appelé avec le nom du fichier image du QRCODE en argument
    if (argc < 2)
        return 1;

    while(1)
    {
        camera camera;
        Decodage decodage;
        bool button=0;
        while(button==0)
        {
            cin >> button;
        };
        camera.priseDePhoto();
        contenuQRCode = decodage.scan(string(argv[1]));
        cout << "Message scanné :" << contenuQRCode << '"' << endl;
    }
    return 0;
}
