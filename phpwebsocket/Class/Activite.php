<?php
require_once(realpath(dirname(__FILE__)) . '/Demandeur.php');
require_once(realpath(dirname(__FILE__)) . '/Missionne.php');
require_once(realpath(dirname(__FILE__)) . '/Plateforme.php');

/**
 * @access public
 * @author Cocotier_D_Iles
 */
class Activite {
	/**
	 * @AttributeType string
	 */
	private $_actNom;
	/**
	 * @AttributeType Demandeur
	 */
	private $_d1;
	/**
	 * @AttributeType Missionne
	 */
	private $_m1;
	/**
	 * @AssociationType Plateforme
	 */
	public $_unnamed_Plateforme_;
}
?>