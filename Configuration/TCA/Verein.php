<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_dstligaverwaltung_domain_model_verein'] = array(
	'ctrl' => $TCA['tx_dstligaverwaltung_domain_model_verein']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, strasse, plz, ort, bundesland_l_v, land, webseite, allg_email, ansprechpartner',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, name, strasse, plz, ort, bundesland_l_v, land, webseite, allg_email, ansprechpartner,--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'),
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
				'foreign_table' => 'tx_dstligaverwaltung_domain_model_verein',
				'foreign_table_where' => 'AND tx_dstligaverwaltung_domain_model_verein.pid=###CURRENT_PID### AND tx_dstligaverwaltung_domain_model_verein.sys_language_uid IN (-1,0)',
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
			'label' => 'LLL:EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_db.xlf:tx_dstligaverwaltung_domain_model_verein.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'strasse' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_db.xlf:tx_dstligaverwaltung_domain_model_verein.strasse',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'plz' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_db.xlf:tx_dstligaverwaltung_domain_model_verein.plz',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'ort' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_db.xlf:tx_dstligaverwaltung_domain_model_verein.ort',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'bundesland_l_v' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_db.xlf:tx_dstligaverwaltung_domain_model_verein.bundesland_l_v',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'land' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_db.xlf:tx_dstligaverwaltung_domain_model_verein.land',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'webseite' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_db.xlf:tx_dstligaverwaltung_domain_model_verein.webseite',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'allg_email' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_db.xlf:tx_dstligaverwaltung_domain_model_verein.allg_email',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ansprechpartner' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_db.xlf:tx_dstligaverwaltung_domain_model_verein.ansprechpartner',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_dstligaverwaltung_domain_model_ansprechpartner',
				'foreign_field' => 'verein',
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
	),
);

?>