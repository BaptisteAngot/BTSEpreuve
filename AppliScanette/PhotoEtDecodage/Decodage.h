#ifndef DECODAGE_H_INCLUDED
#define DECODAGE_H_INCLUDED

#include <string>
#include <Magick++.h>
#include <zbar.h>

class Decodage
{
    public:
        std::string scan(std::string fichierImageQRCode);

    private:

};

#endif // DECODAGE_H_INCLUDED
