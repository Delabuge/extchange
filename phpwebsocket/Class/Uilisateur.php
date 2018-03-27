<?php
require_once(realpath(dirname(__FILE__)) . '/Competence.php');
require_once(realpath(dirname(__FILE__)) . '/Plateforme.php');
require_once(realpath(dirname(__FILE__)) . '/Creneau.php');

/**
 * @access public
 * @author Cocotier_D_Iles
 */
class Uilisateur {
	/**
	 * @AttributeType Competence
	 */
	private $_tabComp;
	/**
	 * @AttributeType string
	 */
	private $_ville;
	/**
	 * @AssociationType Plateforme
	 */
	public $_unnamed_Plateforme_;
	/**
	 * @AssociationType Competence
	 */
	public $_unnamed_Competence_;

	/**
	 * @access public
	 * @param Creneau aC1
	 * @ParamType aC1 Creneau
	 */
	public function utiCalendierMAJ($aC1) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param Creneau aC1
	 * @ParamType aC1 Creneau
	 */
	public function utiProposerCreneau($aC1) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return Competence
	 * @ReturnType Competence
	 */
	public function getTabComp() {
		return $this->_tabComp;
	}

	/**
	 * @access public
	 * @param Competence aTabComp
	 * @return void
	 * @ParamType aTabComp Competence
	 * @ReturnType void
	 */
	public function setTabComp($aTabComp) {
		$this->_tabComp = $aTabComp;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getVille() {
		return $this->_ville;
	}

	/**
	 * @access public
	 * @param string aVille
	 * @return void
	 * @ParamType aVille string
	 * @ReturnType void
	 */
	public function setVille(&$aVille) {
		$this->_ville = $aVille;
	}
}
?>