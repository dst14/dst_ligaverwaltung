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
class Spieler extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

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
	 * geschlecht
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $geschlecht;

	/**
	 * klassifizierung
	 *
	 * @var \float
	 * @validate NotEmpty
	 */
	protected $klassifizierung;

	/**
	 * drslizenz
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $drslizenz;

	/**
	 * geburtsdatum
	 *
	 * @var \DateTime
	 * @validate NotEmpty
	 */
	protected $geburtsdatum;

	/**
	 * lizenzdatum
	 *
	 * @var \DateTime
	 */
	protected $lizenzdatum;

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
	 * Returns the geschlecht
	 *
	 * @return \string $geschlecht
	 */
	public function getGeschlecht() {
		return $this->geschlecht;
	}

	/**
	 * Sets the geschlecht
	 *
	 * @param \string $geschlecht
	 * @return void
	 */
	public function setGeschlecht($geschlecht) {
		$this->geschlecht = $geschlecht;
	}

	/**
	 * Returns the klassifizierung
	 *
	 * @return \float $klassifizierung
	 */
	public function getKlassifizierung() {
		return $this->klassifizierung;
	}

	/**
	 * Sets the klassifizierung
	 *
	 * @param \float $klassifizierung
	 * @return void
	 */
	public function setKlassifizierung($klassifizierung) {
		$this->klassifizierung = $klassifizierung;
	}

	/**
	 * Returns the drslizenz
	 *
	 * @return \string $drslizenz
	 */
	public function getDrslizenz() {
		return $this->drslizenz;
	}

	/**
	 * Sets the drslizenz
	 *
	 * @param \string $drslizenz
	 * @return void
	 */
	public function setDrslizenz($drslizenz) {
		$this->drslizenz = $drslizenz;
	}

	/**
	 * Returns the geburtsdatum
	 *
	 * @return \DateTime $geburtsdatum
	 */
	public function getGeburtsdatum() {
		return $this->geburtsdatum;
	}

	/**
	 * Sets the geburtsdatum
	 *
	 * @param \DateTime $geburtsdatum
	 * @return void
	 */
	public function setGeburtsdatum($geburtsdatum) {
		$this->geburtsdatum = $geburtsdatum;
	}

	/**
	 * Returns the lizenzdatum
	 *
	 * @return \DateTime $lizenzdatum
	 */
	public function getLizenzdatum() {
		return $this->lizenzdatum;
	}

	/**
	 * Sets the lizenzdatum
	 *
	 * @param \DateTime $lizenzdatum
	 * @return void
	 */
	public function setLizenzdatum($lizenzdatum) {
		$this->lizenzdatum = $lizenzdatum;
	}

}
?>