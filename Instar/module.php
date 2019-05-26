<?

if (@constant('IPS_BASE') == null) //Nur wenn Konstanten noch nicht bekannt sind.
{
// --- BASE MESSAGE
	define('IPS_BASE', 10000);                             //Base Message
	define('IPS_KERNELSHUTDOWN', IPS_BASE + 1);            //Pre Shutdown Message, Runlevel UNINIT Follows
	define('IPS_KERNELSTARTED', IPS_BASE + 2);             //Post Ready Message
// --- KERNEL
	define('IPS_KERNELMESSAGE', IPS_BASE + 100);           //Kernel Message
	define('KR_CREATE', IPS_KERNELMESSAGE + 1);            //Kernel is beeing created
	define('KR_INIT', IPS_KERNELMESSAGE + 2);              //Kernel Components are beeing initialised, Modules loaded, Settings read
	define('KR_READY', IPS_KERNELMESSAGE + 3);             //Kernel is ready and running
	define('KR_UNINIT', IPS_KERNELMESSAGE + 4);            //Got Shutdown Message, unloading all stuff
	define('KR_SHUTDOWN', IPS_KERNELMESSAGE + 5);          //Uninit Complete, Destroying Kernel Inteface
// --- KERNEL LOGMESSAGE
	define('IPS_LOGMESSAGE', IPS_BASE + 200);              //Logmessage Message
	define('KL_MESSAGE', IPS_LOGMESSAGE + 1);              //Normal Message                      | FG: Black | BG: White  | STLYE : NONE
	define('KL_SUCCESS', IPS_LOGMESSAGE + 2);              //Success Message                     | FG: Black | BG: Green  | STYLE : NONE
	define('KL_NOTIFY', IPS_LOGMESSAGE + 3);               //Notiy about Changes                 | FG: Black | BG: Blue   | STLYE : NONE
	define('KL_WARNING', IPS_LOGMESSAGE + 4);              //Warnings                            | FG: Black | BG: Yellow | STLYE : NONE
	define('KL_ERROR', IPS_LOGMESSAGE + 5);                //Error Message                       | FG: Black | BG: Red    | STLYE : BOLD
	define('KL_DEBUG', IPS_LOGMESSAGE + 6);                //Debug Informations + Script Results | FG: Grey  | BG: White  | STLYE : NONE
	define('KL_CUSTOM', IPS_LOGMESSAGE + 7);               //User Message                        | FG: Black | BG: White  | STLYE : NONE
// --- MODULE LOADER
	define('IPS_MODULEMESSAGE', IPS_BASE + 300);           //ModuleLoader Message
	define('ML_LOAD', IPS_MODULEMESSAGE + 1);              //Module loaded
	define('ML_UNLOAD', IPS_MODULEMESSAGE + 2);            //Module unloaded
// --- OBJECT MANAGER
	define('IPS_OBJECTMESSAGE', IPS_BASE + 400);
	define('OM_REGISTER', IPS_OBJECTMESSAGE + 1);          //Object was registered
	define('OM_UNREGISTER', IPS_OBJECTMESSAGE + 2);        //Object was unregistered
	define('OM_CHANGEPARENT', IPS_OBJECTMESSAGE + 3);      //Parent was Changed
	define('OM_CHANGENAME', IPS_OBJECTMESSAGE + 4);        //Name was Changed
	define('OM_CHANGEINFO', IPS_OBJECTMESSAGE + 5);        //Info was Changed
	define('OM_CHANGETYPE', IPS_OBJECTMESSAGE + 6);        //Type was Changed
	define('OM_CHANGESUMMARY', IPS_OBJECTMESSAGE + 7);     //Summary was Changed
	define('OM_CHANGEPOSITION', IPS_OBJECTMESSAGE + 8);    //Position was Changed
	define('OM_CHANGEREADONLY', IPS_OBJECTMESSAGE + 9);    //ReadOnly was Changed
	define('OM_CHANGEHIDDEN', IPS_OBJECTMESSAGE + 10);     //Hidden was Changed
	define('OM_CHANGEICON', IPS_OBJECTMESSAGE + 11);       //Icon was Changed
	define('OM_CHILDADDED', IPS_OBJECTMESSAGE + 12);       //Child for Object was added
	define('OM_CHILDREMOVED', IPS_OBJECTMESSAGE + 13);     //Child for Object was removed
	define('OM_CHANGEIDENT', IPS_OBJECTMESSAGE + 14);      //Ident was Changed
	define('OM_CHANGEDISABLED', IPS_OBJECTMESSAGE + 15);   //Operability has changed
// --- INSTANCE MANAGER
	define('IPS_INSTANCEMESSAGE', IPS_BASE + 500);         //Instance Manager Message
	define('IM_CREATE', IPS_INSTANCEMESSAGE + 1);          //Instance created
	define('IM_DELETE', IPS_INSTANCEMESSAGE + 2);          //Instance deleted
	define('IM_CONNECT', IPS_INSTANCEMESSAGE + 3);         //Instance connectged
	define('IM_DISCONNECT', IPS_INSTANCEMESSAGE + 4);      //Instance disconncted
	define('IM_CHANGESTATUS', IPS_INSTANCEMESSAGE + 5);    //Status was Changed
	define('IM_CHANGESETTINGS', IPS_INSTANCEMESSAGE + 6);  //Settings were Changed
	define('IM_CHANGESEARCH', IPS_INSTANCEMESSAGE + 7);    //Searching was started/stopped
	define('IM_SEARCHUPDATE', IPS_INSTANCEMESSAGE + 8);    //Searching found new results
	define('IM_SEARCHPROGRESS', IPS_INSTANCEMESSAGE + 9);  //Searching progress in %
	define('IM_SEARCHCOMPLETE', IPS_INSTANCEMESSAGE + 10); //Searching is complete
// --- VARIABLE MANAGER
	define('IPS_VARIABLEMESSAGE', IPS_BASE + 600);              //Variable Manager Message
	define('VM_CREATE', IPS_VARIABLEMESSAGE + 1);               //Variable Created
	define('VM_DELETE', IPS_VARIABLEMESSAGE + 2);               //Variable Deleted
	define('VM_UPDATE', IPS_VARIABLEMESSAGE + 3);               //On Variable Update
	define('VM_CHANGEPROFILENAME', IPS_VARIABLEMESSAGE + 4);    //On Profile Name Change
	define('VM_CHANGEPROFILEACTION', IPS_VARIABLEMESSAGE + 5);  //On Profile Action Change
// --- SCRIPT MANAGER
	define('IPS_SCRIPTMESSAGE', IPS_BASE + 700);           //Script Manager Message
	define('SM_CREATE', IPS_SCRIPTMESSAGE + 1);            //On Script Create
	define('SM_DELETE', IPS_SCRIPTMESSAGE + 2);            //On Script Delete
	define('SM_CHANGEFILE', IPS_SCRIPTMESSAGE + 3);        //On Script File changed
	define('SM_BROKEN', IPS_SCRIPTMESSAGE + 4);            //Script Broken Status changed
// --- EVENT MANAGER
	define('IPS_EVENTMESSAGE', IPS_BASE + 800);             //Event Scripter Message
	define('EM_CREATE', IPS_EVENTMESSAGE + 1);             //On Event Create
	define('EM_DELETE', IPS_EVENTMESSAGE + 2);             //On Event Delete
	define('EM_UPDATE', IPS_EVENTMESSAGE + 3);
	define('EM_CHANGEACTIVE', IPS_EVENTMESSAGE + 4);
	define('EM_CHANGELIMIT', IPS_EVENTMESSAGE + 5);
	define('EM_CHANGESCRIPT', IPS_EVENTMESSAGE + 6);
	define('EM_CHANGETRIGGER', IPS_EVENTMESSAGE + 7);
	define('EM_CHANGETRIGGERVALUE', IPS_EVENTMESSAGE + 8);
	define('EM_CHANGETRIGGEREXECUTION', IPS_EVENTMESSAGE + 9);
	define('EM_CHANGECYCLIC', IPS_EVENTMESSAGE + 10);
	define('EM_CHANGECYCLICDATEFROM', IPS_EVENTMESSAGE + 11);
	define('EM_CHANGECYCLICDATETO', IPS_EVENTMESSAGE + 12);
	define('EM_CHANGECYCLICTIMEFROM', IPS_EVENTMESSAGE + 13);
	define('EM_CHANGECYCLICTIMETO', IPS_EVENTMESSAGE + 14);
// --- MEDIA MANAGER
	define('IPS_MEDIAMESSAGE', IPS_BASE + 900);           //Media Manager Message
	define('MM_CREATE', IPS_MEDIAMESSAGE + 1);             //On Media Create
	define('MM_DELETE', IPS_MEDIAMESSAGE + 2);             //On Media Delete
	define('MM_CHANGEFILE', IPS_MEDIAMESSAGE + 3);         //On Media File changed
	define('MM_AVAILABLE', IPS_MEDIAMESSAGE + 4);          //Media Available Status changed
	define('MM_UPDATE', IPS_MEDIAMESSAGE + 5);
// --- LINK MANAGER
	define('IPS_LINKMESSAGE', IPS_BASE + 1000);           //Link Manager Message
	define('LM_CREATE', IPS_LINKMESSAGE + 1);             //On Link Create
	define('LM_DELETE', IPS_LINKMESSAGE + 2);             //On Link Delete
	define('LM_CHANGETARGET', IPS_LINKMESSAGE + 3);       //On Link TargetID change
// --- DATA HANDLER
	define('IPS_DATAMESSAGE', IPS_BASE + 1100);             //Data Handler Message
	define('FM_CONNECT', IPS_DATAMESSAGE + 1);             //On Instance Connect
	define('FM_DISCONNECT', IPS_DATAMESSAGE + 2);          //On Instance Disconnect
// --- SCRIPT ENGINE
	define('IPS_ENGINEMESSAGE', IPS_BASE + 1200);           //Script Engine Message
	define('SE_UPDATE', IPS_ENGINEMESSAGE + 1);             //On Library Refresh
	define('SE_EXECUTE', IPS_ENGINEMESSAGE + 2);            //On Script Finished execution
	define('SE_RUNNING', IPS_ENGINEMESSAGE + 3);            //On Script Started execution
// --- PROFILE POOL
	define('IPS_PROFILEMESSAGE', IPS_BASE + 1300);
	define('PM_CREATE', IPS_PROFILEMESSAGE + 1);
	define('PM_DELETE', IPS_PROFILEMESSAGE + 2);
	define('PM_CHANGETEXT', IPS_PROFILEMESSAGE + 3);
	define('PM_CHANGEVALUES', IPS_PROFILEMESSAGE + 4);
	define('PM_CHANGEDIGITS', IPS_PROFILEMESSAGE + 5);
	define('PM_CHANGEICON', IPS_PROFILEMESSAGE + 6);
	define('PM_ASSOCIATIONADDED', IPS_PROFILEMESSAGE + 7);
	define('PM_ASSOCIATIONREMOVED', IPS_PROFILEMESSAGE + 8);
	define('PM_ASSOCIATIONCHANGED', IPS_PROFILEMESSAGE + 9);
// --- TIMER POOL
	define('IPS_TIMERMESSAGE', IPS_BASE + 1400);            //Timer Pool Message
	define('TM_REGISTER', IPS_TIMERMESSAGE + 1);
	define('TM_UNREGISTER', IPS_TIMERMESSAGE + 2);
	define('TM_SETINTERVAL', IPS_TIMERMESSAGE + 3);
	define('TM_UPDATE', IPS_TIMERMESSAGE + 4);
	define('TM_RUNNING', IPS_TIMERMESSAGE + 5);
// --- STATUS CODES
	define('IS_SBASE', 100);
	define('IS_CREATING', IS_SBASE + 1); //module is being created
	define('IS_ACTIVE', IS_SBASE + 2); //module created and running
	define('IS_DELETING', IS_SBASE + 3); //module us being deleted
	define('IS_INACTIVE', IS_SBASE + 4); //module is not beeing used
// --- ERROR CODES
	define('IS_EBASE', 200);          //default errorcode
	define('IS_NOTCREATED', IS_EBASE + 1); //instance could not be created
// --- Search Handling
	define('FOUND_UNKNOWN', 0);     //Undefined value
	define('FOUND_NEW', 1);         //Device is new and not configured yet
	define('FOUND_OLD', 2);         //Device is already configues (InstanceID should be set)
	define('FOUND_CURRENT', 3);     //Device is already configues (InstanceID is from the current/searching Instance)
	define('FOUND_UNSUPPORTED', 4); //Device is not supported by Module
	define('vtBoolean', 0);
	define('vtInteger', 1);
	define('vtFloat', 2);
	define('vtString', 3);
	define('vtArray', 8);
	define('vtObject', 9);
}

