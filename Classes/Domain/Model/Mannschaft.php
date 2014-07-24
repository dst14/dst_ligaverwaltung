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
class Mannschaft extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Name des Teams
	 *
	 * @var \string
	 */
	protected $name;

	/**
	 * Ordnungszahl
	 *
	 * @var \integer
	 * @validate NotEmpty
	 */
	protected $ordnungszahl;

	/**
	 * trainer
	 *
	 * @var \TYPO3\DstLigaverwaltung\Domain\Model\Trainer
	 */
	protected $trainer;

	/**
	 * cotrainer
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\DstLigaverwaltung\Domain\Model\Trainer>
	 */
	protected $cotrainer;

	/**
	 * verein
	 *
	 * @var \TYPO3\DstLigaverwaltung\Domain\Model\Verein
	 */
	protected $verein;

	/**
	 * halle
	 *
	 * @var \TYPO3\DstLigaverwaltung\Domain\Model\Sporthalle
	 */
	protected $halle;

	/**
	 * ansprechpartner
	 *
	 * @var \TYPO3\DstLigaverwaltung\Domain\Model\Ansprechpartner
	 */
	protected $ansprechpartner;

	/**
	 * spieler
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\DstLigaverwaltung\Domain\Model\Spieler>
	 */
	protected $spieler;

	/**
	 * __construct
	 *
	 * @return Mannschaft
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
		$this->cotrainer = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->spieler = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
	 * Returns the ordnungszahl
	 *
	 * @return \integer $ordnungszahl
	 */
	public function getOrdnungszahl() {
		return $this->ordnungszahl;
	}

	/**
	 * Sets the ordnungszahl
	 *
	 * @param \integer $ordnungszahl
	 * @return void
	 */
	public function setOrdnungszahl($ordnungszahl) {
		$this->ordnungszahl = $ordnungszahl;
	}

	/**
	 * Returns the trainer
	 *
	 * @return \TYPO3\DstLigaverwaltung\Domain\Model\Trainer $trainer
	 */
	public function getTrainer() {
		return $this->trainer;
	}

	/**
	 * Sets the trainer
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Trainer $trainer
	 * @return void
	 */
	public function setTrainer(\TYPO3\DstLigaverwaltung\Domain\Model\Trainer $trainer) {
		$this->trainer = $trainer;
	}

	/**
	 * Adds a Trainer
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Trainer $cotrainer
	 * @return void
	 */
	public function addCotrainer(\TYPO3\DstLigaverwaltung\Domain\Model\Trainer $cotrainer) {
		$this->cotrainer->attach($cotrainer);
	}

	/**
	 * Removes a Trainer
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Trainer $cotrainerToRemove The Trainer to be removed
	 * @return void
	 */
	public function removeCotrainer(\TYPO3\DstLigaverwaltung\Domain\Model\Trainer $cotrainerToRemove) {
		$this->cotrainer->detach($cotrainerToRemove);
	}

	/**
	 * Returns the cotrainer
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\DstLigaverwaltung\Domain\Model\Trainer> $cotrainer
	 */
	public function getCotrainer() {
		return $this->cotrainer;
	}

	/**
	 * Sets the cotrainer
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\DstLigaverwaltung\Domain\Model\Trainer> $cotrainer
	 * @return void
	 */
	public function setCotrainer(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $cotrainer) {
		$this->cotrainer = $cotrainer;
	}

	/**
	 * Returns the verein
	 *
	 * @return \TYPO3\DstLigaverwaltung\Domain\Model\Verein $verein
	 */
	public function getVerein() {
		return $this->verein;
	}

	/**
	 * Sets the verein
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Verein $verein
	 * @return void
	 */
	public function setVerein(\TYPO3\DstLigaverwaltung\Domain\Model\Verein $verein) {
		$this->verein = $verein;
	}

	/**
	 * Returns the halle
	 *
	 * @return \TYPO3\DstLigaverwaltung\Domain\Model\Sporthalle $halle
	 */
	public function getHalle() {
		return $this->halle;
	}

	/**
	 * Sets the halle
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Sporthalle $halle
	 * @return void
	 */
	public function setHalle(\TYPO3\DstLigaverwaltung\Domain\Model\Sporthalle $halle) {
		$this->halle = $halle;
	}

	/**
	 * Returns the ansprechpartner
	 *
	 * @return \TYPO3\DstLigaverwaltung\Domain\Model\Ansprechpartner $ansprechpartner
	 */
	public function getAnsprechpartner() {
		return $this->ansprechpartner;
	}

	/**
	 * Sets the ansprechpartner
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Ansprechpartner $ansprechpartner
	 * @return void
	 */
	public function setAnsprechpartner(\TYPO3\DstLigaverwaltung\Domain\Model\Ansprechpartner $ansprechpartner) {
		$this->ansprechpartner = $ansprechpartner;
	}

	/**
	 * Adds a Spieler
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Spieler $spieler
	 * @return void
	 */
	public function addSpieler(\TYPO3\DstLigaverwaltung\Domain\Model\Spieler $spieler) {
		$this->spieler->attach($spieler);
	}

	/**
	 * Removes a Spieler
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Spieler $spielerToRemove The Spieler to be removed
	 * @return void
	 */
	public function removeSpieler(\TYPO3\DstLigaverwaltung\Domain\Model\Spieler $spielerToRemove) {
		$this->spieler->detach($spielerToRemove);
	}

	/**
	 * Returns the spieler
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\DstLigaverwaltung\Domain\Model\Spieler> $spieler
	 */
	public function getSpieler() {
		return $this->spieler;
	}

	/**
	 * Sets the spieler
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\DstLigaverwaltung\Domain\Model\Spieler> $spieler
	 * @return void
	 */
	public function setSpieler(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $spieler) {
		$this->spieler = $spieler;
	}

}
?>