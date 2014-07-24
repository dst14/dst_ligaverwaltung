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
class Saison extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * spieljahr
	 *
	 * @var \string
	 */
	protected $spieljahr;

	/**
	 * liga
	 *
	 * @var \TYPO3\DstLigaverwaltung\Domain\Model\Liga
	 */
	protected $liga;

	/**
	 * Returns the spieljahr
	 *
	 * @return \string $spieljahr
	 */
	public function getSpieljahr() {
		return $this->spieljahr;
	}

	/**
	 * Sets the spieljahr
	 *
	 * @param \string $spieljahr
	 * @return void
	 */
	public function setSpieljahr($spieljahr) {
		$this->spieljahr = $spieljahr;
	}

	/**
	 * Returns the liga
	 *
	 * @return \TYPO3\DstLigaverwaltung\Domain\Model\Liga $liga
	 */
	public function getLiga() {
		return $this->liga;
	}

	/**
	 * Sets the liga
	 *
	 * @param \TYPO3\DstLigaverwaltung\Domain\Model\Liga $liga
	 * @return void
	 */
	public function setLiga(\TYPO3\DstLigaverwaltung\Domain\Model\Liga $liga) {
		$this->liga = $liga;
	}

}
?>