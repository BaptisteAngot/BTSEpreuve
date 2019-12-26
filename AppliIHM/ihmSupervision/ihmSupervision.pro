#-------------------------------------------------
#
# Project created by QtCreator 2018-04-05T10:46:13
#
#-------------------------------------------------

QT       += core gui

greaterThan(QT_MAJOR_VERSION, 4): QT += widgets

TARGET = ihmSupervision
TEMPLATE = app

# The following define makes your compiler emit warnings if you use
# any feature of Qt which has been marked as deprecated (the exact warnings
# depend on your compiler). Please consult the documentation of the
# deprecated API in order to know how to port your code away from it.
DEFINES += QT_DEPRECATED_WARNINGS

# You can also make your code fail to compile if you use deprecated APIs.
# In order to do so, uncomment the following line.
# You can also select to disable deprecated APIs only up to a certain version of Qt.
#DEFINES += QT_DISABLE_DEPRECATED_BEFORE=0x060000    # disables all the APIs deprecated before Qt 6.0.0


SOURCES += \
        main.cpp \
        paneltactile.cpp \
    lot.cpp \
    boitier.cpp \
    traitement.cpp \
    productionpersonnalisee.cpp

HEADERS += \
        paneltactile.h \
    lot.h \
    boitier.h \
    traitement.h \
    productionpersonnalisee.h

FORMS += \
        paneltactile.ui
LIBS +=

target.path = /home/pi/ihm_Supervision
INSTALLS += target


