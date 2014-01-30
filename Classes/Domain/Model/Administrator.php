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
class Administrator extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * name
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $name;

	/**
	 * vorname
	 *
	 * @var \string
	 */
	protected $vorname;

	/**
	 * email
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $email;

	/**
	 * tel
	 *
	 * @var \string
	 */
	protected $tel;

	/**
	 * fax
	 *
	 * @var \string
	 */
	protected $fax;

	/**
	 * mobil
	 *
	 * @var \string
	 */
	protected $mobil;

	/**
	 * tel2
	 *
	 * @var \string
	 */
	protected $tel2;

	/**
	 * adresse
	 *
	 * @var \string
	 */
	protected $adresse;

	/**
	 * plz
	 *
	 * @var \string
	 */
	protected $plz;

	/**
	 * ort
	 *
	 * @var \string
	 */
	protected $ort;

	/**
	 * land
	 *
	 * @var \string
	 */
	protected $land;

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
	 * Returns the vorname
	 *
	 * @return \string $vorname
	 */
	public function getVorname() {
		return $this->vorname;
	}

	/**
	 * Sets the vorname
	 *
	 * @param \string $vorname
	 * @return void
	 */
	public function setVorname($vorname) {
		$this->vorname = $vorname;
	}

	/**
	 * Returns the email
	 *
	 * @return \string $email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Sets the email
	 *
	 * @param \string $email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * Returns the tel
	 *
	 * @return \string $tel
	 */
	public function getTel() {
		return $this->tel;
	}

	/**
	 * Sets the tel
	 *
	 * @param \string $tel
	 * @return void
	 */
	public function setTel($tel) {
		$this->tel = $tel;
	}

	/**
	 * Returns the fax
	 *
	 * @return \string $fax
	 */
	public function getFax() {
		return $this->fax;
	}

	/**
	 * Sets the fax
	 *
	 * @param \string $fax
	 * @return void
	 */
	public function setFax($fax) {
		$this->fax = $fax;
	}

	/**
	 * Returns the mobil
	 *
	 * @return \string $mobil
	 */
	public function getMobil() {
		return $this->mobil;
	}

	/**
	 * Sets the mobil
	 *
	 * @param \string $mobil
	 * @return void
	 */
	public function setMobil($mobil) {
		$this->mobil = $mobil;
	}

	/**
	 * Returns the tel2
	 *
	 * @return \string $tel2
	 */
	public function getTel2() {
		return $this->tel2;
	}

	/**
	 * Sets the tel2
	 *
	 * @param \string $tel2
	 * @return void
	 */
	public function setTel2($tel2) {
		$this->tel2 = $tel2;
	}

	/**
	 * Returns the adresse
	 *
	 * @return \string $adresse
	 */
	public function getAdresse() {
		return $this->adresse;
	}

	/**
	 * Sets the adresse
	 *
	 * @param \string $adresse
	 * @return void
	 */
	public function setAdresse($adresse) {
		$this->adresse = $adresse;
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

}
?>