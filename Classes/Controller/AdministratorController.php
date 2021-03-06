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
class AdministratorController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$administrators = $this->administratorRepository->findAll();
		$this->view->assign('administrators', $administrators);
	}

	/**
	 * action show
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Administrator $administrator
	 * @return void
	 */
	public function showAction(\TYPO3\DstLigaverwaltung\Domain\Model\Administrator $administrator) {
		$this->view->assign('administrator', $administrator);
	}

	/**
	 * action new
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Administrator $newAdministrator
	 * @dontvalidate $newAdministrator
	 * @return void
	 */
	public function newAction(\TYPO3\DstLigaverwaltung\Domain\Model\Administrator $newAdministrator = NULL) {
		$this->view->assign('newAdministrator', $newAdministrator);
	}

	/**
	 * action create
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Administrator $newAdministrator
	 * @return void
	 */
	public function createAction(\TYPO3\DstLigaverwaltung\Domain\Model\Administrator $newAdministrator) {
		$this->administratorRepository->add($newAdministrator);
		$this->flashMessageContainer->add('Your new Administrator was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Administrator $administrator
	 * @return void
	 */
	public function editAction(\TYPO3\DstLigaverwaltung\Domain\Model\Administrator $administrator) {
		$this->view->assign('administrator', $administrator);
	}

	/**
	 * action update
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Administrator $administrator
	 * @return void
	 */
	public function updateAction(\TYPO3\DstLigaverwaltung\Domain\Model\Administrator $administrator) {
		$this->administratorRepository->update($administrator);
		$this->flashMessageContainer->add('Your Administrator was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Administrator $administrator
	 * @return void
	 */
	public function deleteAction(\TYPO3\DstLigaverwaltung\Domain\Model\Administrator $administrator) {
		$this->administratorRepository->remove($administrator);
		$this->flashMessageContainer->add('Your Administrator was removed.');
		$this->redirect('list');
	}

}
?>