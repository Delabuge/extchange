<?php
require_once(realpath(dirname(__FILE__)) . '/Rencontre.php');
require_once(realpath(dirname(__FILE__)) . '/Uilisateur.php');
require_once(realpath(dirname(__FILE__)) . '/Creneau.php');
require_once(realpath(dirname(__FILE__)) . '/Activite.php');
require_once(realpath(dirname(__FILE__)) . '/Missionne.php');
require_once(realpath(dirname(__FILE__)) . '/Demandeur.php');

/**
 * @access public
 * @author Cocotier_D_Iles
 */
class Plateforme {
	/**
	 * @AssociationType Rencontre
	 */
	public $_unnamed_Rencontre_;
	/**
	 * @AssociationType Uilisateur
	 */
	public $_unnamed_Uilisateur_;
	/**
	 * @AssociationType Creneau
	 */
	public $_unnamed_Creneau_;
	/**
	 * @AssociationType Activite
	 */
	public $_unnamed_Activite_;

	/**
	 * @access public
	 * @param Missionne aM1
	 * @param Creneau aC1
	 * @ParamType aM1 Missionne
	 * @ParamType aC1 Creneau
	 */
	public function plaSoumettreCreneaux($aM1, $aC1) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return Creneau
	 * @ReturnType Creneau
	 */
	public function plaTrouverCreneauxCommuns() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param string aActNom
	 * @param Demandeur aD1
	 * @param Missionne aM1
	 * @ParamType aActNom string
	 * @ParamType aD1 Demandeur
	 * @ParamType aM1 Missionne
	 */
	public function plaCreerActivite(&$aActNom, $aD1, $aM1) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param Creneau aRenDate
	 * @param Activite aA1
	 * @param Activite aA2
	 * @ParamType aRenDate Creneau
	 * @ParamType aA1 Activite
	 * @ParamType aA2 Activite
	 */
	public function plaCreerRencontre($aRenDate, $aA1, $aA2) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return boolean
	 * @ReturnType boolean
	 */
	public function plaVerifierMeteo() {
		// Not yet implemented
	}
}
?>