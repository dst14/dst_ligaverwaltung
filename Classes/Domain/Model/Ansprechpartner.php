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
class Ansprechpartner extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

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
	 * @validate NotEmpty
	 */
	protected $vorname;

	/**
	 * telp
	 *
	 * @var \string
	 */
	protected $telp;

	/**
	 * telmobil
	 *
	 * @var \string
	 */
	protected $telmobil;

	/**
	 * email
	 *
	 * @var \string
	 */
	protected $email;

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
	 * Returns the telp
	 *
	 * @return \string $telp
	 */
	public function getTelp() {
		return $this->telp;
	}

	/**
	 * Sets the telp
	 *
	 * @param \string $telp
	 * @return void
	 */
	public function setTelp($telp) {
		$this->telp = $telp;
	}

	/**
	 * Returns the telmobil
	 *
	 * @return \string $telmobil
	 */
	public function getTelmobil() {
		return $this->telmobil;
	}

	/**
	 * Sets the telmobil
	 *
	 * @param \string $telmobil
	 * @return void
	 */
	public function setTelmobil($telmobil) {
		$this->telmobil = $telmobil;
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

}
?>