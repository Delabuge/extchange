<?php
require_once(realpath(dirname(__FILE__)) . '/Creneau.php');
require_once(realpath(dirname(__FILE__)) . '/Activite.php');
require_once(realpath(dirname(__FILE__)) . '/Plateforme.php');

/**
 * @access public
 * @author Cocotier_D_Iles
 */
class Rencontre {
	/**
	 * @AttributeType Creneau
	 */
	private $_renDate;
	/**
	 * @AttributeType Activite
	 */
	private $_tabActivite;
	/**
	 * @AssociationType Plateforme
	 */
	public $_unnamed_Plateforme_;
}
?>