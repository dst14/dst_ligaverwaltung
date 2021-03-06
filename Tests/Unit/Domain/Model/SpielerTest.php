<?php

namespace TYPO3\DstLigaverwaltung\Tests;
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
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \TYPO3\DstLigaverwaltung\Domain\Model\Spieler.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Ligaverwaltung
 *
 * @author Daniel Stange <daniel.stange@gmail.com>
 */
class SpielerTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \TYPO3\DstLigaverwaltung\Domain\Model\Spieler
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \TYPO3\DstLigaverwaltung\Domain\Model\Spieler();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setNameForStringSetsName() { 
		$this->fixture->setName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getName()
		);
	}
	
	/**
	 * @test
	 */
	public function getVornameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVornameForStringSetsVorname() { 
		$this->fixture->setVorname('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVorname()
		);
	}
	
	/**
	 * @test
	 */
	public function getGeschlechtReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setGeschlechtForStringSetsGeschlecht() { 
		$this->fixture->setGeschlecht('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getGeschlecht()
		);
	}
	
	/**
	 * @test
	 */
	public function getKlassifizierungReturnsInitialValueForFloat() { 
		$this->assertSame(
			0.0,
			$this->fixture->getKlassifizierung()
		);
	}

	/**
	 * @test
	 */
	public function setKlassifizierungForFloatSetsKlassifizierung() { 
		$this->fixture->setKlassifizierung(3.14159265);

		$this->assertSame(
			3.14159265,
			$this->fixture->getKlassifizierung()
		);
	}
	
	/**
	 * @test
	 */
	public function getDrslizenzReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setDrslizenzForStringSetsDrslizenz() { 
		$this->fixture->setDrslizenz('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getDrslizenz()
		);
	}
	
	/**
	 * @test
	 */
	public function getGeburtsdatumReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setGeburtsdatumForDateTimeSetsGeburtsdatum() { }
	
	/**
	 * @test
	 */
	public function getLizenzdatumReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setLizenzdatumForDateTimeSetsLizenzdatum() { }
	
}
?>