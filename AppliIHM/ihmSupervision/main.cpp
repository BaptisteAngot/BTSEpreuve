#include "paneltactile.h"
#include <QApplication>

int main(int argc, char *argv[])
{
    QApplication a(argc, argv);
    PanelTactile w;
    w.show();

    return a.exec();
}
