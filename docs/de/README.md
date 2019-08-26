# IPSymconINSTAR
[![Version](https://img.shields.io/badge/Symcon-PHPModul-red.svg)](https://www.symcon.de/service/dokumentation/entwicklerbereich/sdk-tools/sdk-php/)
[![Version](https://img.shields.io/badge/Symcon%20Version-5.0%20%3E-green.svg)](https://www.symcon.de/forum/threads/38222-IP-Symcon-5-0-verf%C3%BCgbar)
![Code](https://img.shields.io/badge/Code-PHP-blue.svg)
[![StyleCI](https://github.styleci.io/repos/187536063/shield?branch=master)](https://github.styleci.io/repos/187536063)


Modul für IP-Symcon ab Version 5.2. Ermöglicht die Kommunikation mit einer [INSTAR](https://www.instar.de/ "INSTAR") Kamera.

## Dokumentation

**Inhaltsverzeichnis**

1. [Funktionsumfang](#1-funktionsumfang)  
2. [Voraussetzungen](#2-voraussetzungen)  
3. [Installation](#3-installation)  
4. [Funktionsreferenz](#4-funktionsreferenz)
5. [Konfiguration](#5-konfiguration)  
6. [Anhang](#6-anhang)  

## 1. Funktionsumfang

Mit dem Modul lassen sich Befehle an eine [INSTAR](https://www.instar.de/ "INSTAR") Kamera aus IP-Symcon senden und die Events einer [INSTAR](https://www.instar.de/ "INSTAR") Kamera in IP-Symcon (ab Version 5.2) empfangen. 

### Befehle an INSTAR senden:  

 - Steuerung ( hoch, runter, links, rechts, stop) 
 - Position setzten und anfahren
 - Kamera Einstellungen (Kontrast, Helligkeit, Farbe)
 - es werden sämtliche von INSTAR beschriebenen Befehle über das CGI (Common Gateway Interface) unterstützt

### Status Rückmeldung:  

 - Bild Anzeige
 - Benachrichtung von [INSTAR](https://www.instar.de/ "INSTAR") an IP-Symcon bei einem Event
 - Email Benachrichtigung bei Event
 - Push Benachrichtigung bei einem Event	
  

## 2. Voraussetzungen

 - IP-Symcon 5.2
 - [INSTAR](https://www.instar.de/ "INSTAR") Kamera
 - der Master Branch ist für die aktuelle IP-Symcon Version ausgelegt.
 - bei IP-Symcon Versionen kleiner 5.1 ist der Branch _5.0_ zu wählen

## 3. Installation

### a. Laden des Moduls

Die Webconsole von IP-Symcon mit _http://{IP-Symcon IP}:3777/console/_ öffnen. 


Anschließend oben rechts auf das Symbol für den Modulstore (IP-Symcon > 5.2) klicken

![Store](img/store_icon.png?raw=true "open store")

Im Suchfeld nun

```
INSTAR
```  

eingeben

![Store](img/module_store_search.png?raw=true "module search")

und schließend das Modul auswählen und auf _Installieren_

![Store](img/install.png?raw=true "install")

drücken.

### b. Einrichtung in IPS


Bevor die eigentliche Instanz angelegt wird, muss eine Kategorien an einer gewünschten Stelle im Objektbaum angelegt werden.
In diese Kategorie werden dann später vom Modul bei einem Event oder bei einer Bewegungserkennung oder manueller Aufforderung,
jeweils ein Bild zum Zeitpunkt des Events abgelegt.
Wir legen also eine Kategorie an der gewünschten Position im Objektbaum an (_Rechtsklick -> Objekt hinzufügen -> Kategorie_) und benennen diese z.B. mit
den Namen _Besucherhistorie_ .
	
In IP-Symcon nun _Instanz hinzufügen_ (_Rechtsklick -> Objekt hinzufügen -> Instanz_) auswählen unter der Kategorie, unter der man die INSTAR Kamera hinzufügen will,
und _INSTAR_ auswählen.

![SelectInstance](img/instanz.png?raw=true "select instance") 
 
Im Konfigurationsformular ist zunächst das passende Kamera Modell von INSTAR auszuwählen.




## 4. Funktionsreferenz

### INSTAR:

Die IP Adresse der INSTAR Kamera sowie Username sowie Passwort von INSTAR sind anzugeben.
Es wird bei jedem Event eine Mitteilung an IP-Symcon gesendet.
Mit Hilfe eines Ereignisses was bei Variablenaktualisierung greift können dann in IP-Symcon weitere Aktionen
ausgelöst werden. Das Livebild kann in IP-Symcon eingesehen werden sowie die Historie der letzten Bilder.



#### Anwendungsbeispiele

##### Auslösen eines Alarms durch ein Ereigniss (nur Full HD Modelle)

##### Aktivieren der Nachtsicht abhängig von einem externen Sensor

##### Zeitgesteuertes Anfahren einer Position mit einem Wochenplan

##### Zeitgesteuertes aktivieren der Bewegungserkennungsbereiche

##### Anpassen der Empfindlichkeit der Bewegungserkennung abhängig von Tag oder Nacht 
	
##### Zeitgesteuertes Einstellen der Alarmbereiche

##### Definierte Position bei einem Ereignis anfahren

##### Länge eines Aufnahmevideos bestimmen

##### Suchen einer Lärmquelle bei Audioerkennung



## 5. Konfiguration:

### INSTAR:

| Eigenschaft | Typ     | Standardwert | Funktion                                  |
| :---------: | :-----: | :----------: | :---------------------------------------: |
| IPSIP       | string  |              | IP Adresse IP-Symcon                      |
| Host        | string  |              | IP Adresse INSTAR                         |
| User        | string  |              | INSTAR User                               |
| Password    | string  |              | INSTAR Passwort                           |
| picturelimit| integer |    20        | Limit an abgelegten Bildern               |






## 6. Anhang

###  a. Funktionen:

#### INSTAR:

`INSTAR_GetInfo(integer $InstanceID)`

Information der INSTAR Kamera auslesen

`INSTAR_Right(integer $InstanceID)`

Rechtsbewegung der Kamera

`INSTAR_Left(integer $InstanceID)`

Linkssbewegung der Kamera

`INSTAR_Up(integer $InstanceID)`

Hochbewegung der Kamera

`INSTAR_Down(integer $InstanceID)`

Runterbewegung der Kamera

`INSTAR_Stop(integer $InstanceID)`

Stoppt die Bewegung der Kamera

   



###  b. GUIDs und Datenaustausch:

#### INSTAR:

GUID: `{3E0686DD-A9FC-308D-35ED-71E251F5F7FB}` 