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
 * Test case for class \TYPO3\DstLigaverwaltung\Domain\Model\Administrator.
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
class AdministratorTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \TYPO3\DstLigaverwaltung\Domain\Model\Administrator
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \TYPO3\DstLigaverwaltung\Domain\Model\Administrator();
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
	public function getEmailReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setEmailForStringSetsEmail() { 
		$this->fixture->setEmail('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getEmail()
		);
	}
	
	/**
	 * @test
	 */
	public function getTelReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTelForStringSetsTel() { 
		$this->fixture->setTel('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTel()
		);
	}
	
	/**
	 * @test
	 */
	public function getFaxReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setFaxForStringSetsFax() { 
		$this->fixture->setFax('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFax()
		);
	}
	
	/**
	 * @test
	 */
	public function getMobilReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setMobilForStringSetsMobil() { 
		$this->fixture->setMobil('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getMobil()
		);
	}
	
	/**
	 * @test
	 */
	public function getTel2ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTel2ForStringSetsTel2() { 
		$this->fixture->setTel2('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTel2()
		);
	}
	
	/**
	 * @test
	 */
	public function getAdresseReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setAdresseForStringSetsAdresse() { 
		$this->fixture->setAdresse('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getAdresse()
		);
	}
	
	/**
	 * @test
	 */
	public function getPlzReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setPlzForStringSetsPlz() { 
		$this->fixture->setPlz('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getPlz()
		);
	}
	
	/**
	 * @test
	 */
	public function getOrtReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setOrtForStringSetsOrt() { 
		$this->fixture->setOrt('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getOrt()
		);
	}
	
	/**
	 * @test
	 */
	public function getLandReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLandForStringSetsLand() { 
		$this->fixture->setLand('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLand()
		);
	}
	
}
?>