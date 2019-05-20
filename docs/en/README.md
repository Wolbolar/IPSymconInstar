# IPSymconInstar
[![Version](https://img.shields.io/badge/Symcon-PHPModul-red.svg)](https://www.symcon.de/service/dokumentation/entwicklerbereich/sdk-tools/sdk-php/)
[![Version](https://img.shields.io/badge/Symcon%20Version-5.0%20%3E-green.svg)](https://www.symcon.de/forum/threads/38222-IP-Symcon-5-0-verf%C3%BCgbar)


Module for IP-Symcon from version 5.x. Allows communication with a Instar camera.

## Documentation

**Table of Contents**

1. [Features](#1-features)
2. [Requirements](#2-requirements)
3. [Installation](#3-installation)
4. [Function reference](#4-functionreference)
5. [Configuration](#5-configuration)
6. [Annex](#6-annex)

## 1. Features

The module can be used to send commands to a Doorbird door intercom and to receive the status feedback in IP-Symcon (version 5 or higher).

### Send commands to Doorbird:  

 - Open door 
 - Turn on the IR light
 - Request snapshot

### Status feedback:  

 - Image display
 - Time last bell
 - Time of last movement
 - Time last door opening
 - Picture on the move
 - Picture at bell signal
  

## 2. Requirements

 - IP-Symcon 5.x
 - Doorbird Doorphone, Hardware Version 1.00 and above. Firmware version 000098 and higher.
 - the Master Branch is designed for the current IP-Symcon version.
 - For IP-Symcon versions smaller than 4.1 the branch _Old-Version_ has to be selected

## 3. Installation

### a. Loading the module

Open the IP Console's web console with _http://<IP-Symcon IP>:3777/console/_.

Then click on the module store icon (IP-Symcon > 5.1) in the upper right corner.

![Store](img/store_icon.png?raw=true "open store")

In the search field type

```
Doorbird
```  


![Store](img/module_store_search_en.png?raw=true "module search")

Then select the module and click _Install_

![Store](img/install_en.png?raw=true "install")


#### Install alternative via Modules instance (IP-Symcon < 5.1)

Open the IP Console's web console with _http://<IP-Symcon IP>:3777/console/_.

_Open_ the object tree .

![Objektbaum](img/object_tree.png?raw=true "Objektbaum")	

Open the instance _'Modules'_ below core instances in the object tree of IP-Symcon (>= Ver 5.x) with a double-click and press the _Plus_ button.

![Modules](img/modules.png?raw=true "Modules")	

![Plus](img/plus.png?raw=true "Plus")	

![ModulURL](img/add_module.png?raw=true "Add Module")
 
Enter the following URL in the field and confirm with _OK_:

```
https://github.com/Wolbolar/IPSymconInstar
```  
	         
Then an entry for the module appears in the list of the instance _Modules_

By default, the branch _master_ is loaded, which contains current changes and adjustments.
Only the _master_ branch is kept current.

![Master](img/master.png?raw=true "master") 

If an older version of IP-Symcon smaller than version 4.1 is used, click on the gear on the right side of the list.
It opens another window,

![SelectBranch](img/select_branch_en.png?raw=true "select branch") 

here you can switch to another branch, for older versions smaller than 4.1 select _Old-Version_ .

### b. Configuration in IP-Symcon

Before the actual instance is created, two categories must be created at a desired position in the object tree.


## 4. Function reference

### Doorbird:

The IP address of the Doorbird and of IP Symcon and the username and password of Doorbird must be specified.
It will be sent a message to IP-Symcon at each event ringing, movement, door open by Doorbird.
With the help of an event that uses variable updating, additional actions can be taken in IP-Symcon.
The live image can be viewed in IP-Symcon as well as the history of the last visitors.


## 5. Configuration:

### Doorbird:

| Property    | Type    | Value        | Description                               |
| :---------: | :-----: | :----------: | :---------------------------------------: |
| IPSIP       | string  |              | IP Adress IP-Symcon                       |
| Host        | string  |              | IP Adress Doorbird                        |
| User        | string  |              | Doorbird User                             |
| Password    | string  |              | Doorbird Password                         |
| picturelimit| integer |    20        | Picture Limit                             |






## 6. Annnex

###  a. Functions:

#### Instar:

`Doorbird_SetupNotification(integer $InstanceID)`

Set up IP Symcon notifications from Doorbird

`Doorbird_GetInfo(integer $InstanceID)`

Read buildnumber, firmware version and WLAN MAC address of Doorbird

`Doorbird_GetSnapshot(integer $InstanceID)`

Request a snapshoot from Doorbird and put it in IP-Symcon

`Doorbird_Light(integer $InstanceID)`

Turn on the IR lamps of the Doorbird, corresponds to the lamps button in the app

`Doorbird_OpenDoor(integer $InstanceID)`

Press the door opener of the Doorbird

`Doorbird_GetFavorites(integer $InstanceID)`

Reads favorites from the Doorbird


###  b. GUIDs and data exchange:

#### Instar:

GUID: `{3E0686DD-A9FC-308D-35ED-71E251F5F7FB}` 