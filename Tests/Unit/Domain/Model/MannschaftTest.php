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
 * Test case for class \TYPO3\DstLigaverwaltung\Domain\Model\Mannschaft.
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
class MannschaftTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \TYPO3\DstLigaverwaltung\Domain\Model\Mannschaft
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \TYPO3\DstLigaverwaltung\Domain\Model\Mannschaft();
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
	public function getOrdnungszahlReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getOrdnungszahl()
		);
	}

	/**
	 * @test
	 */
	public function setOrdnungszahlForIntegerSetsOrdnungszahl() { 
		$this->fixture->setOrdnungszahl(12);

		$this->assertSame(
			12,
			$this->fixture->getOrdnungszahl()
		);
	}
	
	/**
	 * @test
	 */
	public function getTrainerReturnsInitialValueForTrainer() { }

	/**
	 * @test
	 */
	public function setTrainerForTrainerSetsTrainer() { }
	
	/**
	 * @test
	 */
	public function getCotrainerReturnsInitialValueForTrainer() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getCotrainer()
		);
	}

	/**
	 * @test
	 */
	public function setCotrainerForObjectStorageContainingTrainerSetsCotrainer() { 
		$cotrainer = new \TYPO3\DstLigaverwaltung\Domain\Model\Trainer();
		$objectStorageHoldingExactlyOneCotrainer = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneCotrainer->attach($cotrainer);
		$this->fixture->setCotrainer($objectStorageHoldingExactlyOneCotrainer);

		$this->assertSame(
			$objectStorageHoldingExactlyOneCotrainer,
			$this->fixture->getCotrainer()
		);
	}
	
	/**
	 * @test
	 */
	public function addCotrainerToObjectStorageHoldingCotrainer() {
		$cotrainer = new \TYPO3\DstLigaverwaltung\Domain\Model\Trainer();
		$objectStorageHoldingExactlyOneCotrainer = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneCotrainer->attach($cotrainer);
		$this->fixture->addCotrainer($cotrainer);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneCotrainer,
			$this->fixture->getCotrainer()
		);
	}

	/**
	 * @test
	 */
	public function removeCotrainerFromObjectStorageHoldingCotrainer() {
		$cotrainer = new \TYPO3\DstLigaverwaltung\Domain\Model\Trainer();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($cotrainer);
		$localObjectStorage->detach($cotrainer);
		$this->fixture->addCotrainer($cotrainer);
		$this->fixture->removeCotrainer($cotrainer);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getCotrainer()
		);
	}
	
	/**
	 * @test
	 */
	public function getVereinReturnsInitialValueForVerein() { }

	/**
	 * @test
	 */
	public function setVereinForVereinSetsVerein() { }
	
	/**
	 * @test
	 */
	public function getHalleReturnsInitialValueForSporthalle() { }

	/**
	 * @test
	 */
	public function setHalleForSporthalleSetsHalle() { }
	
	/**
	 * @test
	 */
	public function getAnsprechpartnerReturnsInitialValueForAnsprechpartner() { }

	/**
	 * @test
	 */
	public function setAnsprechpartnerForAnsprechpartnerSetsAnsprechpartner() { }
	
	/**
	 * @test
	 */
	public function getSpielerReturnsInitialValueForSpieler() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getSpieler()
		);
	}

	/**
	 * @test
	 */
	public function setSpielerForObjectStorageContainingSpielerSetsSpieler() { 
		$spieler = new \TYPO3\DstLigaverwaltung\Domain\Model\Spieler();
		$objectStorageHoldingExactlyOneSpieler = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneSpieler->attach($spieler);
		$this->fixture->setSpieler($objectStorageHoldingExactlyOneSpieler);

		$this->assertSame(
			$objectStorageHoldingExactlyOneSpieler,
			$this->fixture->getSpieler()
		);
	}
	
	/**
	 * @test
	 */
	public function addSpielerToObjectStorageHoldingSpieler() {
		$spieler = new \TYPO3\DstLigaverwaltung\Domain\Model\Spieler();
		$objectStorageHoldingExactlyOneSpieler = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneSpieler->attach($spieler);
		$this->fixture->addSpieler($spieler);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneSpieler,
			$this->fixture->getSpieler()
		);
	}

	/**
	 * @test
	 */
	public function removeSpielerFromObjectStorageHoldingSpieler() {
		$spieler = new \TYPO3\DstLigaverwaltung\Domain\Model\Spieler();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($spieler);
		$localObjectStorage->detach($spieler);
		$this->fixture->addSpieler($spieler);
		$this->fixture->removeSpieler($spieler);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getSpieler()
		);
	}
	
}
?>