<?php
/*****************************************************************************
*       LabOrder.php
*
*       Author:  ClearHealth Inc. (www.clear-health.com)        2009
*       
*       ClearHealth(TM), HealthCloud(TM), WebVista(TM) and their 
*       respective logos, icons, and terms are registered trademarks 
*       of ClearHealth Inc.
*
*       Though this software is open source you MAY NOT use our 
*       trademarks, graphics, logos and icons without explicit permission. 
*       Derivitive works MUST NOT be primarily identified using our 
*       trademarks, though statements such as "Based on ClearHealth(TM) 
*       Technology" or "incoporating ClearHealth(TM) source code" 
*       are permissible.
*
*       This file is licensed under the GPL V3, you can find
*       a copy of that license by visiting:
*       http://www.fsf.org/licensing/licenses/gpl.html
*       
*****************************************************************************/


class LabOrder extends WebVista_Model_ORM {
	protected $lab_order_id;
	protected $patient_id;
	protected $patient;
	protected $type;
	protected $status;
	protected $ordering_provider;
	protected $manual_service;
	protected $manual_order_date;
	protected $encounter_id;
	protected $external_id;
	protected $_table = "lab_order";
	protected $_primaryKeys = array("lab_order_id");
	protected $_legacyORMNaming = true;
	protected $_cascadePersist = false;

	function __construct() {
		parent::__construct();
		$this->patient = new Patient();
	}
}
