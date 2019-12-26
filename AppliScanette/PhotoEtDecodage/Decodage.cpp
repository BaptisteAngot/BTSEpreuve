#include "Decodage.h"
#define STR(s) #s

#include <iostream>

using namespace zbar;
using namespace std;

string Decodage::scan(string fichierImageQRCode)
{
#ifdef MAGICK_HOME
    // http://www.imagemagick.org/Magick++/
    //    under Windows it is necessary to initialize the ImageMagick
    //    library prior to using the Magick++ library
    Magick::InitializeMagick(MAGICK_HOME);
#endif


    // create a reader
    ImageScanner scanner;

    string contenuQRCode;

    // configure the reader
    scanner.set_config(ZBAR_NONE, ZBAR_CFG_ENABLE, 1);
    // obtain image data
    Magick::Image magick(fichierImageQRCode.c_str());  // read an image file

    int width = magick.columns();   // extract dimensions
    int height = magick.rows();
    Magick::Blob blob;              // extract the raw data
    magick.modifyImage();
    magick.write(&blob, "GRAY", 8);
    const void *raw = blob.data();

    // wrap image data
    Image image(width, height, "Y800", raw, width * height);

    // scan the image for barcodes
    scanner.scan(image);

   /* cout << "DEBUG : QRCode detecté: " << n << endl;

    // extract results
    for(Image::SymbolIterator symbol = image.symbol_begin();
        symbol != image.symbol_end();
        ++symbol) {
        // do something useful with results
        cout << "DEBUG : Message scanné :" << symbol->get_data() << '"' << endl;
        contenuQRCode = string(symbol->get_data());
    }
*/
    // clean up
    image.set_data(NULL, 0);
    return contenuQRCode;
}

