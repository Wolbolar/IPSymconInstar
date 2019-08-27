# IPSymconINSTAR
[![Version](https://img.shields.io/badge/Symcon-PHPModul-red.svg)](https://www.symcon.de/service/dokumentation/entwicklerbereich/sdk-tools/sdk-php/)
[![Version](https://img.shields.io/badge/Symcon%20Version-5.0%20%3E-green.svg)](https://www.symcon.de/forum/threads/38222-IP-Symcon-5-0-verf%C3%BCgbar)
![Code](https://img.shields.io/badge/Code-PHP-blue.svg)
[![StyleCI](https://github.styleci.io/repos/187536063/shield?branch=master)](https://github.styleci.io/repos/187536063)


Module for IP-Symcon from version 5.2. Allows communication with a [INSTAR](https://www.instar.de/ "INSTAR") camera.

## Documentation

**Table of Contents**

1. [Features](#1-features)
2. [Requirements](#2-requirements)
3. [Installation](#3-installation)
4. [Function reference](#4-functionreference)
5. [Configuration](#5-configuration)
6. [Annex](#6-annex)

## 1. Features

With the module commands can be sent to an [INSTAR](https://www.instar.de/ "INSTAR") camera from IP-Symcon and the events of an [INSTAR](https://www.instar.de/ "INSTAR") Camera received in IP-Symcon (version 5.2 or higher).

### Send commands to INSTAR:  

- Control (up, down, left, right, stop)
- Set preset position and start
- Camera settings (contrast, brightness, color)

### Status feedback:  

- Picture display
- Notification of [INSTAR](https://www.instar.de/ "INSTAR") to IP-Symcon at an event
- Email notification at Event
  

## 2. Requirements

 - IP-Symcon 5.2
 - [INSTAR](https://www.instar.de/ "INSTAR") camera
 - the Master Branch is designed for the current IP-Symcon version.
 - For IP-Symcon versions smaller than 5.1 the branch _Old-Version_ has to be selected
 

## 3. Installation

### a. Loading the module

Open the IP Console's web console with _http://{IP-Symcon IP}:3777/console/_.

Then click on the module store icon (IP-Symcon > 5.1) in the upper right corner.

![Store](img/store_icon.png?raw=true "open store")

In the search field type

```
INSTAR
```  


![Store](img/module_store_search_en.png?raw=true "module search")

Then select the module and click _Install_

![Store](img/install_en.png?raw=true "install")

### b. Configuration in IP-Symcon

Before the actual instance is created, two categories must be created at a desired position in the object tree.

![SelectInstance](img/instance.png?raw=true "select instance") 


## 4. Function reference

### INSTAR:

The IP address of the INSTAR camera and the username and password of INSTAR must be specified.
It will be sent a message to IP-Symcon at each event movement by INSTAR.
With the help of an event that uses variable updating, additional actions can be taken in IP-Symcon.
The live image can be viewed in IP-Symcon as well as the history of the last visitors.


## 5. Configuration:

### INSTAR:

| Property    | Type    | Value        | Description                               |
| :---------: | :-----: | :----------: | :---------------------------------------: |
| IPSIP       | string  |              | IP Adress IP-Symcon                       |
| Host        | string  |              | IP Adress INSTAR                          |
| User        | string  |              | INSTAR User                               |
| Password    | string  |              | INSTAR Password                           |
| picturelimit| integer |    20        | Picture Limit                             |






## 6. Annnex

###  a. Functions:

#### INSTAR:

`INSTAR_GetInfo(integer $InstanceID)`

Read out the information of the INSTAR camera

`INSTAR_Right(integer $InstanceID)`

Right movement of the camera

`INSTAR_Left(integer $InstanceID)`

Left movement of the camera

`INSTAR_Up(integer $InstanceID)`

Upward movement of the camera

`INSTAR_Down(integer $InstanceID)`

Down movement of the camera

`INSTAR_Stop(integer $InstanceID)`

Stops the movement of the camera


###  b. GUIDs and data exchange:

#### INSTAR:

GUID: `{3E0686DD-A9FC-308D-35ED-71E251F5F7FB}` 