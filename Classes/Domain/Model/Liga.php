<?php
namespace TYPO3\DstLigaverwaltung\Domain\Model;

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
class Liga extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * bezeichnung
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $bezeichnung;

	/**
	 * spielleiter
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\DstLigaverwaltung\Domain\Model\Administrator>
	 */
	protected $spielleiter;

	/**
	 * mannschaften
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\DstLigaverwaltung\Domain\Model\Mannschaft>
	 */
	protected $mannschaften;

	/**
	 * saison
	 *
	 * @var
	 */
	protected $saison;

	/**
	 * __construct
	 *
	 * @return Liga
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->spielleiter = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->mannschaften = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the bezeichnung
	 *
	 * @return \string $bezeichnung
	 */
	public function getBezeichnung() {
		return $this->bezeichnung;
	}

	/**
	 * Sets the bezeichnung
	 *
	 * @param \string $bezeichnung
	 * @return void
	 */
	public function setBezeichnung($bezeichnung) {
		$this->bezeichnung = $bezeichnung;
	}

	/**
	 * Adds a Administrator
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Administrator $spielleiter
	 * @return void
	 */
	public function addSpielleiter(\TYPO3\DstLigaverwaltung\Domain\Model\Administrator $spielleiter) {
		$this->spielleiter->attach($spielleiter);
	}

	/**
	 * Removes a Administrator
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Administrator $spielleiterToRemove The Administrator to be removed
	 * @return void
	 */
	public function removeSpielleiter(\TYPO3\DstLigaverwaltung\Domain\Model\Administrator $spielleiterToRemove) {
		$this->spielleiter->detach($spielleiterToRemove);
	}

	/**
	 * Returns the spielleiter
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\DstLigaverwaltung\Domain\Model\Administrator> $spielleiter
	 */
	public function getSpielleiter() {
		return $this->spielleiter;
	}

	/**
	 * Sets the spielleiter
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\DstLigaverwaltung\Domain\Model\Administrator> $spielleiter
	 * @return void
	 */
	public function setSpielleiter(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $spielleiter) {
		$this->spielleiter = $spielleiter;
	}

	/**
	 * Adds a Mannschaft
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Mannschaft $mannschaften
	 * @return void
	 */
	public function addMannschaften(\TYPO3\DstLigaverwaltung\Domain\Model\Mannschaft $mannschaften) {
		$this->mannschaften->attach($mannschaften);
	}

	/**
	 * Removes a Mannschaft
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Mannschaft $mannschaftenToRemove The Mannschaft to be removed
	 * @return void
	 */
	public function removeMannschaften(\TYPO3\DstLigaverwaltung\Domain\Model\Mannschaft $mannschaftenToRemove) {
		$this->mannschaften->detach($mannschaftenToRemove);
	}

	/**
	 * Returns the mannschaften
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\DstLigaverwaltung\Domain\Model\Mannschaft> $mannschaften
	 */
	public function getMannschaften() {
		return $this->mannschaften;
	}

	/**
	 * Sets the mannschaften
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\DstLigaverwaltung\Domain\Model\Mannschaft> $mannschaften
	 * @return void
	 */
	public function setMannschaften(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $mannschaften) {
		$this->mannschaften = $mannschaften;
	}

	/**
	 * Returns the saison
	 *
	 * @return  $saison
	 */
	public function getSaison() {
		return $this->saison;
	}

	/**
	 * Sets the saison
	 *
	 * @param  $saison
	 * @return void
	 */
	public function setSaison($saison) {
		$this->saison = $saison;
	}

}
?>