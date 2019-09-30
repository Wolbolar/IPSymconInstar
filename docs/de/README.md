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
 - Kamera Einstellungen (entsprechend den Einstellungen im INSTAR Kamera Menü)
 - es werden sämtliche von INSTAR beschriebenen Befehle über das CGI (Common Gateway Interface) unterstützt

### Status Rückmeldung:  

 - Bild Anzeige
 - Benachrichtung von [INSTAR](https://www.instar.de/ "INSTAR") an IP-Symcon bei einem Event
 - Email Benachrichtigung bei Event
 - Push Benachrichtigung bei einem Event
 - Auswertung der Alarmmitteilung der Kamera	
  

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

##### 1. Verwenden externer Sensoren / Beispiel Anfahren zu einer bestimmten Position ausgelöst durch einen Bewegungsmelder 

Man kann durch einen Bewegungsmelder der IP-Symcon bekannt ist, sei die nun KNX, LCN, Homematic oder alle Systeme die von IP-Symcon unterstützt werden,
die Kamera auf eine bestimmte Position anfahren. Angenommen in der Einfahrt löst ein Bewegungsmelder aus kann dann die Kamera automatisch auf den passenden Bildbereich schwenken.

Hierzu wird ein Ereignis in IP-Symcon angelegt. Als Auslöser wird die Variable des Bewegungsmelders ausgewählt als Instanz die Kamera selber.

![triggerevent](img/instar_trigger_event.png?raw=true "trigger event") 

Was passieren soll kann man dann frei nach Ereigniss definieren z.B. eine Position anfahren oder ein Schnappschuss erstellen.

##### 2. Aktivieren Sie die Nachtsicht nur, wenn eine Bewegung erkannt wird

Aktivieren Sie die Nachtsicht Ihrer Kamera nach einem Zeitplan oder ausgelöst durch einen in das Hausautomationssystem integrierten externen/kamerainternen Sensor.

###### Einschalten der IR LED nach Dunkelheit

![ir_night](img/IR_night.png?raw=true "IR Night") 

###### Ausschalten der IR LED bei Helligkeit

![ir_day](img/IR_day.png?raw=true "IR Day") 

###### Einschalten der IR LED bei Bewegungerkennung durch einen Bewegungssensor

![ir_motion](img/IR_motion.png?raw=true "IR Motion") 

Die Aktivierung des Nachtsichtgeräts im Alarmfall ist natürlich nur möglich, wenn die Kamera über einen internen PIR-Sensor zur Bewegungserkennung verfügt
oder wenn Sie das Alarmsignal eines externen Sensors in IP-Symcon verwenden, um die Kamera scharf zu stellen. Der Vorteil - die Kamera ist nachts unauffällig und das IR-Licht zieht keine Insekten / Spinnen an. Der Stromverbrauch wird natürlich auch spürbar gesenkt.

Einschalten der IR LED / Auto
```php
INSTAR_LED_Auto(int $InstanceID)
```
$InstanceID Objekt ID der INSTAR Kamera

Deaktivieren der IR LED
```php
INSTAR_LED_Inactive(int $InstanceID)
```
$InstanceID Objekt ID der INSTAR Kamera

##### 3. Zeitgesteuertes Anfahren einer Position mit einem Wochenplan

Die INSTAR Kamera verfügt über 8 abspeicherbare Positionen die von der Kamera angefahren werden können. Dazu ist zunächst einmal jede Position anzufahren und dann abzuspeichern, anschließend kann die entsprechende Position direkt angefahren werden.

Mit Hilfe eines Wochenplans kann man nun definieren an welchen Tagen und zu welcher Uhrzeit welche Position angefahren werden soll.

![weekplan1](img/instar_weekplan1.png?raw=true "weekplan1")

Dazu stellt man zunächst die gewünschten Einstellngen im Wochenplan selber ein indem man diesen in der Konsole mit einem Doppelklick öffnet.
Im Webfront kann man dann den Wochenplan konfigurieren und definieren zu welcher Zeit welche Position angefahren werden soll.

![weekplan2](img/instar_weekplan2.png?raw=true "weekplan2") 

Befehle für ein Skript zum Anfahren einer Position

Anfahren einer Kamera Position 1 - 8
```php
INSTAR_GotoPosition(int $InstanceID, int $position)
```
$InstanceID Objekt ID der INSTAR Kamera
$position Kamera Position (1 - 8)

##### 4. Verwenden Sie für jede Position unterschiedliche Erkennungsbereiche

In Kombination mit der geplanten Tag- und Nachtposition (siehe oben) können Sie auch verschiedene Bewegungserkennungsbereiche aktivieren

Bereich 1 aktivieren / deaktivieren
```php
INSTAR_SetAlarmZone1(int $InstanceID, bool $state)
```
$InstanceID Objekt ID der INSTAR Kamera
$state true / false (ein / aus) 

Bereich 2 aktivieren / deaktivieren
```php
INSTAR_SetAlarmZone2(int $InstanceID, bool $state)
```
$InstanceID Objekt ID der INSTAR Kamera
$state true / false (ein / aus) 

Bereich 3 aktivieren / deaktivieren
```php
INSTAR_SetAlarmZone3(int $InstanceID, bool $state)
```
$InstanceID Objekt ID der INSTAR Kamera
$state true / false (ein / aus) 

Bereich 4 aktivieren / deaktivieren
```php
INSTAR_SetAlarmZone4(int $InstanceID, bool $state)
```
$InstanceID Objekt ID der INSTAR Kamera
$state true / false (ein / aus) 

##### 5. Verwenden Sie unterschiedliche Empfindlichkeiten für Tag und Nacht

Da für die Bewegungserkennung bei Tag und Nacht häufig unterschiedliche Empfindlichkeiten erforderlich sind, können Sie diese auch anpassen - zum Beispiel auf 75% bei Tag und 25% bei Nacht.

Bereich 1 Empfindlichkeit einstellen
```php
INSTAR_ SetAlarmZone1Senitivity(int $InstanceID, int $sensitivity)
```
$InstanceID Objekt ID der INSTAR Kamera
$sensitivity 0 - 100

Bereich 2 Empfindlichkeit einstellen
```php
INSTAR_ SetAlarmZone1Senitivity(int $InstanceID, int $sensitivity)
```
$InstanceID Objekt ID der INSTAR Kamera
$sensitivity 0 - 100

Bereich 3 Empfindlichkeit einstellen
```php
INSTAR_ SetAlarmZone1Senitivity(int $InstanceID, int $sensitivity)
```
$InstanceID Objekt ID der INSTAR Kamera
$sensitivity 0 - 100

Bereich 4 Empfindlichkeit einstellen
```php
INSTAR_ SetAlarmZone1Senitivity(int $InstanceID, int $sensitivity)
```
$InstanceID Objekt ID der INSTAR Kamera
$sensitivity 0 - 100

##### 6. Deaktivieren Sie den Alarm aller Kameras, wenn Sie zu Hause ankommen
Nutzen Sie die Geofence Funktion eines Smartphones oder einen Smartbutton oder Funk-Schlüsselanhänger um alle Alarmerkennungsbereiche und den PIR-Sensor aller Kameras zu deaktivieren, wenn Sie keinen Alarm auslösen möchten.

Bereich 1 aktivieren / deaktivieren
```php
INSTAR_SetAlarmZone1(int $InstanceID, bool $state)
```
$InstanceID Objekt ID der INSTAR Kamera
$state true / false (ein / aus) 

andere Zonen (s.o.)

Beispiel beim Ankommen am Haus mit einem Smartphone Bereiche ausschalten

![presence](img/presence.png?raw=true "Presence") 

##### 7. Verwenden Sie externe Sensoren, um Ihre Kamera zu alarmieren, wenn eine Bewegung erkannt wird

Lassen Sie Ihre Kamera in Abhängigkeit von Systemvariablen im Hausautomationssystem zwischen Positionen wechseln. Zum Beispiel: Wenn der Türsensor ausgelöst wird, schaue zur Tür, wenn der Fenstersensor ausgelöst wird, wenden dich zum Fenster, und wenn der externe Bewegungssensor eine Person erkennt, schaue zur Küchentür.

![triggerevent](img/instar_trigger_event.png?raw=true "trigger event") 

##### 8. Verwenden Sie externe Sensoren, um Alarmaufzeichnungen auszulösen

Wenn Sie Ihre Kamera so einstellen, dass sie sich bei Auslösung durch einen externen Sensor auf eine Position ausrichtet, möchten Sie wahrscheinlich eine Alarmaufzeichnung auf der internen SD-Karte starten, um den Eindringling zu einzufangen.
Dies kann durch Starten der manuellen Aufzeichnung über IP-Symcon und nach einer Verzögerung nach dem Stoppbefehl erfolgen. Aufgrund der einstellbaren Verzögerung ist die Länge des Alarmvideos frei wählbar.

Aufzeichnung starten
```php
INSTAR_StartRecording(int $InstanceID, int $time)
```
$InstanceID Objekt ID der INSTAR Kamera
$time Zeit in Sekunden

##### 9. Verbinden Sie Ihre Kameras miteinander 

Installieren Sie Ihre Kameras so, dass sie einander immer im Auge behalten, mit Hilfe der Park Position, die Ihre Kamera nach dem Verstellen immer in die voreingestellte Position zurück bringt.
Auf diese Weise wird verhindert, dass Eindringlinge Ihre Kameras ungesehen manipulieren.

Wenn eine Kamera eine Bewegung erkennt, können Sie sie über die Alarmserver-Funktion IP-Symcon alarmieren.
IP-Symcon kann dann einen Befehl an andere Kameras in der Nähe senden, um sich in Richtung der Position zu drehen, an der die ursprüngliche Kamera den Eindringling erkannt hat.
Und im Anschluß eine Alarmaufzeichnung starten.

Anfahren einer Kamera Position 1 - 8
```php
INSTAR_GotoPosition(int $InstanceID, int $position)
```
$InstanceID Objekt ID der INSTAR Kamera
$position Kamera Position (1 - 8)

Aufzeichnung starten
```php
INSTAR_StartRecording(int $InstanceID, int $time)
```
$InstanceID Objekt ID der INSTAR Kamera
$time Zeit in Sekunden

##### 10. Nach Geräuschquellen suchen

Wenn die Audioerkennung Ihrer Kamera auslöst, kennen Sie wahrscheinlich nicht den Ort der Geräuschquelle.
Sie können in einem solchen Fall je nach Kameratyp einen horizontalen oder vertikalen Suchlauf auslösen. Dies muss dann manuell mit der gewünschten Verzögerung wieder gestoppt werden.

Horizonatal Scan
```php
INSTAR_ScanHorizontal(int $InstanceID)
```
$InstanceID Objekt ID der INSTAR Kamera

Vertikal Scan
```php
INSTAR_ScanVertical(int $InstanceID)
```
$InstanceID Objekt ID der INSTAR Kamera

##### 11. Deaktivieren Sie manuell alle Alarmfunktionen für alle Ihre Kameras

Wenn Sie in Ihrer Kamera mehr als einen Alarmauslöser aktiviert haben - PIR-Sensor, Alarmbereiche, Audioerkennung, Alarmeingang - können Sie diese über den Alarmplan gleichzeitig aktivieren und deaktivieren,
ohne jeden Auslöser einzeln ansprechen zu müssen.

Alarme aktivieren / deaktivieren
```php
INSTAR_AlarmDetection(int $InstanceID, bool $state)
```
$InstanceID Objekt ID der INSTAR Kamera
$state true / false (ein / aus)

##### Auslösen eines Alarms durch ein Ereigniss (nur Full HD Modelle)

##### Zeitgesteuertes aktivieren der Bewegungserkennungsbereiche



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