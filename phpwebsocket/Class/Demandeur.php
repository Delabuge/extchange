<?php
require_once(realpath(dirname(__FILE__)) . '/Activite.php');
require_once(realpath(dirname(__FILE__)) . '/Uilisateur.php');

/**
 * @access public
 * @author Cocotier_D_Iles
 */
class Demandeur extends Uilisateur {

	/**
	 * @access public
	 * @param Activite aA1
	 * @return boolean
	 * @ParamType aA1 Activite
	 * @ReturnType boolean
	 */
	public function demProposerActiviteDemandeur(&Activite $aA1) {
		// Not yet implemented
	}
}
?>