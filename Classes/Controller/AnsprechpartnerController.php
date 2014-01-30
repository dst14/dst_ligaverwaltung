<?php
namespace TYPO3\DstLigaverwaltung\Controller;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Daniel Stange <daniel.stange@gmail.com>
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @package dst_ligaverwaltung
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class AnsprechpartnerController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$ansprechpartners = $this->ansprechpartnerRepository->findAll();
		$this->view->assign('ansprechpartners', $ansprechpartners);
	}

	/**
	 * action show
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Ansprechpartner $ansprechpartner
	 * @return void
	 */
	public function showAction(\TYPO3\DstLigaverwaltung\Domain\Model\Ansprechpartner $ansprechpartner) {
		$this->view->assign('ansprechpartner', $ansprechpartner);
	}

	/**
	 * action new
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Ansprechpartner $newAnsprechpartner
	 * @dontvalidate $newAnsprechpartner
	 * @return void
	 */
	public function newAction(\TYPO3\DstLigaverwaltung\Domain\Model\Ansprechpartner $newAnsprechpartner = NULL) {
		$this->view->assign('newAnsprechpartner', $newAnsprechpartner);
	}

	/**
	 * action create
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Ansprechpartner $newAnsprechpartner
	 * @return void
	 */
	public function createAction(\TYPO3\DstLigaverwaltung\Domain\Model\Ansprechpartner $newAnsprechpartner) {
		$this->ansprechpartnerRepository->add($newAnsprechpartner);
		$this->flashMessageContainer->add('Your new Ansprechpartner was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Ansprechpartner $ansprechpartner
	 * @return void
	 */
	public function editAction(\TYPO3\DstLigaverwaltung\Domain\Model\Ansprechpartner $ansprechpartner) {
		$this->view->assign('ansprechpartner', $ansprechpartner);
	}

	/**
	 * action update
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Ansprechpartner $ansprechpartner
	 * @return void
	 */
	public function updateAction(\TYPO3\DstLigaverwaltung\Domain\Model\Ansprechpartner $ansprechpartner) {
		$this->ansprechpartnerRepository->update($ansprechpartner);
		$this->flashMessageContainer->add('Your Ansprechpartner was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Ansprechpartner $ansprechpartner
	 * @return void
	 */
	public function deleteAction(\TYPO3\DstLigaverwaltung\Domain\Model\Ansprechpartner $ansprechpartner) {
		$this->ansprechpartnerRepository->remove($ansprechpartner);
		$this->flashMessageContainer->add('Your Ansprechpartner was removed.');
		$this->redirect('list');
	}

}
?>