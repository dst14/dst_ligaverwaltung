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
class LigaController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$ligas = $this->ligaRepository->findAll();
		$this->view->assign('ligas', $ligas);
	}

	/**
	 * action show
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Liga $liga
	 * @return void
	 */
	public function showAction(\TYPO3\DstLigaverwaltung\Domain\Model\Liga $liga) {
		$this->view->assign('liga', $liga);
	}

	/**
	 * action new
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Liga $newLiga
	 * @dontvalidate $newLiga
	 * @return void
	 */
	public function newAction(\TYPO3\DstLigaverwaltung\Domain\Model\Liga $newLiga = NULL) {
		$this->view->assign('newLiga', $newLiga);
	}

	/**
	 * action create
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Liga $newLiga
	 * @return void
	 */
	public function createAction(\TYPO3\DstLigaverwaltung\Domain\Model\Liga $newLiga) {
		$this->ligaRepository->add($newLiga);
		$this->flashMessageContainer->add('Your new Liga was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Liga $liga
	 * @return void
	 */
	public function editAction(\TYPO3\DstLigaverwaltung\Domain\Model\Liga $liga) {
		$this->view->assign('liga', $liga);
	}

	/**
	 * action update
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Liga $liga
	 * @return void
	 */
	public function updateAction(\TYPO3\DstLigaverwaltung\Domain\Model\Liga $liga) {
		$this->ligaRepository->update($liga);
		$this->flashMessageContainer->add('Your Liga was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Liga $liga
	 * @return void
	 */
	public function deleteAction(\TYPO3\DstLigaverwaltung\Domain\Model\Liga $liga) {
		$this->ligaRepository->remove($liga);
		$this->flashMessageContainer->add('Your Liga was removed.');
		$this->redirect('list');
	}

}
?>