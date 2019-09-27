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
 - Kamera Einstellungen (entsprechend den Einstellungen im INSTAR Kkamera Menü)
 - es werden sämtliche von INSTAR beschriebenen Befehle über das CGI (Common Gateway Interface) unterstützt

### Status Rückmeldung:  

 - Bild Anzeige
 - Benachrichtung von [INSTAR](https://www.instar.de/ "INSTAR") an IP-Symcon bei einem Event
 - Email Benachrichtigung bei Event
 - Push Benachrichtigung bei einem Event	
  

## 2. Voraussetzungen

 - IP-Symcon 5.2
 - [INSTAR](https://www.instar.de/ "INSTAR") Kamera
 - der Master Branch ist für die aktuelle IP-Symcon Version (min 5.2) ausgelegt.


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

Zunächst ist das passende Kameramodel auszuwählen und die IP Adresse der INSTAR Kamera einzutragen.

![menu1](img/instar_menu_1.png?raw=true "menu 1") 

Als Nutzer ist der Admin Username sowie Passwort von INSTAR anzugeben.

![menu2](img/instar_menu_2.png?raw=true "menu 2")

Unter _Bild Einstellungen_ ist die vorher angelegte Kategorie auszuwählen unter der die Bilder bei Anforderung oder einem Ereignis abgelegt werden sollen.
Ergänzend können hier Einstellungen zum Auflösung der gespeicherten Bilder sowie dem Kamerabild getroffen werden.

![menu3](img/instar_menu_3.png?raw=true "menu 3") 

Nachdem der Alarmserver eingerichtet worden ist wird optional bei jedem Event eine Mitteilung von IP-Symcon gesendet.

![menu4](img/instar_menu_4.png?raw=true "menu 4")

Dazu kann pro Alarmtyp ein gewünschter Benachrichtigungston ausgewählt werden. Damit eine Psuhnachricht verschickt werden kann ist ein Webfront auszuwählen.
Wenn keine Push Nachricht geschikct werden soll kann die Benachrichtigung auch deaktiviert werden.

Zunächst muss aber der Alarmserver eingerichtet werden nachdem die Kamera Daten und die Nutzerdaten hinterlegt worden sind.
Dazu ist das Alarmserver Menü zu öffnen.

![menu5](img/instar_menu_5.png?raw=true "menu 5")

Wenn sich die Kamera in gleichen lokalen Netzwerk wie IP-Symcon befindet kann hier _IP-Symcon im lokalen Netzwerk_ ausgewählt werden.
Sollte sich die Kamera an einem anderen Standort befinden z.B. einem Ferienhaus ist hier IP-Symcon Connect zu wählen.

![menu6](img/instar_menu_6.png?raw=true "menu 6") 

Abschließend ist auf den Button _*ALARMSERVER EINSTELLUNGEN ÜBERTRAGEN*_ zu drücken damit die Werte an die INSTAR Kamera übertragen werden.


### Webfront:

Im Webfront werden Standard Funktionen zum Schalten angelegt, des weiteren kann man dann im Webfront gespeicherte Bilder und das Live bild einsehen.

![webfront1](img/instar_webfront_pic.png?raw=true "webfront_pic")

![webfront1](img/instar_webfront_1.png?raw=true "webfront_1")

Die Menüstruktur der INSTAR Instanz entspricht dem INSTAR Kamera Menü. Wenn man weitere Funktionen direkt aus dem Webfront schalten will oder eine Variable zum
Schalten über ergänzende Visualisierungstools nutzten will, kann man neben dem entsprechenden Eintrag optional eine Varibale für den Webfront anlegen lassen. 

![webfront2](img/instar_webfront_2.png?raw=true "webfront_2")

Die Werte lassen sich sowohl in der Instanz selber einstellen also auch im Webfront.

![webfront3](img/instar_webfront_3.png?raw=true "webfront_3") 

Das Livebild kann in IP-Symcon eingesehen werden sowie die Historie der letzten Bilder.
 
#### Anwendungsbeispiele

##### Zeitgesteuertes Anfahren einer Position mit einem Wochenplan

Die INSTAR Kamera verfügt über 8 abspeicherbare Positionen die von der Kamera angefahren werden können. dazu ist zunächst einmal jede Position anzufahren und dann abzuspeichern, anschließend kann die entsprechnde Position direkt angefahren werden.

Mit Hilfe eines Wochenplans kann man nun definieren an welchen tagen und zu welcher Uhrzeit welche Position angefahren werden soll.

![weekplan1](img/instar_weekplan1.png?raw=true "weekplan1")

Dazu stellt man zunächst die gewünschten Einstellngen im Wochenplan selber ein indem man diesen in der Konsole mit einem Doppelklick öffnet.
Im Webfront kann man dann den Wochenplan konfigurieren und definieren zu welcher Zeit welche Position angefahren werden soll.

![weekplan2](img/instar_weekplan2.png?raw=true "weekplan2") 

##### Anfahren zu einer bestimmten Position ausgelöst durch einen Bewegungsmelder

Man kann daurch einen Bewegungsmelder der IP-Symcon bekannt ist, sei die nun KNX, LCN, Homematic oder alle Systeme die von IP-Symcon unterstützt werden,
die kamera auf eine bestimmte Position anfahren. Angenommen in der Einfahrt löst ein Bewegungsmelder aus kann dann die Kamera automatisch auf den passenden Bildbereich schwenken.

Hierzu wird ein Ereignis in IP-Symcon angelegt. Als Auslöser wird die Variable des Bewegungsmelders ausgewählt als Instanz die Kamera selber.

![triggerevent](img/instar_trigger_event.png?raw=true "trigger event") 

Was passieren soll kann man dann frei nach Ereigniss definieren z.B. eine Position anfahren oder ein Schnappschuss erstellen.

##### Auslösen eines Alarms durch ein Ereigniss (nur Full HD Modelle)

##### Aktivieren der Nachtsicht abhängig von einem externen Sensor

##### Zeitgesteuertes aktivieren der Bewegungserkennungsbereiche

##### Anpassen der Empfindlichkeit der Bewegungserkennung abhängig von Tag oder Nacht 
	
##### Zeitgesteuertes Einstellen der Alarmbereiche

##### Definierte Position bei einem Ereignis anfahren

Sobald ein Ereignis auslöst ist dies im Webfront zu sehen. Es kann eingesehen werden welcher Alarmtyp von der Kamera ausgelöst wurde und wann das Ereigniss eingetreten ist.

Will man nun eine bestimmte Position anfahren erstellt man einfach ein Ereigniss durch 

![plus](img/plus.png?raw=true "plus")

![plus](img/ereignis.png?raw=true "ereignis")

Als Typ wählt man _Ausgelöst_

![trigger](img/ereignis_trigger.png?raw=true "ereignis trigger")

Als Auslösende Variable wird _**Alarm Benachrichtigung**_ ausgewählt. Als Aktion dann die Position die angefahren werden soll.

![trigger1](img/ereignis_trigger1.png?raw=true "ereignis trigger")

##### Länge eines Aufnahmevideos bestimmen

Die Länge von Aufzeichnungen kann in der Instanz eingestellt werden oder optional auch über den Webfront.

![aufzeichnung](img/aufzeichnung.png?raw=true "aufzeichnung")

##### Suchen einer Lärmquelle bei Audioerkennung

Wenn ein Audio Alarm ausgelöst wurde kann man z.B. die Kamera in den Scan Modus versetzten um im Sichtbreich nach der Quelle des Audioalarms zu suchen.

![aufzeichnung](img/audio.png?raw=true "audio")



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