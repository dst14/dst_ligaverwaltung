<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Ligaverwaltung');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dstligaverwaltung_domain_model_mannschaft', 'EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_csh_tx_dstligaverwaltung_domain_model_mannschaft.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dstligaverwaltung_domain_model_mannschaft');
$TCA['tx_dstligaverwaltung_domain_model_mannschaft'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_db.xlf:tx_dstligaverwaltung_domain_model_mannschaft',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,ordnungszahl,trainer,cotrainer,verein,halle,spieler,ansprechpartner,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Mannschaft.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dstligaverwaltung_domain_model_mannschaft.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dstligaverwaltung_domain_model_trainer', 'EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_csh_tx_dstligaverwaltung_domain_model_trainer.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dstligaverwaltung_domain_model_trainer');
$TCA['tx_dstligaverwaltung_domain_model_trainer'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_db.xlf:tx_dstligaverwaltung_domain_model_trainer',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,vorname,email,lizenz,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Trainer.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dstligaverwaltung_domain_model_trainer.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dstligaverwaltung_domain_model_verein', 'EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_csh_tx_dstligaverwaltung_domain_model_verein.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dstligaverwaltung_domain_model_verein');
$TCA['tx_dstligaverwaltung_domain_model_verein'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_db.xlf:tx_dstligaverwaltung_domain_model_verein',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,strasse,plz,ort,bundesland_l_v,land,webseite,allg_email,ansprechpartner,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Verein.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dstligaverwaltung_domain_model_verein.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dstligaverwaltung_domain_model_ansprechpartner', 'EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_csh_tx_dstligaverwaltung_domain_model_ansprechpartner.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dstligaverwaltung_domain_model_ansprechpartner');
$TCA['tx_dstligaverwaltung_domain_model_ansprechpartner'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_db.xlf:tx_dstligaverwaltung_domain_model_ansprechpartner',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,vorname,telp,telmobil,email,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Ansprechpartner.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dstligaverwaltung_domain_model_ansprechpartner.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dstligaverwaltung_domain_model_sporthalle', 'EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_csh_tx_dstligaverwaltung_domain_model_sporthalle.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dstligaverwaltung_domain_model_sporthalle');
$TCA['tx_dstligaverwaltung_domain_model_sporthalle'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_db.xlf:tx_dstligaverwaltung_domain_model_sporthalle',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,adresse,gymlng,gymlat,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Sporthalle.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dstligaverwaltung_domain_model_sporthalle.gif'
	),
);

?>