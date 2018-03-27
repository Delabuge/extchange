<?php
require_once(realpath(dirname(__FILE__)) . '/Creneau.php');
require_once(realpath(dirname(__FILE__)) . '/Competence.php');
require_once(realpath(dirname(__FILE__)) . '/Activite.php');
require_once(realpath(dirname(__FILE__)) . '/Uilisateur.php');

/**
 * @access public
 * @author Cocotier_D_Iles
 */
class Missionne extends Uilisateur {

	/**
	 * @access public
	 * @param Creneau aC1
	 * @ParamType aC1 Creneau
	 */
	public function misChoisirCreneau($aC1) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param Missionne aM1
	 * @param Competence aCompetenceDemandeur
	 * @ParamType aM1 Missionne
	 * @ParamType aCompetenceDemandeur Competence
	 */
	public function misNouvelleActivite($aM1, $aCompetenceDemandeur) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param Activite aA1
	 * @ParamType aA1 Activite
	 */
	public function misChangerActivite($aA1) {
		// Not yet implemented
	}
}
?>