// Modul für INSTAR

class INSTAR extends IPSModule
{
	// helper properties
	private $position = 0;

	public function Create()
	{
		//Never delete this line!
		parent::Create();

		//These lines are parsed on Symcon Startup or Instance creation
		//You cannot use variables here. Just static values.


		$this->RegisterPropertyString("Host", "");
		$this->RegisterPropertyInteger("Port", 80);
		$this->RegisterPropertyString("User", "");
		$this->RegisterPropertyString("Password", "");
		$this->RegisterPropertyInteger("picturelimitsnapshot", 20);
		$this->RegisterPropertyBoolean("activeemail", false);
		$this->RegisterPropertyString("email", "");
		$this->RegisterPropertyInteger("smtpmodule", 0);
		$this->RegisterPropertyString("subject", $this->Translate("Camera Alarm!"));
		$this->RegisterPropertyString("emailtext", $this->Translate("Movement detected"));
		$this->RegisterPropertyBoolean("activeemail2", false);
		$this->RegisterPropertyString("email2", "");
		$this->RegisterPropertyInteger("smtpmodule2", 0);
		$this->RegisterPropertyString("subject2", $this->Translate("Camera Alarm!"));
		$this->RegisterPropertyString("emailtext2", $this->Translate("Movement detected"));
		$this->RegisterPropertyBoolean("activeemail3", false);
		$this->RegisterPropertyString("email3", "");
		$this->RegisterPropertyInteger("smtpmodule3", 0);
		$this->RegisterPropertyString("subject3", $this->Translate("Camera Alarm!"));
		$this->RegisterPropertyString("emailtext3", $this->Translate("Movement detected"));
		$this->RegisterPropertyBoolean("activeemail4", false);
		$this->RegisterPropertyString("email4", "");
		$this->RegisterPropertyInteger("smtpmodule4", 0);
		$this->RegisterPropertyString("subject4", $this->Translate("Camera Alarm!"));
		$this->RegisterPropertyString("emailtext4", $this->Translate("Movement detected"));
		$this->RegisterPropertyBoolean("activeemail5", false);
		$this->RegisterPropertyString("email5", "");
		$this->RegisterPropertyInteger("smtpmodule5", 0);
		$this->RegisterPropertyString("subject5", $this->Translate("Camera Alarm!"));
		$this->RegisterPropertyString("emailtext5", $this->Translate("Movement detected"));
		$this->RegisterPropertyBoolean("activeemail6", false);
		$this->RegisterPropertyString("email6", "");
		$this->RegisterPropertyInteger("smtpmodule6", 0);
		$this->RegisterPropertyString("subject6", $this->Translate("Camera Alarm!"));
		$this->RegisterPropertyString("emailtext6", $this->Translate("Movement detected"));
		$this->RegisterPropertyBoolean("activeemail7", false);
		$this->RegisterPropertyString("email7", "");
		$this->RegisterPropertyInteger("smtpmodule7", 0);
		$this->RegisterPropertyString("subject7", $this->Translate("Camera Alarm!"));
		$this->RegisterPropertyString("emailtext7", $this->Translate("Movement detected"));
		$this->RegisterPropertyBoolean("activeemail8", false);
		$this->RegisterPropertyString("email8", "");
		$this->RegisterPropertyInteger("smtpmodule8", 0);
		$this->RegisterPropertyString("subject8", $this->Translate("Camera Alarm!"));
		$this->RegisterPropertyString("emailtext8", $this->Translate("Movement detected"));
		$this->RegisterPropertyBoolean("activeemail9", false);
		$this->RegisterPropertyString("email9", "");
		$this->RegisterPropertyInteger("smtpmodule9", 0);
		$this->RegisterPropertyString("subject9", $this->Translate("Camera Alarm!"));
		$this->RegisterPropertyString("emailtext9", $this->Translate("Movement detected"));
		$this->RegisterPropertyBoolean("activeemail10", false);
		$this->RegisterPropertyString("email10", "");
		$this->RegisterPropertyInteger("smtpmodule10", 0);
		$this->RegisterPropertyString("subject10", $this->Translate("Camera Alarm!"));
		$this->RegisterPropertyString("emailtext10", $this->Translate("Movement detected"));
		$this->RegisterPropertyBoolean("activeemail11", false);
		$this->RegisterPropertyString("email11", "");
		$this->RegisterPropertyInteger("smtpmodule11", 0);
		$this->RegisterPropertyString("subject11", $this->Translate("Camera Alarm!"));
		$this->RegisterPropertyString("emailtext11", $this->Translate("Movement detected"));
		$this->RegisterPropertyBoolean("altview", false);
		$this->RegisterPropertyInteger("categorysnapshot", 0);
		$this->RegisterPropertyInteger("model", 1);

		$this->RegisterAttributeString("model_name", "");
		$this->RegisterAttributeString("hardVersion", "");
		$this->RegisterAttributeString("softVersion", "");
		$this->RegisterAttributeString("webVersion", "");
		$this->RegisterAttributeString("name", "");
		$this->RegisterAttributeInteger("sdfreespace", 0);
		$this->RegisterAttributeInteger("sdtotalspace", 0);
		$this->RegisterAttributeInteger("platformstatus", 0);

		$this->RegisterAttributeBoolean("dhcpflag", false);
		$this->RegisterAttributeString("ip", "");
		$this->RegisterAttributeString("netmask", "");
		$this->RegisterAttributeString("gateway", "");
		$this->RegisterAttributeInteger("dnsstat", 0);
		$this->RegisterAttributeString("fdnsip", "");
		$this->RegisterAttributeString("sdnsip", "");
		$this->RegisterAttributeString("macaddress", "");
		$this->RegisterAttributeString("networktype", "");
		$this->RegisterAttributeBoolean("upnpstatus", false);
		$this->RegisterAttributeBoolean("th3ddnsstatus", false);

		$this->ConnectParent("{894703FE-9AB7-C5E1-B85E-D01F0C66FDB2}"); // INSTAR IO
	}

	public function ApplyChanges()
	{
		//Never delete this line!
		parent::ApplyChanges();

		$this->RegisterProfile('INSTAR.Movement', 'Motion', '', '', 0, 0, 0, 0, 3);
		$this->RegisterVariableString("LastMovement", $this->Translate("Time last movement"), "INSTAR.Movement", $this->_getPosition());
		$this->RegisterProfileAssociation(
			'INSTAR.Control.Continuous',
			'Move',
			'',
			'',
			0,
			4,
			0,
			0,
			1,
			[
				[0, $this->Translate('Left'), '', -1],
				[1, $this->Translate('Up'), '', -1],
				[2, $this->Translate('Down'), '', -1],
				[3, $this->Translate('Right'), '', -1],
				[4, $this->Translate('Stop'), '', -1]
			]
		);
		$this->RegisterVariableInteger("Control_Continuous", $this->Translate("Control Continuous"), "INSTAR.Control.Continuous", $this->_getPosition());
		$this->EnableAction("Control_Continuous");
		$this->RegisterProfileAssociation(
			'INSTAR.Control.Step',
			'Move',
			'',
			'',
			0,
			3,
			0,
			0,
			1,
			[
				[0, $this->Translate('Step Left'), '', -1],
				[1, $this->Translate('Step Up'), '', -1],
				[2, $this->Translate('Step Down'), '', -1],
				[3, $this->Translate('Step Right'), '', -1]
			]
		);
		$this->RegisterVariableInteger("Control_Step", $this->Translate("Control Step"), "INSTAR.Control.Step", $this->_getPosition());
		$this->EnableAction("Control_Step");
		$this->RegisterProfileAssociation(
			'INSTAR.Control.Scan',
			'Move',
			'',
			'',
			0,
			2,
			0,
			0,
			1,
			[
				[0, $this->Translate('Center'), '', -1],
				[1, $this->Translate('Scan Horizontal'), '', -1],
				[2, $this->Translate('Scan Vertical'), '', -1]
			]
		);
		$this->RegisterVariableInteger("Control_Scan", $this->Translate("Control Scan"), "INSTAR.Control.Scan", $this->_getPosition());
		$this->EnableAction("Control_Scan");
		$this->RegisterProfileAssociation(
			'INSTAR.Snapshot',
			'Camera',
			'',
			'',
			0,
			0,
			0,
			0,
			1,
			[
				[0, $this->Translate('Save Picture'), '', -1]
			]
		);

		$this->RegisterProfile('INSTAR.Hue', 'Light', '', '', 0, 127, 1, 0, 1);
		$this->RegisterVariableInteger("hue", $this->Translate("Hue"), "INSTAR.Hue", $this->_getPosition()); // Hue (0-127), integer
		$this->EnableAction("hue");
		$this->RegisterVariableInteger("Saturation", $this->Translate("Saturation"), "~Intensity.255", $this->_getPosition()); // Saturation (0-255)
		$this->EnableAction("Saturation");
		$this->RegisterVariableInteger("Brightness", $this->Translate("Brightness"), "~Intensity.255", $this->_getPosition()); // Brightness (0-255)
		$this->EnableAction("Brightness");
		$this->RegisterVariableInteger("Contrast", $this->Translate("Contrast"), "~Intensity.255", $this->_getPosition()); // Brightness (0-255)
		$this->EnableAction("Contrast");

		$this->RegisterVariableInteger("INSTARButtonSnapshot", $this->Translate("Save INSTAR picture"), "INSTAR.Snapshot", $this->_getPosition());
		$this->EnableAction("INSTARButtonSnapshot");

		$this->RegisterVariableBoolean("Flip", $this->Translate("Flip"), "~Switch", $this->_getPosition());
		$this->EnableAction("Flip");
		$this->RegisterVariableBoolean("Mirror", $this->Translate("Mirror"), "~Switch", $this->_getPosition());
		$this->EnableAction("Mirror");
		$this->RegisterProfileAssociation(
			'INSTAR.Scene',
			'Image',
			'',
			'',
			0,
			2,
			0,
			0,
			1,
			[
				[0, $this->Translate('Auto'), '', -1],
				[1, $this->Translate('Indoor'), '', -1],
				[2, $this->Translate('Outdoor'), '', -1]
			]
		);
		$this->RegisterVariableInteger("Scene", $this->Translate('Scene'), "INSTAR.Scene", $this->_getPosition());
		$this->EnableAction("Scene");
		$this->RegisterProfile('INSTAR.SetPosition', 'Image', '', '', 0, 7, 1, 0, 1);
		$this->RegisterVariableInteger("SetPosition", $this->Translate("Set Position"), "INSTAR.SetPosition", $this->_getPosition()); // (0-7), integer
		$this->EnableAction("SetPosition");
		$this->RegisterProfile('INSTAR.UnsetPosition', 'Image', '', '', 0, 7, 1, 0, 1);
		$this->RegisterVariableInteger("UnsetPosition", $this->Translate("Unset Position"), "INSTAR.UnsetPosition", $this->_getPosition()); // (0-7), integer
		$this->EnableAction("UnsetPosition");
		$this->RegisterProfile('INSTAR.GotoPosition', 'Image', '', '', 0, 7, 1, 0, 1);
		$this->RegisterVariableInteger("GotoPosition", $this->Translate("Go to Position"), "INSTAR.GotoPosition", $this->_getPosition()); // (0-7), integer
		$this->EnableAction("GotoPosition");

		/*

		$this->RegisterVariableString("startdate", $this->Translate("start date"), "", $this->_getPosition());
		$this->RegisterVariableString("facddnsstatus", $this->Translate("facddnsstatus"), "", $this->_getPosition());
		$this->RegisterVariableString("sdstatus", $this->Translate("sdstatus"), "", $this->_getPosition());
		*/
		$this->RegisterVariableString("notification_alarm", $this->Translate("Alarm Notification"), "", $this->_getPosition());
		$this->ValidateConfiguration();

	}

