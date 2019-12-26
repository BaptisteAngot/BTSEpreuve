#ifndef PANELTACTILE_H
#define PANELTACTILE_H

#include <QMainWindow>

#include "lot.h"

namespace Ui {
class PanelTactile;
}

class PanelTactile : public QMainWindow
{
    Q_OBJECT




public:
    explicit PanelTactile(QWidget *parent = 0);
    ~PanelTactile();


private slots:
    void on_test1_copyAvailable(bool b);

    void on_pushButton_2_clicked();

    std::string on_usinage1_clicked();

    std::string on_usinage2_clicked();

    std::string on_usinage3_clicked();

    std::string on_bt_expedition_clicked();



    std::string on_panne_fraisage_clicked();

    std::string on_panne_tamponnage_clicked();

private:
    Ui::PanelTactile *ui;
    QVector<Lot> listeLots;
    void setListeLots();
    void lireJson();




};

#endif // PANELTACTILE_H


