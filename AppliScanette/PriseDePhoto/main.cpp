#include <ctime>
#include <fstream>
#include <iostream>
#include <unistd.h>
#include <raspicam/raspicam.h>
using namespace std;

int main ( int argc,char **argv )
{
    raspicam::RaspiCam Camera; //Création d'un objet Camera

    //Ouverture caméra
    cout<<"Ouverture camera..."<<endl;
    if ( !Camera.open()) {cerr<<"Erreur a l ouverture de la camera"<<endl;return -1;}
    //Stabilisation de la caméra
    cout<<"Stabilisation de trois secondes de la caméra.."<<endl;
    usleep(3*1000000);
    //Prise de photo
    Camera.grab();
    //Allocation mémoire
    unsigned char *data=new unsigned char[  Camera.getImageTypeSize ( raspicam::RASPICAM_FORMAT_RGB )];
    //Extrait l'image au format RGB
    Camera.retrieve ( data,raspicam::RASPICAM_FORMAT_RGB );//get camera image
    //processus d'enregistrement
    std::ofstream outFile ( "photo.jpeg",std::ios::binary );
    outFile<<"P6\n"<<Camera.getWidth() <<" "<<Camera.getHeight() <<" 255\n";
    outFile.write ( ( char* ) data, Camera.getImageTypeSize ( raspicam::RASPICAM_FORMAT_RGB ) );
    cout<<"Image enregistre en tant que photo.jpeg"<<endl;
    //free resrources
    delete data;
    return 0;
}