	/**
	 * Die folgenden Funktionen stehen automatisch zur Verfügung, wenn das Modul über die "Module Control" eingefügt wurden.
	 * Die Funktionen werden, mit dem selbst eingerichteten Prefix, in PHP und JSON-RPC wiefolgt zur Verfügung gestellt:
	 *
	 *
	 */

	private function ValidateConfiguration()
	{
		$host = $this->ReadPropertyString('Host');
		$port = $this->ReadPropertyInteger('Port');
		$user = $this->ReadPropertyString('User');
		$password = $this->ReadPropertyString('Password');
		//$port = $this->ReadPropertyInteger('Port');

		//IP INSTAR prüfen
		if (!filter_var($host, FILTER_VALIDATE_IP) === false) {
			//IP ok
			$ipcheck = true;
		} else {
			$ipcheck = false;
		}

		//Domain INSTAR prüfen
		if (!$this->is_valid_localdomain($host) === false) {
			//Domain ok
			$domaincheck = true;
		} else {
			$domaincheck = false;
		}


		if ($domaincheck === true || $ipcheck === true) {
			$hostcheck = true;
		} else {
			$hostcheck = false;
			$this->SetStatus(203); //IP Adresse oder Host ist ungültig
		}

		//User und Passwort prüfen
		if ($user == "" || $password == "") {
			$this->SetStatus(205); //Felder dürfen nicht leer sein
		} elseif ($user !== "" && $password !== "" && $hostcheck === true) {
			$MediaID = @IPS_GetObjectIDByIdent('INSTARVideo', $this->InstanceID);
			if ($MediaID === false) {
				$MediaID = IPS_CreateMedia(3);                  // Stream im MedienPool anlegen
				IPS_SetParent($MediaID, $this->InstanceID); // Medienobjekt einsortieren unter der Instanz
				IPS_SetIdent($MediaID, 'INSTARVideo');
				IPS_SetPosition($MediaID, -1);
				IPS_SetName($MediaID, 'INSTAR Live Picture'); // Medienobjekt benennen
			}
			$url = "http://".$host.":" . $port . "/mjpegstream.cgi?-chn=12&usr=".$user."&pwd=".$password;
			IPS_SetMediaFile($MediaID, $url, False);    // Image im MedienPool mit Image-Datei verbinden

			// Kategorie prüfen
			$category_snapshot = $this->ReadPropertyInteger('categorysnapshot');
			if ($category_snapshot > 0) {
				$this->SendDebug("INSTAR", "Kategorie mit ObjektID " . $category_snapshot . " gefunden", 0);
			} else {
				$this->SetStatus(208); //category INSTAR snapshot not set
			}

			$ipsversion = $this->GetIPSVersion();

			if ($ipsversion == 0) {
				//Skript bei Bewegung
				$IDSnapshot = @($this->GetIDForIdent('GetINSTARSnapshot'));
				if ($IDSnapshot === false) {
					$IDSnapshot = $this->RegisterScript("GetINSTARSnapshot", "Get INSTAR Snapshot", $this->CreateSnapshotScript(), $this->_getPosition());
					IPS_SetHidden($IDSnapshot, true);
					$this->SetSnapshotEvent($IDSnapshot);
				} else {
					$this->SendDebug("INSTAR", "INSTAR Snapshot Script mit " . $IDSnapshot . " gefunden", 0);
				}
			} else {
				if ($this->GetIDForIdent('LastMovement') > 0) {
					$this->RegisterMessage($this->GetIDForIdent('LastMovement'), VM_UPDATE);
					$this->SendDebug("INSTAR", "Register Message LastMovement", 0);
				}
			}

			//Email
			$emailalert = $this->ReadPropertyBoolean('activeemail');
			$emailalert2 = $this->ReadPropertyBoolean('activeemail2');
			$emailalert3 = $this->ReadPropertyBoolean('activeemail3');
			$emailalert4 = $this->ReadPropertyBoolean('activeemail4');
			$emailalert5 = $this->ReadPropertyBoolean('activeemail5');
			$emailalert6 = $this->ReadPropertyBoolean('activeemail6');
			$emailalert7 = $this->ReadPropertyBoolean('activeemail7');
			$emailalert8 = $this->ReadPropertyBoolean('activeemail8');
			$emailalert9 = $this->ReadPropertyBoolean('activeemail9');
			$emailalert10 = $this->ReadPropertyBoolean('activeemail10');
			$emailalert11 = $this->ReadPropertyBoolean('activeemail11');
			if ($emailalert) {
				$email = $this->ReadPropertyString('email');
				$this->CheckEmail($email);
			} elseif ($emailalert2) {
				$email = $this->ReadPropertyString('email2');
				$this->CheckEmail($email);
			} elseif ($emailalert3) {
				$email = $this->ReadPropertyString('email3');
				$this->CheckEmail($email);
			} elseif ($emailalert4) {
				$email = $this->ReadPropertyString('email4');
				$this->CheckEmail($email);
			} elseif ($emailalert5) {
				$email = $this->ReadPropertyString('email5');
				$this->CheckEmail($email);
			} elseif ($emailalert6) {
				$email = $this->ReadPropertyString('email6');
				$this->CheckEmail($email);
			} elseif ($emailalert7) {
				$email = $this->ReadPropertyString('email7');
				$this->CheckEmail($email);
			} elseif ($emailalert8) {
				$email = $this->ReadPropertyString('email8');
				$this->CheckEmail($email);
			} elseif ($emailalert9) {
				$email = $this->ReadPropertyString('email9');
				$this->CheckEmail($email);
			} elseif ($emailalert10) {
				$email = $this->ReadPropertyString('email10');
				$this->CheckEmail($email);
			} elseif ($emailalert11) {
				$email = $this->ReadPropertyString('email11');
				$this->CheckEmail($email);
			} else {
				$IDEmail = @($this->GetIDForIdent('SendEmailAlert'));
				if ($ipsversion == 0) {
					if ($IDEmail > 0) {
						$this->SetEmailEvent($IDEmail, false);
					}
				}

			}


			// Status Aktiv
			$this->SetStatus(102);
		}
	}



	protected function GetHostIP()
	{
		$ip = exec("sudo ifconfig eth0 | grep 'inet Adresse:' | cut -d: -f2 | awk '{ print $1}'");
		if ($ip == "") {
			$ipinfo = Sys_GetNetworkInfo();
			$ip = $ipinfo[0]['IP'];
		}
		return $ip;
	}

