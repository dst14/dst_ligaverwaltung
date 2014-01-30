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
class Verein extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * name
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $name;

	/**
	 * strasse
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $strasse;

	/**
	 * plz
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $plz;

	/**
	 * ort
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $ort;

	/**
	 * bundeslandLV
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $bundeslandLV;

	/**
	 * land
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $land;

	/**
	 * webseite
	 *
	 * @var \string
	 */
	protected $webseite;

	/**
	 * allgEmail
	 *
	 * @var \string
	 */
	protected $allgEmail;

	/**
	 * ansprechpartner
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\DstLigaverwaltung\Domain\Model\Ansprechpartner>
	 */
	protected $ansprechpartner;

	/**
	 * __construct
	 *
	 * @return Verein
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
		$this->ansprechpartner = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the name
	 *
	 * @return \string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param \string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the strasse
	 *
	 * @return \string $strasse
	 */
	public function getStrasse() {
		return $this->strasse;
	}

	/**
	 * Sets the strasse
	 *
	 * @param \string $strasse
	 * @return void
	 */
	public function setStrasse($strasse) {
		$this->strasse = $strasse;
	}

	/**
	 * Returns the plz
	 *
	 * @return \string $plz
	 */
	public function getPlz() {
		return $this->plz;
	}

	/**
	 * Sets the plz
	 *
	 * @param \string $plz
	 * @return void
	 */
	public function setPlz($plz) {
		$this->plz = $plz;
	}

	/**
	 * Returns the ort
	 *
	 * @return \string $ort
	 */
	public function getOrt() {
		return $this->ort;
	}

	/**
	 * Sets the ort
	 *
	 * @param \string $ort
	 * @return void
	 */
	public function setOrt($ort) {
		$this->ort = $ort;
	}

	/**
	 * Returns the bundeslandLV
	 *
	 * @return \string $bundeslandLV
	 */
	public function getBundeslandLV() {
		return $this->bundeslandLV;
	}

	/**
	 * Sets the bundeslandLV
	 *
	 * @param \string $bundeslandLV
	 * @return void
	 */
	public function setBundeslandLV($bundeslandLV) {
		$this->bundeslandLV = $bundeslandLV;
	}

	/**
	 * Returns the land
	 *
	 * @return \string $land
	 */
	public function getLand() {
		return $this->land;
	}

	/**
	 * Sets the land
	 *
	 * @param \string $land
	 * @return void
	 */
	public function setLand($land) {
		$this->land = $land;
	}

	/**
	 * Returns the webseite
	 *
	 * @return \string $webseite
	 */
	public function getWebseite() {
		return $this->webseite;
	}

	/**
	 * Sets the webseite
	 *
	 * @param \string $webseite
	 * @return void
	 */
	public function setWebseite($webseite) {
		$this->webseite = $webseite;
	}

	/**
	 * Returns the allgEmail
	 *
	 * @return \string $allgEmail
	 */
	public function getAllgEmail() {
		return $this->allgEmail;
	}

	/**
	 * Sets the allgEmail
	 *
	 * @param \string $allgEmail
	 * @return void
	 */
	public function setAllgEmail($allgEmail) {
		$this->allgEmail = $allgEmail;
	}

	/**
	 * Adds a Ansprechpartner
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Ansprechpartner $ansprechpartner
	 * @return void
	 */
	public function addAnsprechpartner(\TYPO3\DstLigaverwaltung\Domain\Model\Ansprechpartner $ansprechpartner) {
		$this->ansprechpartner->attach($ansprechpartner);
	}

	/**
	 * Removes a Ansprechpartner
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Ansprechpartner $ansprechpartnerToRemove The Ansprechpartner to be removed
	 * @return void
	 */
	public function removeAnsprechpartner(\TYPO3\DstLigaverwaltung\Domain\Model\Ansprechpartner $ansprechpartnerToRemove) {
		$this->ansprechpartner->detach($ansprechpartnerToRemove);
	}

	/**
	 * Returns the ansprechpartner
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\DstLigaverwaltung\Domain\Model\Ansprechpartner> $ansprechpartner
	 */
	public function getAnsprechpartner() {
		return $this->ansprechpartner;
	}

	/**
	 * Sets the ansprechpartner
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\DstLigaverwaltung\Domain\Model\Ansprechpartner> $ansprechpartner
	 * @return void
	 */
	public function setAnsprechpartner(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $ansprechpartner) {
		$this->ansprechpartner = $ansprechpartner;
	}

}
?>