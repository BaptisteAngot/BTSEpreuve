#include "paneltactile.h"
#include <vector>
#include "ui_paneltactile.h"
#include <QLineEdit>
#include <QStandardItemModel>
#include "lot.h"
#include "qmessagebox.h"
#include <iostream>

PanelTactile::PanelTactile(QWidget *parent) :
    QMainWindow(parent),
    ui(new Ui::PanelTactile)
{
    ui->setupUi(this);



}



void PanelTactile::setListeLots()
{
     // QVector<Lot> vecteurtest;
    //  QVector<Lot>::iterator it;

 // ui->debug->setText("test");


   QStandardItemModel *model = new QStandardItemModel(listeLots.size(), 3);
   int row=0;


    for (QVector<Lot>::iterator it = listeLots.begin(); it != listeLots.end() ; ++it)
    {
        Lot lot("","",0);
        lot=*it;
        //  QMessageBox::critical(this,"test","usinage1 retour");
        model->setItem(row, 0, new QStandardItem(QString(lot.getProductionPersonnalisee().getBoitier().getNom().c_str())));
        model->setItem(row, 1, new QStandardItem(QString(lot.getProductionPersonnalisee().getTraitement().getNom().c_str())));
        model->setItem(row, 2, new QStandardItem(QString("%0").arg(lot.getQuantite())));  
        row++;
       //QString("%0").arg(lot.quantite) changé un int en qstring
    }
    ui->tableView->setModel(model);
}

PanelTactile::~PanelTactile()
{
    delete ui;
}

void PanelTactile::on_test1_copyAvailable(bool b)
{

}

void PanelTactile::on_pushButton_2_clicked()
{
    Lot lotParDefaut("","",0);
    Lot lot1("rouge","fraisage", 5);
    Lot lot2("vert","poinconnage", 20);





  //  boitier.setCouleur(boitier.getCouleur()) ;
    //ProductionPersonnalisee.setTraitement();




  /* ProductionPersonnalisee pp1;
    Boitier boite1;
    Traitement usinage;*/
//std::string test;

// Boitier b;
//    ProductionPersonnalisee pp;
/*  std::string test;
    std::string test1;
    int test2;*/


    //lireJson() qui va aller decripter le json pour compléter la liste de lots

  /*  lot1.getProductionPersonnalisee().getBoitier().setNom("noir");
    lot1.getProductionPersonnalisee().getTraitement().setNom("fraisage");
    lot1.setQuantite(10);

    test=lot1.getProductionPersonnalisee().getBoitier().getNom();
    test1=lot1.getProductionPersonnalisee().getTraitement().getNom();
    test2=lot1.getQuantite();
    Lot lot1( test, test1,test2);*/

    /*b.setNom("noir")
    pp.setBoitier(b);
    lot1.setProductionPersonnalisee(pp);*/


    //ui->debug->append("boitier.setnom()");
    //ui->debug->append(QString( lot1.getProductionPersonnalisee().getBoitier().getNom().c_str()));



    //ui->debug->append("boitier.setnom()");
    //ui->debug->append(QString( b.getNom().c_str()));


  /*  lot1.getProductionPersonnalisee().getTraitement().setNom("fraisage");
    ui->debug->append("traitement.setnom()");
    ui->debug->append(QString( lot1.getProductionPersonnalisee().getTraitement().getNom().c_str()));
    lot1.setQuantite(10);
    ui->debug->append("setQuantité()");
    ui->debug->append(QString("%0").arg(lot1.getQuantite()));*/
    listeLots.push_back(lot1);
    listeLots.push_back(lot2);
   // ui->debug->append("Création du lot");


    lot1.getProductionPersonnalisee().getTraitement().setNom("fraisage");
   /* Lot lot2;
    lot2.boitier="Noir";
    lot2.traitement="2_usinages";
    lot2.quantite=12;
    listeLots.append(lot2);

    Lot lot3;
    lot3.boitier="Argent";subtract
    lot3.traitement="1_usinage";
    lot3.quantite=3;
    listeLots.append(lot3);

    Lot lot4;
    lot4.boitier="Rouge";
    lot4.traitement="0_usinage";
    lot4.quantite=10;
    listeLots.append(lot4);*/

    ui->debug->append("Création de la liste de lot");
    setListeLots();

}
//communication
void PanelTactile::lireJson(){

    //demander la liste de lot

    //lire la liste de lot

    //decripter json

    //créer les lots


    //ajouter à la liste de lots

}



std::string PanelTactile::on_usinage1_clicked()
{
    ui->debug->append("on_usinage1_clicked()");
    std::string typeUsinage1;
    return typeUsinage1;
   // QMessageBox::critical(this,"test","usinage1 retour");

}

std::string PanelTactile::on_usinage2_clicked()
{
     ui->debug->append("on_usinage2_clicked()");
    std::string typeUsinage2 ;
    return typeUsinage2;
   // QMessageBox::critical(this,"test","usinage2 retour");

}

std::string PanelTactile::on_usinage3_clicked()
{
      ui->debug->append("on_usinage3_clicked()");
  std::string typeUsinage3;
    return  typeUsinage3;

    //QMessageBox::critical(this,"test","usinage3 retour");

}

std::string PanelTactile::on_bt_expedition_clicked()
{
     ui->debug->append("on_bt_expedition_clicked()");
    std::string expedition;
    return expedition;

}

std::string PanelTactile::on_panne_fraisage_clicked()
{
    ui->debug->append("on_panne_fraisage_clicked()");
    std::string panne_fraisage;
    return panne_fraisage;

}

std::string PanelTactile::on_panne_tamponnage_clicked()
{
     ui->debug->append("on_panne_fraisage_clicked()");
    std::string panne_tamponnage;
    return panne_tamponnage;


}

//--> {"jsonrpc": "2.0", "method": "on_panne_tamponnage_clicked", "params": [], "id": 1}