	protected function CheckEmail($email)
	{
		$ipsversion = $this->GetIPSVersion();
		if ($email == "") {
			$this->SetStatus(205); //Felder dürfen nicht leer sein
		}
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			//email valid
			if ($ipsversion == 0) {
				//Skript beim EmailAlert
				$IDEmail = @($this->GetIDForIdent('SendEmailAlert'));
				if ($IDEmail === false) {
					$IDEmail = $this->RegisterScript("SendEmailAlert", "Email Alert", $this->CreateEmailAlertScript($email), 19);
					IPS_SetHidden($IDEmail, true);
				}
				$this->SetEmailEvent($IDEmail, true);
			}
		} else {
			$this->SetStatus(207); //email not valid
		}
	}


	protected function is_valid_domain($url)
	{

		$validation = FALSE;
		/*Parse URL*/
		$urlparts = parse_url(filter_var($url, FILTER_SANITIZE_URL));
		/*Check host exist else path assign to host*/
		if (!isset($urlparts['host'])) {
			$urlparts['host'] = $urlparts['path'];
		}

		if ($urlparts['host'] != '') {
			/*Add scheme if not found*/
			if (!isset($urlparts['scheme'])) {
				$urlparts['scheme'] = 'http';
			}
			/*Validation*/
			if (checkdnsrr($urlparts['host'], 'A') && in_array($urlparts['scheme'], array('http', 'https')) && ip2long($urlparts['host']) === FALSE) {
				$urlparts['host'] = preg_replace('/^www\./', '', $urlparts['host']);
				$url = $urlparts['scheme'] . '://' . $urlparts['host'] . "/";

				if (filter_var($url, FILTER_VALIDATE_URL) !== false && @get_headers($url)) {
					$validation = TRUE;
				}
			}
		}

		if (!$validation) {
			//echo $url." Its Invalid Domain Name.";
			$domaincheck = false;
			return $domaincheck;
		} else {
			//echo $url." is a Valid Domain Name.";
			$domaincheck = true;
			return $domaincheck;
		}

	}

	protected function is_valid_localdomain($url)
	{

		$validation = FALSE;
		/*Parse URL*/
		$urlparts = parse_url(filter_var($url, FILTER_SANITIZE_URL));
		/*Check host exist else path assign to host*/
		if (!isset($urlparts['host'])) {
			$urlparts['host'] = $urlparts['path'];
		}

		if ($urlparts['host'] != '') {
			/*Add scheme if not found*/
			if (!isset($urlparts['scheme'])) {
				$urlparts['scheme'] = 'http';
			}
			/*Validation*/
			if (checkdnsrr($urlparts['host'], 'A') && in_array($urlparts['scheme'], array('http', 'https')) && ip2long($urlparts['host']) === FALSE) {
				$urlparts['host'] = preg_replace('/^www\./', '', $urlparts['host']);
				$url = $urlparts['scheme'] . '://' . $urlparts['host'] . "/";

				if (filter_var($url, FILTER_VALIDATE_URL) !== false && @get_headers($url)) {
					$validation = TRUE;
				}
			}
		}

		if (!$validation) {
			//echo $url." Its Invalid Domain Name.";
			$domaincheck = false;
			return $domaincheck;
		} else {
			//echo $url." is a Valid Domain Name.";
			$domaincheck = true;
			return $domaincheck;
		}

	}

	protected function GetURLPrefix($url)
	{
		$prehttp = strpos($url, "http://");
		$prehttps = strpos($url, "https://");
		if ($prehttp === 0) {
			$prefix = ""; //Prefix ist http
		} elseif ($prehttps === 0) {
			$prefix = ""; //Prefix ist https
		} else {
			$prefix = "http://"; //Prefix ergänzen
		}
		return $prefix;
	}

	protected function GetConnectURL()
	{
		$InstanzenListe = IPS_GetInstanceListByModuleID("{9486D575-BE8C-4ED8-B5B5-20930E26DE6F}");
		$InstanzCount = 0;
		$ConnectControl = false;
		foreach ($InstanzenListe as $InstanzID) {
			$ConnectControl = $InstanzID;
			$InstanzCount++;
			$Childs[] = IPS_GetChildrenIDs($InstanzID);
		}

		if ($ConnectControl > 0) {
			$connectinfo = CC_GetUrl($ConnectControl);
			return $connectinfo;
		} else {
			return false;
		}
	}

	public function MessageSink($TimeStamp, $SenderID, $Message, $Data)
	{
		IPS_LogMessage(get_class() . '::' . __FUNCTION__, 'SenderID: ' . $SenderID . ', Message: ' . $Message . ', Data:' . json_encode($Data));
		if ($SenderID == $this->GetIDForIdent('LastMovement')) {
			$this->GetSnapshot();
			$this->SendDebug("INSTAR recieved LastMovement at", date("H:i", time()), 0);
			$this->SendDebug("INSTAR", "Message from SenderID " . $SenderID . " with Message " . $Message . "\r\n Data: " . print_r($Data, true), 0);
		}

	}

	/** Set Language
	 * 1 = german, 2 = english, 3 = french, 4 = chinese
	 * @param string $language
	 * @return bool|string
	 */
	public function SetLanguage(string $language)
	{
		$host = $this->ReadPropertyString("Host");
		$port = $this->ReadPropertyInteger("Port");
		$user = $this->ReadPropertyString('User');
		$password = $this->ReadPropertyString('Password');
		if($language == "german")
		{
			$response = file_get_contents("http://".$user.":".$password."@".$host.":" . $port . "/cgi-bin/hi3510/param.cgi?cmd=set_instar_admin&-index=11&-value=1");
		}
		elseif($language == "english")
		{
			$response = file_get_contents("http://".$user.":".$password."@".$host.":" . $port . "/cgi-bin/hi3510/param.cgi?cmd=set_instar_admin&-index=11&-value=2");
		}
		elseif($language == "french")
		{
			$response = file_get_contents("http://".$user.":".$password."@".$host.":" . $port . "/cgi-bin/hi3510/param.cgi?cmd=set_instar_admin&-index=11&-value=3");
		}
		elseif($language == "chinese")
		{
			$response = file_get_contents("http://".$user.":".$password."@".$host."/cgi-bin/hi3510/param.cgi?cmd=set_instar_admin&-index=11&-value=4");
		}
		return $response;
	}


	/** Reboot your camera system
	 *
	 * @return bool|string
	 */
	public function Reboot()
	{
		$host = $this->ReadPropertyString("Host");
		$user = $this->ReadPropertyString('User');
		$password = $this->ReadPropertyString('Password');
		$response = file_get_contents("http://".$user.":".$password."@".$host."/cgi-bin/hi3510/param.cgi?cmd=sysreboot");
		$this->SendDebug("INSTAR", "Reboot", 0);
		return $response;
	}

	/** Reset your camera system
	 *
	 * @return bool|string
	 */
	public function Reset()
	{
		$host = $this->ReadPropertyString("Host");
		$user = $this->ReadPropertyString('User');
		$password = $this->ReadPropertyString('Password');
		$response = file_get_contents("http://".$user.":".$password."@".$host."/cgi-bin/hi3510/sysreset.cgi");
		$this->SendDebug("INSTAR", "Reset", 0);
		return $response;
	}

	public function GetInfo()
	{
		$this->GetCameraModel();
		$this->GetServerInfo();
		$this->GetNetInfo();
	}


	/** Get Server Info
	 *
	 * @return array
	 */
	public function GetServerInfo()
	{
		$host = $this->ReadPropertyString("Host");
		$user = $this->ReadPropertyString('User');
		$password = $this->ReadPropertyString('Password');
		$payload = file_get_contents("http://".$user.":".$password."@".$host."/cgi-bin/hi3510/param.cgi?cmd=getserverinfo");
		$data = explode(";", $payload);
		array_pop($data);
		foreach($data as $info_device)
		{
			$info = explode("=", $info_device);
			$var_name = substr(trim($info[0]), 4);
			$var_content = trim($info[1], '"');
			if($var_name == "platformstatus" || $var_name == "sdfreespace" || $var_name == "sdtotalspace")
			{
				$var_content = intval($var_content);
				$this->WriteAttributeInteger($var_name, $var_content);
			}
			elseif($var_name == "upnpstatus" || $var_name == "th3ddnsstatus")
			{
				if($var_content == "off")
				{
					$var_content = false;
				}
				else
				{
					$var_content = true;
				}
				$this->WriteAttributeBoolean($var_name, $var_content);
			}
			else{
				$this->SetValue($var_name, $var_content);
			}
			$this->SendDebug("INSTAR", "Variable ".$var_name." :".$var_content, 0);
		}
		return $data;
	}

	/** Get Network Configuration
	 *
	 * @return array
	 */
	public function GetNetInfo()
	{
		$host = $this->ReadPropertyString("Host");
		$user = $this->ReadPropertyString('User');
		$password = $this->ReadPropertyString('Password');
		$payload = file_get_contents("http://".$user.":".$password."@".$host."/cgi-bin/hi3510/param.cgi?cmd=getnetinfo");
		$data = explode(";", $payload);
		array_pop($data);
		foreach($data as $info_device)
		{
			$info = explode("=", $info_device);
			$var_name = substr(trim($info[0]), 4);
			$var_content = trim($info[1], '"');
			if($var_name == "dnsstat")
			{
				$var_content = intval($var_content);
				$this->WriteAttributeInteger($var_name, $var_content);
			}
			elseif($var_name == "dhcpflag")
			{
				if($var_content == "off")
				{
					$var_content = false;
				}
				else
				{
					$var_content = true;
				}
				$this->WriteAttributeBoolean($var_name, $var_content);
			}
			else
			{
				$this->SetValue($var_name, $var_content);
			}
			$this->SendDebug("INSTAR", "Variable ".$var_name." :".$var_content, 0);
		}
		return $data;
	}

	/** Get INSTAR Camera Model
	 * @return bool|string
	 */
	public function GetCameraModel()
	{
		$host = $this->ReadPropertyString("Host");
		$user = $this->ReadPropertyString('User');
		$password = $this->ReadPropertyString('Password');
		$payload = file_get_contents("http://".$user.":".$password."@".$host."/cgi-bin/hi3510/param.cgi?cmd=getsysinfo");
		$data = explode('"', $payload);
		$model = $data[1];
		$this->SendDebug("INSTAR", "Model: ".$model, 0);
		return $model;
	}

	/** Get IR Light Parameter
	 * @return bool|string
	 */
	public function GetIRMode()
	{
		$host = $this->ReadPropertyString("Host");
		$user = $this->ReadPropertyString('User');
		$password = $this->ReadPropertyString('Password');
		$payload = file_get_contents("http://".$user.":".$password."@".$host."/cgi-bin/hi3510/param.cgi?&cmd=getinfrared");
		$data = explode('"', $payload);
		$mode = $data[1];
		$this->SendDebug("INSTAR", "IR mode: ".$mode, 0);
		return $mode;
	}

	// Pan & Tilt

	/**
	 * Moves continuously right
	 * @return bool|string
	 */
	public function Right()
	{
		$command = "-step=0&-act=right";
		$this->SendDebug("INSTAR:", "right", 0);
		$state = $this->SendINSTARControlCommand($command);
		return $state;
	}

	/**
	 * Moves continuously left
	 * @return bool|string
	 */
	public function Left()
	{
		$command = "-step=0&-act=left";
		$this->SendDebug("INSTAR:", "left", 0);
		$state = $this->SendINSTARControlCommand($command);
		return $state;
	}

	/**
	 * Moves continuously up
	 * @return bool|string
	 */
	public function Up()
	{
		$command = "-step=0&-act=up";
		$this->SendDebug("INSTAR:", "up", 0);
		$state = $this->SendINSTARControlCommand($command);
		return $state;
	}

	/**
	 * Moves continuously down
	 * @return bool|string
	 */
	public function Down()
	{
		$command = "-step=0&-act=down";
		$this->SendDebug("INSTAR:", "down", 0);
		$state = $this->SendINSTARControlCommand($command);
		return $state;
	}

	/**
	 * Stops moving camera-head
	 * @return bool|string
	 */
	public function Stop()
	{
		$command = "-step=0&-act=stop";
		$this->SendDebug("INSTAR:", "stop", 0);
		$state = $this->SendINSTARControlCommand($command);
		return $state;
	}

	/**
	 * Moves one step right
	 * @return bool|string
	 */
	public function StepRight()
	{
		$command = "-step=1&-act=right";
		$this->SendDebug("INSTAR:", "step right", 0);
		$state = $this->SendINSTARControlCommand($command);
		return $state;
	}

	/**
	 * Moves one step left
	 * @return bool|string
	 */
	public function StepLeft()
	{
		$command = "-step=1&-act=left";
		$this->SendDebug("INSTAR:", "step left", 0);
		$state = $this->SendINSTARControlCommand($command);
		return $state;
	}

	/**
	 * Moves one step up
	 * @return bool|string
	 */
	public function StepUp()
	{
		$command = "-step=1&-act=up";
		$this->SendDebug("INSTAR:", "step up", 0);
		$state = $this->SendINSTARControlCommand($command);
		return $state;
	}

	/**
	 * Moves one step down
	 * @return bool|string
	 */
	public function StepDown()
	{
		$command = "-step=1&-act=down";
		$this->SendDebug("INSTAR:", "step down", 0);
		$state = $this->SendINSTARControlCommand($command);
		return $state;
	}

	/**
	 * Go to Center Position
	 * @return bool|string
	 */
	public function GotoCenterPosition()
	{
		$command = "-step=0&-act=home";
		$this->SendDebug("INSTAR:", "goto center position", 0);
		$state = $this->SendINSTARControlCommand($command);
		return $state;
	}

	/**
	 * Scan horizontal
	 * @return bool|string
	 */
	public function ScanHorizontal()
	{
		$command = "-step=0&-act=hscan";
		$this->SendDebug("INSTAR:", "Scan horizontal", 0);
		// $command = "-step=0&-act=hscan&-speed=45";
		$state = $this->SendINSTARControlCommand($command);
		return $state;
	}

	/**
	 * Scan vertical
	 * @return bool|string
	 */
	public function ScanVertical()
	{
		$command = "-step=0&-act=vscan";
		$this->SendDebug("INSTAR:", "Scan vertical", 0);
		$state = $this->SendINSTARControlCommand($command);
		return $state;
	}

	/**
	 * set a position
	 * @return bool|string
	 */
	public function SetPosition(int $position)
	{
		$command = "-act=set&-status=1&-number=".$position;
		$this->SendDebug("INSTAR:", "Set position ".$position, 0);
		$state = $this->SendINSTARControlCommand($command);
		return $state;
	}

	/**
	 * unset a position
	 * @return bool|string
	 */
	public function UnsetPosition(int $position)
	{
		$command = "-act=set&-status=0&-number=".$position;
		$this->SendDebug("INSTAR:", "Unset position ".$position, 0);
		$state = $this->SendINSTARControlCommand($command);
		return $state;
	}

	/**
	 * goto to a set position
	 * @return bool|string
	 */
	public function GotoPosition(int $position)
	{
		$command = "-act=goto&-status=1&-number=".$position;
		$this->SendDebug("INSTAR:", "Goto position ".$position, 0);
		$state = $this->SendINSTARControlCommand($command);
		return $state;
	}

	public function StartRecording(int $time)
	{
		$command = "cmd=manualrec&-act=on&-time=".$time;
		$host = $this->ReadPropertyString("Host");
		$port = $this->ReadPropertyInteger("Port");
		$user = $this->ReadPropertyString('User');
		$password = $this->ReadPropertyString('Password');
		$INSTAR_type = $this->GetINSTARType();
		$this->SendDebug("INSTAR:", "Type: ".$INSTAR_type, 0);
		$this->SendDebug("INSTAR:", "Start Recording", 0);
		$this->SendDebug("INSTAR Send:", "http://".$host.":".$port."/cgi-bin/".$INSTAR_type."/param.cgi?".$command."&usr=".$user."&pwd=".$password, 0);
		$response = file_get_contents("http://".$host.":".$port."/cgi-bin/".$INSTAR_type."/param.cgi?".$command."&usr=".$user."&pwd=".$password);

		return $response;
	}

	protected function SendINSTARControlCommand($command)
	{
		$host = $this->ReadPropertyString("Host");
		$port = $this->ReadPropertyInteger("Port");
		$user = $this->ReadPropertyString('User');
		$password = $this->ReadPropertyString('Password');
		$INSTAR_type = $this->GetINSTARType();
		$this->SendDebug("INSTAR:", "Type: ".$INSTAR_type, 0);
		$this->SendDebug("INSTAR Send:", "http://".$host.":".$port."/cgi-bin/".$INSTAR_type."/ptzctrl.cgi?".$command."&usr=".$user."&pwd=".$password, 0);
		$response = file_get_contents("http://".$host.":".$port."/cgi-bin/".$INSTAR_type."/ptzctrl.cgi?".$command."&usr=".$user."&pwd=".$password);

		return $response;
	}

	protected function GetINSTARType()
	{
		//$INSTAR_type_nr = $this->ReadPropertyInteger("model");
		//$INSTAR_types = [];
		$INSTAR_type = "hi3510";
		return $INSTAR_type;
	}

	// Video

	/*
	 * rtsp://admin:instar@IP-Address:RTSP-Port/11 :: VLC Stream

  http://admin:instar@IP-Address:Port/iphone/11 :: Quicktime Stream

  http://IP-Address:Port/tmpfs/snap.jpg?usr=admin&pwd=instar :: Snapshot (720p / 1280x720 Pixel)

  http://IP-Address:Port/tmpfs/auto.jpg?usr=admin&pwd=instar :: Snapshot (352p or 176p)

  http://IP-Address:Port/cgi-bin/hi3510/mjpegstream.cgi?-chn=11&-usr=admin&-pwd=instar :: MJPEG Stream

	 */

	// Image

	/** brightness :: [0 - 255] the bigger the value the brighter the image
	 * @param int $brightness
	 */
	public function Brightness(int $brightness)
	{
		$hue = GetValue($this->GetIDForIdent("Hue"));
		$saturation = GetValue($this->GetIDForIdent("Saturation"));
		$contrast = GetValue($this->GetIDForIdent("Contrast"));
		$response = $this->SetImage($brightness, $saturation, $contrast, $hue);
		return $response;
	}

	/** saturation :: [0 - 255] the bigger the value the more saturation the image has
	 * @param int $saturation
	 */
	public function Saturation(int $saturation)
	{
		$hue = GetValue($this->GetIDForIdent("Hue"));
		$brightness = GetValue($this->GetIDForIdent("Brightness"));
		$contrast = GetValue($this->GetIDForIdent("Contrast"));
		$response = $this->SetImage($brightness, $saturation, $contrast, $hue);
		return $response;
	}

	/** contrast :: [0 - 255] the bigger the value the more contrast the image has
	 * @param int $contrast
	 */
	public function Contrast(int $contrast)
	{
		$hue = GetValue($this->GetIDForIdent("Hue"));
		$brightness = GetValue($this->GetIDForIdent("Brightness"));
		$saturation = GetValue($this->GetIDForIdent("Saturation"));
		$response = $this->SetImage($brightness, $saturation, $contrast, $hue);
		return $response;
	}

	/**
	 * hue :: [0 - 127] the bigger the value the more hue the image has
	 * @param int $hue
	 */
	public function Hue(int $hue)
	{
		$brightness = GetValue($this->GetIDForIdent("Brightness"));
		$saturation = GetValue($this->GetIDForIdent("Saturation"));
		$contrast = GetValue($this->GetIDForIdent("Contrast"));
		$response = $this->SetImage($brightness, $saturation, $contrast, $hue);
		return $response;
	}

	/**
	 * flip :: (on , off) flips the image
	 * @param string $flip
	 */
	public function FlipPicture(string $flip)
	{
		$host = $this->ReadPropertyString("Host");
		$port = $this->ReadPropertyInteger("Port");
		$user = $this->ReadPropertyString('User');
		$password = $this->ReadPropertyString('Password');
		$response = file_get_contents("http://".$host.":".$port."/cgi-bin/hi3510/param.cgi?cmd=setimageattr&-flip=".$flip."&usr=".$user."&pwd=".$password);
		return $response;
	}

	/**
	 * mirror :: (on , off) flips the image
	 * @param string $mirror
	 */
	public function MirrorPicture(string $mirror)
	{
		$host = $this->ReadPropertyString("Host");
		$port = $this->ReadPropertyInteger("Port");
		$user = $this->ReadPropertyString('User');
		$password = $this->ReadPropertyString('Password');
		$response = file_get_contents("http://".$host.":".$port."/cgi-bin/hi3510/param.cgi?cmd=setimageattr&-mirror=".$mirror."&usr=".$user."&pwd=".$password);
		return $response;
	}

	/**
	 * scene :: (auto , indoor , outdoor) sets the white balance mode
	 * @param string $scene
	 */
	public function Scene(string $scene)
	{
		$host = $this->ReadPropertyString("Host");
		$port = $this->ReadPropertyInteger("Port");
		$user = $this->ReadPropertyString('User');
		$password = $this->ReadPropertyString('Password');
		$response = file_get_contents("http://".$host.":".$port."/cgi-bin/hi3510/param.cgi?cmd=setimageattr&-scene=".$scene."&usr=".$user."&pwd=".$password);
		return $response;
	}

	protected function SetImage($brightness, $saturation, $contrast, $hue)
	{
		$host = $this->ReadPropertyString("Host");
		$port = $this->ReadPropertyInteger("Port");
		$user = $this->ReadPropertyString('User');
		$password = $this->ReadPropertyString('Password');
		$response = file_get_contents("http://".$host.":".$port."/cgi-bin/hi3510/param.cgi?cmd=setimageattr&-brightness=".$brightness."&-saturation=".$saturation."&-contrast=".$contrast."&-hue=".$hue."&usr=".$user."&pwd=".$password);
		return $response;
	}

	// WLAN

	/*
	 * Reset the Parameter Values

http://192.168.xxx.xxx./cgi-bin/hi3510/param.cgi?cmd=setwirelessattr&-wf_ssid=SSID&-wf_enable=0&-wf_auth=2&-wf_key=1234&-wf_enc=1&-wf_mode=0
	 */

	// IR-LED

	public function LED_Auto()
	{
		$command = "auto";
		$state = $this->SendINSTARControlCommand($command);
		return $state;
	}

	public function LED_Inactive()
	{
		$command = "close";
		$state = $this->SendINSTARControlCommand($command);
		return $state;
	}

	// only IN-6011
	public function LED_On()
	{
		$command = "open";
		$state = $this->SendINSTARControlCommand($command);
		return $state;
	}

	protected function SendINSTARLEDCommand($command)
	{
		$host = $this->ReadPropertyString("Host");
		$port = $this->ReadPropertyInteger("Port");
		$INSTAR_type = "hi3510";
		$response = file_get_contents("http://".$host.":".$port."/cgi-bin/".$INSTAR_type."/param.cgi?cmd=setinfrared&-infraredstat=".$command);
		return $response;
	}

	// ALARM

	/*
	 *  http://admin:instar@192.168.xxx.xxx/cgi-bin/hi3510/param.cgi?cmd=setmdattr&-enable=1&-name=1 :: enables the md area 1

    http://admin:instar@192.168.xxx.xxx/cgi-bin/hi3510/param.cgi?cmd=setmdattr&-enable=0&-name=1 :: disables the md area 1

    http://192.168.x.x/cgi-bin/hi3510/param.cgi?cmd=setioattr&-io_enable=1&-io_flag=1 :: enable / disable external alarm in to trigger recording
Example:
http://admin:instar@192.168.xxx.xxx/cgi-bin/hi3510/param.cgi?cmd=setmdattr&-enable=0&-name=1&cmd=setmdattr&-enable=0&-name=2&cmd=setmdattr&-enable=0&-name=3&cmd=setmdattr&-enable=0&-name=4
	 */

	protected function SetLastMovement()
	{
		$relaxationmotionsensor = $this->ReadPropertyInteger('relaxationmotionsensor');
		$last_write = IPS_GetVariable($this->GetIDForIdent("LastMovement"))["VariableChanged"];
		$current_time = time();
		if (($current_time - $last_write) > $relaxationmotionsensor) {
			$this->SendDebug("INSTAR:", "motionsensor event", 0);
			$this->SetValue('LastMovement', date('d.m.y H:i:s'));
		}
	}



	private function CreateSnapshotScript()
	{
		$Script = '<?
//Do not delete or modify.
INSTAR_GetSnapshot(' . $this->InstanceID . ');		
?>';
		return $Script;
	}


	private function CreateEmailAlertScript($email)
	{
		$Script = '<?
//Do not delete or modify.
INSTAR_EmailAlert(' . $this->InstanceID . ', "' . $email . '");		
?>';
		return $Script;
	}

	private function SetSnapshotEvent(int $IDSnapshot)
	{
		//prüfen ob Event existent
		$ParentID = $IDSnapshot;

		$EreignisID = @($this->GetIDForIdent('EventGetINSTARSnapshot'));
		if ($EreignisID === false) {
			$EreignisID = IPS_CreateEvent(0);
			IPS_SetName($EreignisID, "GetINSTARSnapshot");
			IPS_SetIdent($EreignisID, "EventGetINSTARSnapshot");
			IPS_SetEventTrigger($EreignisID, 0, $this->GetIDForIdent('LastMovement'));   //bei Variablenaktualisierung
			IPS_SetParent($EreignisID, $ParentID);
			IPS_SetEventActive($EreignisID, true);             //Ereignis aktivieren
		} else {
			$this->SendDebug("INSTAR", "Event für Snapshot mit ObjektID" . $EreignisID . " gefunden", 0);
		}
	}


	private function SetEmailEvent(int $IDEmail, bool $state)
	{
		//prüfen ob Event existent
		$ParentID = $IDEmail;

		$EreignisID = @IPS_GetObjectIDByIdent("EventINSTAREmail", $ParentID);
		if ($EreignisID === false) {
			$EreignisID = IPS_CreateEvent(0);
			IPS_SetName($EreignisID, "INSTAR Email Alert");
			IPS_SetIdent($EreignisID, "EventINSTAREmail");
			IPS_SetEventTrigger($EreignisID, 0, $this->GetIDForIdent('LastRingtone'));   //bei Variablenaktualisierung
			IPS_SetParent($EreignisID, $ParentID);
			IPS_SetEventActive($EreignisID, $state);             //Ereignis aktivieren	/ deaktivieren
		} else {
			//echo "Die Ereignis-ID lautet: ". $EreignisID;
			IPS_SetEventActive($EreignisID, $state);             //Ereignis aktivieren	/ deaktivieren
		}

	}

	public function EmailAlert()
	{
		$emailalert = $this->ReadPropertyBoolean('activeemail');
		$emailalert2 = $this->ReadPropertyBoolean('activeemail2');
		$emailalert3 = $this->ReadPropertyBoolean('activeemail3');
		$emailalert4 = $this->ReadPropertyBoolean('activeemail4');
		$emailalert5 = $this->ReadPropertyBoolean('activeemail5');
		$emailalert6 = $this->ReadPropertyBoolean('activeemail6');
		$emailalert7 = $this->ReadPropertyBoolean('activeemail7');
		$emailalert8 = $this->ReadPropertyBoolean('activeemail8');
		$emailalert9 = $this->ReadPropertyBoolean('activeemail9');
		$emailalert10 = $this->ReadPropertyBoolean('activeemail10');
		$emailalert11 = $this->ReadPropertyBoolean('activeemail11');
		if ($emailalert) {
			$email = $this->ReadPropertyString('email');
			$subject = $this->ReadPropertyString('subject');
			$emailtext = $this->ReadPropertyString('emailtext');
			$this->SendSMTPEmail($email, $subject, $emailtext);
		} elseif ($emailalert2) {
			$email = $this->ReadPropertyString('email2');
			$subject = $this->ReadPropertyString('subject2');
			$emailtext = $this->ReadPropertyString('emailtext2');
			$this->SendSMTPEmail($email, $subject, $emailtext);
		} elseif ($emailalert3) {
			$email = $this->ReadPropertyString('email3');
			$subject = $this->ReadPropertyString('subject3');
			$emailtext = $this->ReadPropertyString('emailtext3');
			$this->SendSMTPEmail($email, $subject, $emailtext);
		} elseif ($emailalert4) {
			$email = $this->ReadPropertyString('email4');
			$subject = $this->ReadPropertyString('subject4');
			$emailtext = $this->ReadPropertyString('emailtext4');
			$this->SendSMTPEmail($email, $subject, $emailtext);
		} elseif ($emailalert5) {
			$email = $this->ReadPropertyString('email5');
			$subject = $this->ReadPropertyString('subject5');
			$emailtext = $this->ReadPropertyString('emailtext5');
			$this->SendSMTPEmail($email, $subject, $emailtext);
		} elseif ($emailalert6) {
			$email = $this->ReadPropertyString('email6');
			$subject = $this->ReadPropertyString('subject6');
			$emailtext = $this->ReadPropertyString('emailtext6');
			$this->SendSMTPEmail($email, $subject, $emailtext);
		} elseif ($emailalert7) {
			$email = $this->ReadPropertyString('email7');
			$subject = $this->ReadPropertyString('subject7');
			$emailtext = $this->ReadPropertyString('emailtext7');
			$this->SendSMTPEmail($email, $subject, $emailtext);
		} elseif ($emailalert8) {
			$email = $this->ReadPropertyString('email8');
			$subject = $this->ReadPropertyString('subject8');
			$emailtext = $this->ReadPropertyString('emailtext8');
			$this->SendSMTPEmail($email, $subject, $emailtext);
		} elseif ($emailalert9) {
			$email = $this->ReadPropertyString('email9');
			$subject = $this->ReadPropertyString('subject9');
			$emailtext = $this->ReadPropertyString('emailtext9');
			$this->SendSMTPEmail($email, $subject, $emailtext);
		} elseif ($emailalert10) {
			$email = $this->ReadPropertyString('email10');
			$subject = $this->ReadPropertyString('subject10');
			$emailtext = $this->ReadPropertyString('emailtext10');
			$this->SendSMTPEmail($email, $subject, $emailtext);
		} elseif ($emailalert11) {
			$email = $this->ReadPropertyString('email11');
			$subject = $this->ReadPropertyString('subject11');
			$emailtext = $this->ReadPropertyString('emailtext11');
			$this->SendSMTPEmail($email, $subject, $emailtext);
		}
	}

	protected function SendSMTPEmail($email, $subject, $emailtext)
	{
		$catid = $this->ReadPropertyInteger('categoryhistory');
		$mediaids = IPS_GetChildrenIDs($catid);
		// $countmedia = count($mediaids);
		foreach ($mediaids as $key => $mediaid) {
			$mediainfo = IPS_GetMedia($mediaid);
			if ($mediainfo["MediaFile"] == "media/instargpic_1.jpg") {
				$mailer = $this->ReadPropertyInteger('smtpmodule');
				SMTP_SendMailMediaEx($mailer, $email, $subject, $emailtext, $mediaid);
			}
		}
	}

	public function GetHistory()
	{
		$name = "INSTAR Picture";
		$ident = "INSTARPic";
		$picturename = "INSTARpic_";
		for ($i = 1; $i <= 20; $i++) {

			$Content = "";


			//testen ob im Medienpool existent
			$catid = $this->ReadPropertyInteger('categoryhistory');

			$MediaID = @IPS_GetObjectIDByIdent($ident . $i, $catid);
			if ($MediaID === false) {
				$MediaID = IPS_CreateMedia(1);                  // Image im MedienPool anlegen
				IPS_SetParent($MediaID, $catid); // Medienobjekt einsortieren unter der INSTAR Kategorie Historie
				IPS_SetIdent($MediaID, $ident . $i);
				IPS_SetPosition($MediaID, $i);
				IPS_SetMediaCached($MediaID, true);
				// Das Cachen für das Mediaobjekt wird aktiviert.
				// Beim ersten Zugriff wird dieses von der Festplatte ausgelesen
				// und zukünftig nur noch im Arbeitsspeicher verarbeitet.
				$ImageFile = IPS_GetKernelDir() . "media" . DIRECTORY_SEPARATOR . $picturename . $i . ".jpg";  // Image-Datei
				IPS_SetMediaFile($MediaID, $ImageFile, False);    // Image im MedienPool mit Image-Datei verbinden
				//$savetime = date('d.m.Y H:i:s');
				//IPS_SetName($MediaID, $name." ".$i." ".$savetime); // Medienobjekt benennen
				IPS_SetName($MediaID, $name . " " . $i); // Medienobjekt benennen
				//IPS_SetInfo ($MediaID, $savetime);
				IPS_SetMediaContent($MediaID, base64_encode($Content));  //Bild Base64 codieren und ablegen
				IPS_SendMediaEvent($MediaID); //aktualisieren
			} else {
				//$savetime = date('d.m.Y H:i:s');
				//IPS_SetName($MediaID, $name." ".$currentsnapshotid." ".$savetime); // Medienobjekt benennen
				//IPS_SetInfo ($MediaID, $savetime);
				IPS_SetMediaContent($MediaID, base64_encode($Content));  //Bild Base64 codieren und ablegen
				IPS_SendMediaEvent($MediaID); //aktualisieren
			}
			IPS_Sleep(200);
		}
	}

	public function GetSnapshot()
	{
		$name = "INSTAR Snapshot";
		$ident = "INSTARSnapshotPic";
		$picturename = "INSTARsnapshot_";
		$picturelimit = $this->ReadPropertyInteger('picturelimitsnapshot');
		$catid = $this->ReadPropertyInteger('categorysnapshot');
		if ($catid > 0) {
			$this->GetImageCamera($name, $ident, $picturename, $picturelimit, $catid);
		} else {
			$this->SendDebug("INSTAR", "No category is set, please set category.", 0);
			IPS_LogMessage("INSTAR", "Es wurde keine Kategorie gesetzt. Die Funktion wurde nicht ausgeführt.");
			echo "Es wurde keine Kategorie gesetzt. Die Funktion wurde nicht ausgeführt.";
		}
	}


	private function GetImageCamera($name, $ident, $picturename, $picturelimit, $catid)
	{
		$Content = "";
		//lastsnapshot bestimmen
		$mediaids = IPS_GetChildrenIDs($catid);
		$countmedia = count($mediaids);
		$lastsnapshot = $countmedia;
		if ($lastsnapshot == $picturelimit) {
			//neu beschreiben und Bilder um +1 neu zuordnen
			//Images base 64 codiert in allmedia einlesen

			$allmedia = $this->GetallImages($mediaids);
			if ($allmedia) {
				$lastmediaid = array_search($picturelimit, array_column($allmedia, 'picid'));
				unset ($allmedia[$lastmediaid]);
				//Neues Bild zu allmedia hinzufügen
				$allmedia = $this->AddCurrentPic($allmedia, $mediaids, $Content);
				//allmedia schreiben
				$this->SaveImagestoPicSlot($allmedia, $ident, $name, $catid);
			} else {
				$this->SendDebug("INSTAR", "No media image found", 0);
			}
		} else {
			// neues Mediaobjekt anlegen
			//testen ob im Medienpool existent
			$currentsnapshotid = $lastsnapshot + 1;
			$MediaID = @IPS_GetObjectIDByIdent($ident . $currentsnapshotid, $catid);
			if ($MediaID === false) {
				$MediaID = IPS_CreateMedia(1);                  // Image im MedienPool anlegen
				IPS_SetParent($MediaID, $catid); // Medienobjekt einsortieren unter der INSTAR Kategorie
				IPS_SetIdent($MediaID, $ident . $currentsnapshotid);
				IPS_SetPosition($MediaID, $currentsnapshotid);
				IPS_SetMediaCached($MediaID, true);
				// Das Cachen für das Mediaobjekt wird aktiviert.
				// Beim ersten Zugriff wird dieses von der Festplatte ausgelesen
				// und zukünftig nur noch im Arbeitsspeicher verarbeitet.
				$ImageFile = IPS_GetKernelDir() . "media" . DIRECTORY_SEPARATOR . $picturename . $currentsnapshotid . ".jpg";  // Image-Datei
				IPS_SetMediaFile($MediaID, $ImageFile, False);    // Image im MedienPool mit Image-Datei verbinden

				if ($currentsnapshotid == 1) {
					//Auf Position 1 anlegen und beschreiben
					$savetime = date('d.m.Y H:i:s');
					IPS_SetName($MediaID, $name . " " . $currentsnapshotid . " " . $savetime); // Medienobjekt benennen
					IPS_SetInfo($MediaID, $savetime);
					IPS_SetMediaContent($MediaID, base64_encode($Content));  //Bild Base64 codieren und ablegen
					IPS_SendMediaEvent($MediaID); //aktualisieren
				} else {
					//Array auslesen und Bilder +1 neu zuordnen
					//Images base 64 codiert in allmedia einlesen
					$allmedia = $this->GetallImages($mediaids);
					if ($allmedia) {
						//Neues Bild zu allmedia hinzufügen
						$allmedia = $this->AddCurrentPic($allmedia, $mediaids, $Content);
						//allmedia schreiben
						$this->SaveImagestoPicSlot($allmedia, $ident, $name, $catid);
					} else {
						$this->SendDebug("INSTAR", "No media image found", 0);
					}
				}

			}
		}
	}

	private function GetallImages($mediaids)
	{
		$countmedia = count($mediaids);
		if ($countmedia > 0) {
			$allmedia = array();
			for ($i = 0; $i <= ($countmedia - 1); $i++) {
				$mediakey = IPS_GetObject($mediaids[$i])['ObjectIdent'];
				$mediakey = explode("Pic", $mediakey);
				$mediakey = intval($mediakey[1]);
				//$name = IPS_GetName($mediaids[$i]);
				//$name = explode(" ", $name);
				//$savedate = $name[3];
				//$savetime = $name[4];
				//$saveinfo =  $savedate." ".$savetime;
				$saveinfo = IPS_GetObject($mediaids[$i])['ObjectInfo'];
				$allmedia[$i]['objid'] = $mediaids[$i];
				$allmedia[$i]['picid'] = $mediakey;
				$allmedia[$i]['saveinfo'] = $saveinfo;
				$allmedia[$i]['imagebase64'] = IPS_GetMediaContent($mediaids[$i]); //base64 codiert

			}
		} else {
			$allmedia = false;
		}

		return $allmedia;

	}

	private function SaveImagestoPicSlot($allmedia, $ident, $name, $catid)
	{

		foreach ($allmedia as $media) {
			$picid = $media['picid'];
			$newpicid = $picid + 1;
			$mediaid = @IPS_GetObjectIDByIdent($ident . $newpicid, $catid);
			if ($mediaid) {
				$saveinfo = $media['saveinfo'];
				$imagebase64 = $media['imagebase64'];
				IPS_SetMediaContent($mediaid, $imagebase64);  //Bild Base64 codiert ablegen
				IPS_SetName($mediaid, $name . " " . $newpicid . " " . $saveinfo); // Medienobjekt benennen
				IPS_SetInfo($mediaid, $saveinfo);
				IPS_SendMediaEvent($mediaid); //aktualisieren
			} else {
				$this->SendDebug("INSTAR", "No picture with ident " . $ident . $newpicid . " found", 0);
			}
		}
	}

	private function AddCurrentPic($allmedia, $mediaids, $Content)
	{
		$lastid = count($allmedia);

		// Neues Bild ergänzen
		$allmedia[$lastid]['objid'] = $mediaids[0];
		$allmedia[$lastid]['picid'] = 0;
		$saveinfo = date('d.m.Y H:i:s');
		$allmedia[$lastid]['saveinfo'] = $saveinfo;
		$allmedia[$lastid]['imagebase64'] = base64_encode($Content);  //Bild Base64 codieren und ablegen;
		return $allmedia;
	}

	public function ReceiveData($JSONString)
	{
		$payload = json_decode($JSONString);
		// $this->SendDebug("INSTAR IO Data", $JSONString, 0);
		$data = $payload->Buffer;
		$INSTAR_json = json_encode($data);
		$this->SendDebug("INSTAR Webhook", $INSTAR_json, 0);
		if (isset($data->objectid) && isset($data->value)) {
			$objectid = $data->objectid;
			$value = $data->value;
			if($objectid == $this->InstanceID)
			{
				if ($value == 1 || $value == "1" || $value == "true") {
					$this->SetValue("notification_alarm", true);
				} else {
					$this->SetValue("notification_alarm", false);
				}
			}
		}
	}

	public function RequestAction($Ident, $Value)
	{
		switch ($Ident) {
			case "Control_Continuous":
				if($Value == 0)
				{
					$this->Left();
				}
				elseif($Value == 1)
				{
					$this->Up();
				}
				elseif($Value == 2)
				{
					$this->Down();
				}
				elseif($Value == 3)
				{
					$this->Right();
				}
				elseif($Value == 4)
				{
					$this->Stop();
				}
				break;
			case "Control_Step":
				if($Value == 0)
				{
					$this->StepLeft();
				}
				elseif($Value == 1)
				{
					$this->StepUp();
				}
				elseif($Value == 2)
				{
					$this->StepDown();
				}
				elseif($Value == 3)
				{
					$this->StepRight();
				}
				break;
			case "Control_Scan":
				if($Value == 0)
				{
					$this->GotoCenterPosition();
				}
				elseif($Value == 1)
				{
					$this->ScanHorizontal();
				}
				elseif($Value == 2)
				{
					$this->ScanVertical();
				}
				break;
			case "INSTARButtonSnapshot":
				$this->GetSnapshot();
				break;
			case "SetPosition":
				$this->SetPosition($Value);
				break;
			case "Flip":
				if($Value)
				{
					$this->FlipPicture("on");
				}
				else{
					$this->FlipPicture("off");
				}
				break;
			case "Mirror":
				if($Value)
				{
					$this->MirrorPicture("on");
				}
				else{
					$this->MirrorPicture("off");
				}

				break;
			case "Scene":
				if($Value == 0)
				{
					$this->Scene("auto");
				}
				elseif($Value == 1){
					$this->Scene("indoor");
				}
				elseif($Value == 2){
					$this->Scene("outdoor");
				}
				break;
			case "UnsetPosition":
				$this->UnsetPosition($Value);
				break;
			case "GotoPosition":
				$this->GotoPosition($Value);
				break;
			default:
				$this->SendDebug("INSTAR", "Invalid ident", 0);
		}
	}

	//Profile

	/**
	 * register profiles
	 * @param $Name
	 * @param $Icon
	 * @param $Prefix
	 * @param $Suffix
	 * @param $MinValue
	 * @param $MaxValue
	 * @param $StepSize
	 * @param $Digits
	 * @param $Vartype
	 */
	protected function RegisterProfile($Name, $Icon, $Prefix, $Suffix, $MinValue, $MaxValue, $StepSize, $Digits, $Vartype)
	{

		if (!IPS_VariableProfileExists($Name)) {
			IPS_CreateVariableProfile($Name, $Vartype); // 0 boolean, 1 int, 2 float, 3 string,
		} else {
			$profile = IPS_GetVariableProfile($Name);
			if ($profile['ProfileType'] != $Vartype) {
				$this->_debug('profile', 'Variable profile type does not match for profile ' . $Name);
			}
		}

		IPS_SetVariableProfileIcon($Name, $Icon);
		IPS_SetVariableProfileText($Name, $Prefix, $Suffix);
		IPS_SetVariableProfileDigits($Name, $Digits); //  Nachkommastellen
		IPS_SetVariableProfileValues($Name, $MinValue, $MaxValue, $StepSize); // string $ProfilName, float $Minimalwert, float $Maximalwert, float $Schrittweite
	}

	/**
	 * register profile association
	 * @param $Name
	 * @param $Icon
	 * @param $Prefix
	 * @param $Suffix
	 * @param $MinValue
	 * @param $MaxValue
	 * @param $Stepsize
	 * @param $Digits
	 * @param $Vartype
	 * @param $Associations
	 */
	protected function RegisterProfileAssociation($Name, $Icon, $Prefix, $Suffix, $MinValue, $MaxValue, $Stepsize, $Digits, $Vartype, $Associations)
	{
		if (is_array($Associations) && sizeof($Associations) === 0) {
			$MinValue = 0;
			$MaxValue = 0;
		}
		$this->RegisterProfile($Name, $Icon, $Prefix, $Suffix, $MinValue, $MaxValue, $Stepsize, $Digits, $Vartype);

		if (is_array($Associations)) {
			foreach ($Associations AS $Association) {
				IPS_SetVariableProfileAssociation($Name, $Association[0], $Association[1], $Association[2], $Association[3]);
			}
		} else {
			$Associations = $this->$Associations;
			foreach ($Associations AS $code => $association) {
				IPS_SetVariableProfileAssociation($Name, $code, $this->Translate($association), $Icon, -1);
			}
		}

	}

	protected function GetIPSVersion()
	{
		$ipsversion = floatval(IPS_GetKernelVersion());
		if ($ipsversion < 4.1) // 4.0
		{
			$ipsversion = 0;
		} elseif ($ipsversion >= 4.1 && $ipsversion < 4.2) // 4.1
		{
			$ipsversion = 1;
		} elseif ($ipsversion >= 4.2 && $ipsversion < 4.3) // 4.2
		{
			$ipsversion = 2;
		} elseif ($ipsversion >= 4.3 && $ipsversion < 4.4) // 4.3
		{
			$ipsversion = 3;
		} elseif ($ipsversion >= 4.4 && $ipsversion < 5) // 4.4
		{
			$ipsversion = 4;
		} else   // 5
		{
			$ipsversion = 5;
		}

		return $ipsversion;
	}


	/***********************************************************
	 * Configuration Form
	 ***********************************************************/

	/**
	 * build configuration form
	 * @return string
	 */
	public function GetConfigurationForm()
	{
		// return current form
		return json_encode([
			'elements' => $this->FormHead(),
			'actions' => $this->FormActions(),
			'status' => $this->FormStatus()
		]);
	}

	/**
	 * return form configurations on configuration step
	 * @return array
	 */
	protected function FormHead()
	{
		$form = [
			[
				'type' => 'Image',
				'image' => 'data:image/png;base64, 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'
			],
			[
				'type' => 'Select',
				'name' => 'model',
				'caption' => 'Model',
				'options' => [
					[
						'label' => 'Please select a camera model',
						'value' => 0
					],
					[
						'label' => 'IN-5907 HD',
						'value' => 1
					],
					[
						'label' => 'IN-9008 Full HD',
						'value' => 2
					],
					[
						'label' => 'IN-9010 Full HD',
						'value' => 3
					],
					[
						'label' => 'IN-9010 Full HD',
						'value' => 4
					],
					[
						'label' => 'IN-9020 Full HD',
						'value' => 5
					],
					[
						'label' => 'IN-6001 HD',
						'value' => 6
					],
					[
						'label' => 'IN-6014 HD',
						'value' => 7
					],
					[
						'label' => 'IN-8003 Full HD',
						'value' => 8
					],
					[
						'label' => 'IN-8015 Full HD',
						'value' => 9
					]
				]

			]
		];

		$form = array_merge_recursive(
			$form,
			[
				[
					'type' => 'ExpansionPanel',
					'caption' => 'INSTAR Camera Info',
					'items' => [
						[
							'type' => 'List',
							'name' => 'CameraInformation',
							'caption' => 'Camera information',
							'rowCount' => 2,
							'add' => false,
							'delete' => false,
							'sort' => [
								'column' => 'name',
								'direction' => 'ascending'
							],
							'columns' => [
								[
									'name' => 'name',
									'caption' => 'Name',
									'width' => 'auto',
									'visible' => true
								],
								[
									'name' => 'model',
									'caption' => 'Model',
									'width' => '150px',
								],
								[
									'name' => 'hardwareversion',
									'caption' => 'Hardware Version',
									'width' => '150px',
								],
								[
									'name' => 'softwareversion',
									'caption' => 'Software Version',
									'width' => '150px',
								],
								[
									'name' => 'webversion',
									'caption' => 'Web Version',
									'width' => '150px',
								],
								[
									'name' => 'sdfreespace',
									'caption' => 'SD free space',
									'width' => '150px',
								],
								[
									'name' => 'sdtotalspace',
									'caption' => 'SD Capacity',
									'width' => '150px',
								]
							],
							'values' => [
								[
									'name' => $this->ReadAttributeString("name"),
									'model' => $this->ReadAttributeString("model_name"),
									'hardwareversion' => $this->ReadAttributeString("hardVersion"),
									'softwareversion' => $this->ReadAttributeString("softVersion"),
									'webversion' => $this->ReadAttributeString("webVersion"),
									'sdfreespace' => $this->ReadAttributeInteger("sdfreespace"),
									'sdtotalspace' => $this->ReadAttributeInteger("sdtotalspace")
								]]
						]
					]
				],
				[
					'type' => 'ExpansionPanel',
					'caption' => 'INSTAR Network Info',
					'items' => [
						[
							'type' => 'List',
							'name' => 'NetworkInformation',
							'caption' => 'Network information',
							'rowCount' => 2,
							'add' => false,
							'delete' => false,
							'sort' => [
								'column' => 'ip',
								'direction' => 'ascending'
							],
							'columns' => [
								[
									'name' => 'ip',
									'caption' => 'IP',
									'width' => 'auto',
									'visible' => true
								],
								[
									'name' => 'dhcp',
									'caption' => 'DHCP',
									'width' => '150px',
								],
								[
									'name' => 'netmask',
									'caption' => 'Netmask',
									'width' => '150px',
								],
								[
									'name' => 'gateway',
									'caption' => 'Gateway',
									'width' => '150px',
								],
								[
									'name' => 'macaddress',
									'caption' => 'MAC  Address',
									'width' => '150px',
								],
								[
									'name' => 'networktype',
									'caption' => 'Network Type',
									'width' => '150px',
								]
							],
							'values' => [
								[
									'ip' => $this->ReadAttributeString("ip"),
									'dhcp' => $this->ReadAttributeBoolean("dhcpflag"),
									'netmask' => $this->ReadAttributeString("netmask"),
									'gateway' => $this->ReadAttributeString("gateway"),
									'macaddress' => $this->ReadAttributeString("macaddress"),
									'networktype' => $this->ReadAttributeString("networktype")
								]]
						]
					]
				],
				[
					'type' => 'ExpansionPanel',
					'caption' => 'INSTAR Settings',
					'items' => [
						[
							'type' => 'Label',
							'label' => 'IP Address or Hostname'
						],
						[
							'name' => 'Host',
							'type' => 'ValidationTextBox',
							'caption' => 'Camera Address'
						],
						[
							'type' => 'Label',
							'label' => 'Port INSTAR Camera'
						],
						[
							'name' => 'Port',
							'type' => 'NumberSpinner',
							'caption' => 'Camera Port'
						]
					]
				],
				[
					'type' => 'ExpansionPanel',
					'caption' => 'INSTAR login credentials',
					'items' => [
						[
							'type' => 'Label',
							'label' => 'INSTAR user with authorization as admin'
						],
						[
							'name' => 'User',
							'type' => 'ValidationTextBox',
							'caption' => 'User'
						],
						[
							'name' => 'Password',
							'type' => 'PasswordTextBox',
							'caption' => 'Password'
						]
					]
				],
				[
					'type' => 'ExpansionPanel',
					'caption' => 'INSTAR Picture Settings',
					'items' => [
						[
							'type' => 'Label',
							'label' => 'Please first choose a Snapshot Category in the IP-Symcon Object Tree and select it in the Field below'
						],
						[
							'type' => 'Label',
							'label' => 'INSTAR snapshot pictures category'
						],
						[
							'name' => 'categoryhistory',
							'type' => 'SelectCategory',
							'caption' => 'Alarm Snapshots'
						],
						[
							'type' => 'Label',
							'label' => 'picture limit for INSTAR snapshots pictures'
						],
						[
							'name' => 'picturelimitring',
							'type' => 'NumberSpinner',
							'caption' => 'Number of Alarm Snapshots'
						]
					]
				]
			]
		);
		$form = array_merge_recursive(
			$form,
			[
				[
					'type' => 'ExpansionPanel',
					'caption' => 'email notification settings',
					'items' => $this->FormShowEmail()
				]
			]
		);
		return $form;
	}

	protected function FormShowEmail()
	{
		$activeemail2 = $this->ReadPropertyBoolean("activeemail2");
		$activeemail3 = $this->ReadPropertyBoolean("activeemail3");
		$activeemail4 = $this->ReadPropertyBoolean("activeemail4");
		$activeemail5 = $this->ReadPropertyBoolean("activeemail5");
		$activeemail6 = $this->ReadPropertyBoolean("activeemail6");
		$activeemail7 = $this->ReadPropertyBoolean("activeemail7");
		$activeemail8 = $this->ReadPropertyBoolean("activeemail8");
		$activeemail9 = $this->ReadPropertyBoolean("activeemail9");
		$activeemail10 = $this->ReadPropertyBoolean("activeemail10");
		$activeemail11 = $this->ReadPropertyBoolean("activeemail11");
		$form = [
			[
				'type' => 'Label',
				'label' => 'Optional Email Notification (configurated SMTP module required)'
			],
			[
				'type' => 'Label',
				'label' => 'Email Notification active'
			],
			[
				'name' => 'activeemail',
				'type' => 'CheckBox',
				'caption' => 'active email'
			],
			[
				'name' => 'smtpmodule',
				'type' => 'SelectInstance',
				'caption' => 'SMTP module'
			],
			[
				'type' => 'Label',
				'label' => 'Email Recipient'
			],
			[
				'name' => 'email',
				'type' => 'ValidationTextBox',
				'caption' => 'email'
			],
			[
				'type' => 'Label',
				'label' => 'email subject'
			],
			[
				'name' => 'subject',
				'type' => 'ValidationTextBox',
				'caption' => 'subject'
			],
			[
				'type' => 'Label',
				'label' => 'email text'
			],
			[
				'name' => 'emailtext',
				'type' => 'ValidationTextBox',
				'caption' => 'email text'
			],
			[
				'name' => 'activeemail2',
				'type' => 'CheckBox',
				'caption' => 'active email 2'
			]
		];
		if ($activeemail2) {
			$form = array_merge_recursive(
				$form,
				[
					[
						'name' => 'smtpmodule2',
						'type' => 'SelectInstance',
						'caption' => 'SMTP module'
					],
					[
						'type' => 'Label',
						'label' => 'notification email adress'
					],
					[
						'name' => 'email2',
						'type' => 'ValidationTextBox',
						'caption' => 'email'
					],
					[
						'type' => 'Label',
						'label' => 'email subject'
					],
					[
						'name' => 'subject2',
						'type' => 'ValidationTextBox',
						'caption' => 'subject'
					],
					[
						'type' => 'Label',
						'label' => 'email text'
					],
					[
						'name' => 'emailtext2',
						'type' => 'ValidationTextBox',
						'caption' => 'email text'
					],
					[
						'name' => 'activeemail3',
						'type' => 'CheckBox',
						'caption' => 'active email 3'
					]
				]
			);
		}
		if ($activeemail3) {
			$form = array_merge_recursive(
				$form,
				[
					[
						'name' => 'smtpmodule3',
						'type' => 'SelectInstance',
						'caption' => 'SMTP module'
					],
					[
						'type' => 'Label',
						'label' => 'notification email adress'
					],
					[
						'name' => 'email3',
						'type' => 'ValidationTextBox',
						'caption' => 'email'
					],
					[
						'type' => 'Label',
						'label' => 'email subject'
					],
					[
						'name' => 'subject3',
						'type' => 'ValidationTextBox',
						'caption' => 'subject'
					],
					[
						'type' => 'Label',
						'label' => 'email text'
					],
					[
						'name' => 'emailtext3',
						'type' => 'ValidationTextBox',
						'caption' => 'email text'
					],
					[
						'name' => 'activeemail4',
						'type' => 'CheckBox',
						'caption' => 'active email 4'
					]
				]
			);
		}
		if ($activeemail4) {
			$form = array_merge_recursive(
				$form,
				[
					[
						'name' => 'smtpmodule4',
						'type' => 'SelectInstance',
						'caption' => 'SMTP module'
					],
					[
						'type' => 'Label',
						'label' => 'notification email adress'
					],
					[
						'name' => 'email4',
						'type' => 'ValidationTextBox',
						'caption' => 'email'
					],
					[
						'type' => 'Label',
						'label' => 'email subject'
					],
					[
						'name' => 'subject4',
						'type' => 'ValidationTextBox',
						'caption' => 'subject'
					],
					[
						'type' => 'Label',
						'label' => 'email text'
					],
					[
						'name' => 'emailtext4',
						'type' => 'ValidationTextBox',
						'caption' => 'email text'
					],
					[
						'name' => 'activeemail5',
						'type' => 'CheckBox',
						'caption' => 'active email 5'
					]
				]
			);
		}
		if ($activeemail5) {
			$form = array_merge_recursive(
				$form,
				[
					[
						'name' => 'smtpmodule5',
						'type' => 'SelectInstance',
						'caption' => 'SMTP module'
					],
					[
						'type' => 'Label',
						'label' => 'notification email adress'
					],
					[
						'name' => 'email5',
						'type' => 'ValidationTextBox',
						'caption' => 'email'
					],
					[
						'type' => 'Label',
						'label' => 'email subject'
					],
					[
						'name' => 'subject5',
						'type' => 'ValidationTextBox',
						'caption' => 'subject'
					],
					[
						'type' => 'Label',
						'label' => 'email text'
					],
					[
						'name' => 'emailtext5',
						'type' => 'ValidationTextBox',
						'caption' => 'email text'
					],
					[
						'name' => 'activeemail6',
						'type' => 'CheckBox',
						'caption' => 'active email 6'
					]
				]
			);
		}
		if ($activeemail6) {
			$form = array_merge_recursive(
				$form,
				[
					[
						'name' => 'smtpmodule6',
						'type' => 'SelectInstance',
						'caption' => 'SMTP module'
					],
					[
						'type' => 'Label',
						'label' => 'notification email adress'
					],
					[
						'name' => 'email6',
						'type' => 'ValidationTextBox',
						'caption' => 'email'
					],
					[
						'type' => 'Label',
						'label' => 'email subject'
					],
					[
						'name' => 'subject6',
						'type' => 'ValidationTextBox',
						'caption' => 'subject'
					],
					[
						'type' => 'Label',
						'label' => 'email text'
					],
					[
						'name' => 'emailtext6',
						'type' => 'ValidationTextBox',
						'caption' => 'email text'
					],
					[
						'name' => 'activeemail7',
						'type' => 'CheckBox',
						'caption' => 'active email 7'
					]
				]
			);
		}
		if ($activeemail7) {
			$form = array_merge_recursive(
				$form,
				[
					[
						'name' => 'smtpmodule7',
						'type' => 'SelectInstance',
						'caption' => 'SMTP module'
					],
					[
						'type' => 'Label',
						'label' => 'notification email adress'
					],
					[
						'name' => 'email7',
						'type' => 'ValidationTextBox',
						'caption' => 'email'
					],
					[
						'type' => 'Label',
						'label' => 'email subject'
					],
					[
						'name' => 'subject7',
						'type' => 'ValidationTextBox',
						'caption' => 'subject'
					],
					[
						'type' => 'Label',
						'label' => 'email text'
					],
					[
						'name' => 'emailtext7',
						'type' => 'ValidationTextBox',
						'caption' => 'email text'
					],
					[
						'name' => 'activeemail8',
						'type' => 'CheckBox',
						'caption' => 'active email 8'
					]
				]
			);
		}
		if ($activeemail8) {
			$form = array_merge_recursive(
				$form,
				[
					[
						'name' => 'smtpmodule8',
						'type' => 'SelectInstance',
						'caption' => 'SMTP module'
					],
					[
						'type' => 'Label',
						'label' => 'notification email adress'
					],
					[
						'name' => 'email8',
						'type' => 'ValidationTextBox',
						'caption' => 'email'
					],
					[
						'type' => 'Label',
						'label' => 'email subject'
					],
					[
						'name' => 'subject8',
						'type' => 'ValidationTextBox',
						'caption' => 'subject'
					],
					[
						'type' => 'Label',
						'label' => 'email text'
					],
					[
						'name' => 'emailtext8',
						'type' => 'ValidationTextBox',
						'caption' => 'email text'
					],
					[
						'name' => 'activeemail9',
						'type' => 'CheckBox',
						'caption' => 'active email 9'
					]
				]
			);
		}
		if ($activeemail9) {
			$form = array_merge_recursive(
				$form,
				[
					[
						'name' => 'smtpmodule9',
						'type' => 'SelectInstance',
						'caption' => 'SMTP module'
					],
					[
						'type' => 'Label',
						'label' => 'notification email adress'
					],
					[
						'name' => 'email9',
						'type' => 'ValidationTextBox',
						'caption' => 'email'
					],
					[
						'type' => 'Label',
						'label' => 'email subject'
					],
					[
						'name' => 'subject9',
						'type' => 'ValidationTextBox',
						'caption' => 'subject'
					],
					[
						'type' => 'Label',
						'label' => 'email text'
					],
					[
						'name' => 'emailtext9',
						'type' => 'ValidationTextBox',
						'caption' => 'email text'
					],
					[
						'name' => 'activeemail10',
						'type' => 'CheckBox',
						'caption' => 'active email 10'
					]
				]
			);
		}
		if ($activeemail10) {
			$form = array_merge_recursive(
				$form,
				[
					[
						'name' => 'smtpmodule10',
						'type' => 'SelectInstance',
						'caption' => 'SMTP module'
					],
					[
						'type' => 'Label',
						'label' => 'notification email adress'
					],
					[
						'name' => 'email10',
						'type' => 'ValidationTextBox',
						'caption' => 'email'
					],
					[
						'type' => 'Label',
						'label' => 'email subject'
					],
					[
						'name' => 'subject10',
						'type' => 'ValidationTextBox',
						'caption' => 'subject'
					],
					[
						'type' => 'Label',
						'label' => 'email text'
					],
					[
						'name' => 'emailtext10',
						'type' => 'ValidationTextBox',
						'caption' => 'email text'
					],
					[
						'name' => 'activeemail11',
						'type' => 'CheckBox',
						'caption' => 'active email 11'
					]
				]
			);
		}
		if ($activeemail11) {
			$form = array_merge_recursive(
				$form,
				[
					[
						'name' => 'smtpmodule11',
						'type' => 'SelectInstance',
						'caption' => 'SMTP module'
					],
					[
						'type' => 'Label',
						'label' => 'notification email adress'
					],
					[
						'name' => 'email11',
						'type' => 'ValidationTextBox',
						'caption' => 'email'
					],
					[
						'type' => 'Label',
						'label' => 'email subject'
					],
					[
						'name' => 'subject11',
						'type' => 'ValidationTextBox',
						'caption' => 'subject'
					],
					[
						'type' => 'Label',
						'label' => 'email text'
					],
					[
						'name' => 'emailtext11',
						'type' => 'ValidationTextBox',
						'caption' => 'email text'
					]
				]
			);
		}
		return $form;
	}

	/**
	 * return form actions by token
	 * @return array
	 */
	protected function FormActions()
	{
		$form = [
			[
				'type' => 'Label',
				'label' => 'Get snapshot from Camera'
			],
			[
				'type' => 'Button',
				'label' => 'Get snapshot',
				'onClick' => 'INSTAR_GetSnapshot($id);'
			],
			[
				'type' => 'Label',
				'label' => 'Move left'
			],
			[
				'type' => 'Button',
				'label' => 'Left',
				'onClick' => 'INSTAR_Left($id);'
			],
			[
				'type' => 'Label',
				'label' => 'Move left'
			],
			[
				'type' => 'Button',
				'label' => 'Right',
				'onClick' => 'INSTAR_Right($id);'
			],
			[
				'type' => 'Label',
				'label' => 'Move left'
			],
			[
				'type' => 'Button',
				'label' => 'Up',
				'onClick' => 'INSTAR_Up($id);'
			],
			[
				'type' => 'Label',
				'label' => 'Move down'
			],
			[
				'type' => 'Button',
				'label' => 'Left',
				'onClick' => 'INSTAR_Down($id);'
			],
			[
				'type' => 'Label',
				'label' => 'Get infos from the camera'
			],
			[
				'type' => 'Button',
				'label' => 'Get infos',
				'onClick' => 'INSTAR_GetInfo($id);'
			],
			[
				'type' => 'TestCenter'
			]
		];

		return $form;
	}

	/**
	 * return from status
	 * @return array
	 */
	protected function FormStatus()
	{
		$form = [
			[
				'code' => 101,
				'icon' => 'inactive',
				'caption' => 'Creating instance.'
			],
			[
				'code' => 102,
				'icon' => 'active',
				'caption' => 'INSTAR accessible.'
			],
			[
				'code' => 104,
				'icon' => 'inactive',
				'caption' => 'interface closed.'
			],
			[
				'code' => 201,
				'icon' => 'inactive',
				'caption' => 'Please follow the instructions.'
			],
			[
				'code' => 202,
				'icon' => 'error',
				'caption' => 'INSTAR IP adress must not empty.'
			],
			[
				'code' => 203,
				'icon' => 'error',
				'caption' => 'No valid IP adress or host.'
			],
			[
				'code' => 204,
				'icon' => 'error',
				'caption' => 'connection to INSTAR lost.'
			],
			[
				'code' => 205,
				'icon' => 'error',
				'caption' => 'Field can not be left empty'
			],
			[
				'code' => 206,
				'icon' => 'error',
				'caption' => 'category must not be empty.'
			],
			[
				'code' => 207,
				'icon' => 'error',
				'caption' => 'email not valid.'
			],
			[
				'code' => 208,
				'icon' => 'error',
				'caption' => 'category INSTAR snapshot not set.'
			]
		];

		return $form;
	}

	/**
	 * send debug log
	 * @param string $notification
	 * @param string $message
	 * @param int $format 0 = Text, 1 = Hex
	 */
	private function _debug(string $notification = NULL, string $message = NULL, $format = 0)
	{
		$this->SendDebug($notification, $message, $format);
	}

	/**
	 * return incremented position
	 * @return int
	 */
	private function _getPosition()
	{
		$this->position++;
		return $this->position;
	}

	/***********************************************************
	 * Migrations
	 ***********************************************************/

	/**
	 * Polyfill for IP-Symcon 4.4 and older
	 * @param string $Ident
	 * @param mixed $Value
	 */
	//Add this Polyfill for IP-Symcon 4.4 and older
	protected function SetValue($Ident, $Value)
	{

		if (IPS_GetKernelVersion() >= 5) {
			parent::SetValue($Ident, $Value);
		} else {
			SetValue($this->GetIDForIdent($Ident), $Value);
		}
	}
}

?>