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
 * Test case for class \TYPO3\DstLigaverwaltung\Domain\Model\Liga.
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
class LigaTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \TYPO3\DstLigaverwaltung\Domain\Model\Liga
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \TYPO3\DstLigaverwaltung\Domain\Model\Liga();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getBezeichnungReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBezeichnungForStringSetsBezeichnung() { 
		$this->fixture->setBezeichnung('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBezeichnung()
		);
	}
	
	/**
	 * @test
	 */
	public function getSpielleiterReturnsInitialValueForAdministrator() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getSpielleiter()
		);
	}

	/**
	 * @test
	 */
	public function setSpielleiterForObjectStorageContainingAdministratorSetsSpielleiter() { 
		$spielleiter = new \TYPO3\DstLigaverwaltung\Domain\Model\Administrator();
		$objectStorageHoldingExactlyOneSpielleiter = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneSpielleiter->attach($spielleiter);
		$this->fixture->setSpielleiter($objectStorageHoldingExactlyOneSpielleiter);

		$this->assertSame(
			$objectStorageHoldingExactlyOneSpielleiter,
			$this->fixture->getSpielleiter()
		);
	}
	
	/**
	 * @test
	 */
	public function addSpielleiterToObjectStorageHoldingSpielleiter() {
		$spielleiter = new \TYPO3\DstLigaverwaltung\Domain\Model\Administrator();
		$objectStorageHoldingExactlyOneSpielleiter = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneSpielleiter->attach($spielleiter);
		$this->fixture->addSpielleiter($spielleiter);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneSpielleiter,
			$this->fixture->getSpielleiter()
		);
	}

	/**
	 * @test
	 */
	public function removeSpielleiterFromObjectStorageHoldingSpielleiter() {
		$spielleiter = new \TYPO3\DstLigaverwaltung\Domain\Model\Administrator();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($spielleiter);
		$localObjectStorage->detach($spielleiter);
		$this->fixture->addSpielleiter($spielleiter);
		$this->fixture->removeSpielleiter($spielleiter);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getSpielleiter()
		);
	}
	
	/**
	 * @test
	 */
	public function getMannschaftenReturnsInitialValueForMannschaft() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getMannschaften()
		);
	}

	/**
	 * @test
	 */
	public function setMannschaftenForObjectStorageContainingMannschaftSetsMannschaften() { 
		$mannschaften = new \TYPO3\DstLigaverwaltung\Domain\Model\Mannschaft();
		$objectStorageHoldingExactlyOneMannschaften = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneMannschaften->attach($mannschaften);
		$this->fixture->setMannschaften($objectStorageHoldingExactlyOneMannschaften);

		$this->assertSame(
			$objectStorageHoldingExactlyOneMannschaften,
			$this->fixture->getMannschaften()
		);
	}
	
	/**
	 * @test
	 */
	public function addMannschaftenToObjectStorageHoldingMannschaften() {
		$mannschaften = new \TYPO3\DstLigaverwaltung\Domain\Model\Mannschaft();
		$objectStorageHoldingExactlyOneMannschaften = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneMannschaften->attach($mannschaften);
		$this->fixture->addMannschaften($mannschaften);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneMannschaften,
			$this->fixture->getMannschaften()
		);
	}

	/**
	 * @test
	 */
	public function removeMannschaftenFromObjectStorageHoldingMannschaften() {
		$mannschaften = new \TYPO3\DstLigaverwaltung\Domain\Model\Mannschaft();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($mannschaften);
		$localObjectStorage->detach($mannschaften);
		$this->fixture->addMannschaften($mannschaften);
		$this->fixture->removeMannschaften($mannschaften);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getMannschaften()
		);
	}
	
	/**
	 * @test
	 */
	public function getSaisonReturnsInitialValueFor() { }

	/**
	 * @test
	 */
	public function setSaisonForSetsSaison() { }
	
}
?>