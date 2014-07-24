<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_dstligaverwaltung_domain_model_mannschaft'] = array(
	'ctrl' => $TCA['tx_dstligaverwaltung_domain_model_mannschaft']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, ordnungszahl, trainer, cotrainer, verein, halle, ansprechpartner, spieler',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, name, ordnungszahl, trainer, cotrainer, verein, halle, ansprechpartner, spieler,--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_dstligaverwaltung_domain_model_mannschaft',
				'foreign_table_where' => 'AND tx_dstligaverwaltung_domain_model_mannschaft.pid=###CURRENT_PID### AND tx_dstligaverwaltung_domain_model_mannschaft.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_db.xlf:tx_dstligaverwaltung_domain_model_mannschaft.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ordnungszahl' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_db.xlf:tx_dstligaverwaltung_domain_model_mannschaft.ordnungszahl',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'trainer' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_db.xlf:tx_dstligaverwaltung_domain_model_mannschaft.trainer',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_dstligaverwaltung_domain_model_trainer',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'cotrainer' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_db.xlf:tx_dstligaverwaltung_domain_model_mannschaft.cotrainer',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_dstligaverwaltung_domain_model_trainer',
				'foreign_field' => 'mannschaft1',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'verein' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_db.xlf:tx_dstligaverwaltung_domain_model_mannschaft.verein',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_dstligaverwaltung_domain_model_verein',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'halle' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_db.xlf:tx_dstligaverwaltung_domain_model_mannschaft.halle',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_dstligaverwaltung_domain_model_sporthalle',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'ansprechpartner' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_db.xlf:tx_dstligaverwaltung_domain_model_mannschaft.ansprechpartner',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_dstligaverwaltung_domain_model_ansprechpartner',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'spieler' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_db.xlf:tx_dstligaverwaltung_domain_model_mannschaft.spieler',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_dstligaverwaltung_domain_model_spieler',
				'MM' => 'tx_dstligaverwaltung_mannschaft_spieler_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_dstligaverwaltung_domain_model_spieler',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
		'liga' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
	),
);

?>