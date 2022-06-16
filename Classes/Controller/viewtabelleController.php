<?php
namespace SchachvereinBalingen\SvbSvwtabelle\Controller;

/***
 *
 * This file is part of the "svb_schachturniere" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Sebastian During <sebastian.during@svbalingen.de>, Schachverein Balingen e.V.
 *
 ***/

/**
 * SpielerController
 */
class viewtabelleController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
	/**
	 * action list
	 *
	 * @return void
	 */
	public function viewAction()
	{
		$target = 'http://ergebnisse.svw.info/show/'.intval($this->settings['year']).'/'.intval($this->settings['turnier_id']);

		// Test, ob die Tabelle ausgelesen werden kann
		if (is_resource(@fopen($target.'/tabelle/plain','r'))) {
			//Tabelle holen
			$output = file_get_contents($target.'/tabelle/plain');
		} else {
			$output = '<p>die Tabelle konnte nicht eingelesen werden! ('.$target.'</p>'; 
		}

		$output .= '<p class="quelle">Quelle: <a href="'.$target.'" target="_blank" class="external-link-new-window">svw.info</a></p>';

		$output = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $output);
		$output = preg_replace("#\t+#", " ", $output); 
		$output = preg_replace("#[ ]{2,}#", " ", $output);
		$output = preg_replace("#[\r\n]{2,}#", "\r\n", $output);

		#print_r($output);die();

		$this->view->assign('output', $output);
	}

}
