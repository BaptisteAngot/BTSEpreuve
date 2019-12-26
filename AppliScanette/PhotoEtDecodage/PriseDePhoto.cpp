#include "PriseDePhoto.h"

using namespace std;

void camera::priseDePhoto()
{
    raspicam::RaspiCam camera; //Création d'un objet Camera
    //Open camera
    cout<<"Ouverture camera..."<<endl;
    if ( !camera.open()) {cerr<<"Erreur a l ouverture de la camera"<<endl;}
    //wait a while until camera stabilizes
    cout<<"Stabilisation de trois secondes de la caméra.."<<endl;
    usleep(3*1000000);
    //capture
    camera.grab();
    //allocate memory
    unsigned char *data=new unsigned char[  camera.getImageTypeSize ( raspicam::RASPICAM_FORMAT_RGB )];
    //extract the image in rgb format
    camera.retrieve ( data,raspicam::RASPICAM_FORMAT_RGB );//get camera image
    //save
    std::ofstream outFile ( "photo.jpeg",std::ios::binary );
    outFile<<"P6\n"<<camera.getWidth() <<" "<<camera.getHeight() <<" 255\n";
    outFile.write ( ( char* ) data, camera.getImageTypeSize ( raspicam::RASPICAM_FORMAT_RGB ) );
    cout<<"Image enregistre en tant que photo.jpeg"<<endl;
    //free resrources
    delete data;
}
