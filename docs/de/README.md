# IPSymconInstar
[![Version](https://img.shields.io/badge/Symcon-PHPModul-red.svg)](https://www.symcon.de/service/dokumentation/entwicklerbereich/sdk-tools/sdk-php/)
[![Version](https://img.shields.io/badge/Symcon%20Version-5.0%20%3E-green.svg)](https://www.symcon.de/forum/threads/38222-IP-Symcon-5-0-verf%C3%BCgbar)


Modul für IP-Symcon ab Version 5.x. Ermöglicht die Kommunikation mit einer Instar Kamera.

## Dokumentation

**Inhaltsverzeichnis**

1. [Funktionsumfang](#1-funktionsumfang)  
2. [Voraussetzungen](#2-voraussetzungen)  
3. [Installation](#3-installation)  
4. [Funktionsreferenz](#4-funktionsreferenz)
5. [Konfiguration](#5-konfiguartion)  
6. [Anhang](#6-anhang)  

## 1. Funktionsumfang

Mit dem Modul lassen sich Befehle an eine Instar Kamera aus IP-Symcon senden und die Events einer Instar Kamera in IP-Symcon (ab Version 5) empfangen. 

### Befehle an Doorbird senden:  

 - Tür öffnen 
 - IR Licht einschalten
 - Snapshoot anfordern

### Status Rückmeldung:  

 - Bild Anzeige
 - Zeitpunkt letztes Klingelsignal
 - Zeitpunkt letzte Bewegung
 - Zeitpunkt letzte Türöffnung
 - Bild bei Bewegung
 - Bild bei Klingelsignal
	
  

## 2. Voraussetzungen

 - IP-Symcon 5.x
 - Doorbird Türsprechanlage, Hardware Version 1.00 und höher. Firmware Version 000098 und höher.
 - der Master Branch ist für die aktuelle IP-Symcon Version ausgelegt.
 - bei IP-Symcon Versionen kleiner 4.1 ist der Branch _Old-Version_ zu wählen

## 3. Installation

### a. Laden des Moduls

Die Webconsole von IP-Symcon mit _http://<IP-Symcon IP>:3777/console/_ öffnen. 


Anschließend oben rechts auf das Symbol für den Modulstore (IP-Symcon > 5.1) klicken

![Store](img/store_icon.png?raw=true "open store")

Im Suchfeld nun

```
Doorbird
```  

eingeben

![Store](img/module_store_search.png?raw=true "module search")

und schließend das Modul auswählen und auf _Installieren_

![Store](img/install.png?raw=true "install")

drücken.


#### Alternatives Installieren über Modules Instanz (IP-Symcon < 5.1)

Die Webconsole von IP-Symcon mit _http://<IP-Symcon IP>:3777/console/_ öffnen. 

Anschließend den Objektbaum _Öffnen_.

![Objektbaum](img/objektbaum.png?raw=true "Objektbaum")	

Die Instanz _'Modules'_ unterhalb von Kerninstanzen im Objektbaum von IP-Symcon (>=Ver. 5.x) mit einem Doppelklick öffnen und das  _Plus_ Zeichen drücken.

![Modules](img/Modules.png?raw=true "Modules")	

![Plus](img/plus.png?raw=true "Plus")	

![ModulURL](img/add_module.png?raw=true "Add Module")
 
Im Feld die folgende URL eintragen und mit _OK_ bestätigen:

```
https://github.com/Wolbolar/IPSymconDoorbird 
```  
	        
Anschließend erscheint ein Eintrag für das Modul in der Liste der Instanz _Modules_    

Es wird im Standard der Zweig (Branch) _master_ geladen, dieser enthält aktuelle Änderungen und Anpassungen.
Nur der Zweig _master_ wird aktuell gehalten.

![Master](img/master.png?raw=true "master") 

Sollte eine ältere Version von IP-Symcon die kleiner ist als Version 4.1 eingesetzt werden, ist auf das Zahnrad rechts in der Liste zu klicken.
Es öffnet sich ein weiteres Fenster,

![SelectBranch](img/select_branch.png?raw=true "select branch") 

hier kann man auf einen anderen Zweig wechseln, für ältere Versionen kleiner als 4.1 ist hier
_Old-Version_ auszuwählen. 

### b. Einrichtung in IPS


Bevor die eigentliche Instanz angelegt wird, müssen zwei Kategorien an einer gewünschten Stelle im Objektbaum angelegt werden.


## 4. Funktionsreferenz

### Doorbird:

Die IP Adresse des Doorbird sowie von IP-Symcon und der Username sowie Passwort von Doorbird sind anzugeben.
Es wird bei jedem Event Klingeln, Bewegung, Tür öffnen von Doorbird eine Mitteilung an IP-Symcon gesendet.
Mit Hilfe eines Ereignisses was bei Variablenaktualisierung greift können dann in IP-Symcon weitere Aktionen
ausgelöst werden. Das Livebild kann in IP-Symcon eingesehen werden sowie die Historie der letzten Klingelbesucher.
	


## 5. Konfiguration:

### Doorbird:

| Eigenschaft | Typ     | Standardwert | Funktion                                  |
| :---------: | :-----: | :----------: | :---------------------------------------: |
| IPSIP       | string  |              | IP Adresse IP-Symcon                      |
| Host        | string  |              | IP Adresse Doorbird                       |
| User        | string  |              | Doorbird User                             |
| Password    | string  |              | Doorbird Passwort                         |
| picturelimit| integer |    20        | Limit an abgelegten Bildern               |






## 6. Anhang

###  a. Funktionen:

#### Doorbird:

`Doorbird_SetupNotification(integer $InstanceID)`

Benachrichtigungen zu IP-Symcon von der Doorbird einrichten

`Doorbird_GetInfo(integer $InstanceID)`

Liest Buildnumber, Firmware Version und WLAN MAC Adresse von Doorbird aus

`Doorbird_GetSnapshot(integer $InstanceID)`

Fordert einen Snapshoot von Doorbird an und legt diesen in IP-Symcon ab

`Doorbird_Light(integer $InstanceID)`

Schaltet die IR Lampen des Doorbird ein, entspricht Lampen Button in der App

`Doorbird_OpenDoor(integer $InstanceID)`

Betätigt den Türöffner der Doorbird   

`Doorbird_GetFavorites(integer $InstanceID)`

Liest Favoriten aus der Doorbird aus  

   



###  b. GUIDs und Datenaustausch:

#### Doorbird:

GUID: `{D489FA0B-765D-451E-8B21-C6B61ECAC00E}` 



# IPSymconInstar

Modul für IP-Symcon ab Version 4. Ermöglicht die Kommunikation mit einer Doorbird Türsprechanlage.

## Dokumentation

**Inhaltsverzeichnis**

1. [Funktionsumfang](#1-funktionsumfang)  
2. [Voraussetzungen](#2-voraussetzungen)  
3. [Installation](#3-installation)  
4. [Funktionsreferenz](#4-funktionsreferenz)
5. [Konfiguration](#5-konfiguartion)  
6. [Anhang](#6-anhang)  

## 1. Funktionsumfang

Mit dem Modul lassen sich Befehle an eine Doorbird Türsprechanlage senden und die Statusrückmeldung in IP-Symcon (ab Version 4) empfangen. 

### Befehle an Doorbird senden:  

 - Tür öffnen 
 - IR Licht einschalten
 - Snapshoot anfordern

### Status Rückmeldung:  

 - Bild Anzeige
 - Zeitpunkt letztes Klingelsignal
 - Zeitpunkt letzte Bewegung
 - Zeitpunkt letzte Türöffnung
 - Bild bei Bewegung
 - Bild bei Klingelsignal
	
  

## 2. Voraussetzungen

 - IPS 4.x
 - Doorbird Türsprechanlage, Hardware Version 1.00 und höher. Firmware Version 000098 und höher.
 - der Master Branch ist für die aktuelle IP-Symcon Version ausgelegt.
 - bei IP-Symcon Versionen kleiner 4.1 ist der Branch _Old-Version_ zu wählen

## 3. Installation

### a. Laden des Moduls


Die IP-Symcon (min Ver. 4.x) Konsole öffnen. Im Objektbaum unter Kerninstanzen die Instanz __*Modules*__ durch einen doppelten Mausklick öffnen.

![Modules](docs/Modules.png?raw=true "Modules")

In der _Modules_ Instanz rechts oben auf den Button __*Hinzufügen*__ drücken.

![Modules](docs/Hinzufuegen.png?raw=true "Hinzufügen")
 
In dem sich öffnenden Fenster folgende URL hinzufügen:

	
    `https://github.com/Wolbolar/IPSymconInstar`  
    
und mit _OK_ bestätigen.    
    

## 4. Funktionsreferenz

### Instar:

Die IP Adresse des Doorbird sowie von IP-Symcon und der Username sowie Passwort von Doorbird sind anzugeben.
Es wird bei jedem Event Klingeln, Bewegung, Tür öffnen von Doorbird eine Mitteilung an IP-Symcon gesendet.
Mit Hilfe eines Ereignisses was bei Variablenaktualisierung greift können dann in IP-Symcon weitere Aktionen
ausgelöst werden. Das Livebild kann in IP-Symcon eingesehen werden sowie die Historie der letzten Klingelbesucher.
	


## 5. Konfiguration:

### Instar:

| Eigenschaft | Typ     | Standardwert | Funktion                                  |
| :---------: | :-----: | :----------: | :---------------------------------------: |
| IPSIP       | string  |              | IP Adresse IP-Symcon                      |
| Host        | string  |              | IP Adresse Doorbird                       |
| User        | string  |              | Doorbird User                             |
| Password    | string  |              | Doorbird Passwort                         |
| picturelimit| integer |    20        | Limit an abgelegten Bildern               |






## 6. Anhang

###  a. Funktionen:

#### Instar:

`Instar_SetupNotification(integer $InstanceID)`

Benachrichtigungen zu IP-Symcon von der Doorbird einrichten

   



###  b. GUIDs und Datenaustausch:

#### Instar:

GUID: `{3E0686DD-A9FC-308D-35ED-71E251F5F7FB}` 
