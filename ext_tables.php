<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Ligaverwaltung');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dstligaverwaltung_domain_model_saison', 'EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_csh_tx_dstligaverwaltung_domain_model_saison.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dstligaverwaltung_domain_model_saison');
$TCA['tx_dstligaverwaltung_domain_model_saison'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_db.xlf:tx_dstligaverwaltung_domain_model_saison',
		'label' => 'uid',
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
		'searchFields' => '',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Saison.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dstligaverwaltung_domain_model_saison.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dstligaverwaltung_domain_model_sporthalle', 'EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_csh_tx_dstligaverwaltung_domain_model_sporthalle.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dstligaverwaltung_domain_model_sporthalle');
$TCA['tx_dstligaverwaltung_domain_model_sporthalle'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_db.xlf:tx_dstligaverwaltung_domain_model_sporthalle',
		'label' => 'uid',
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
		'searchFields' => '',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Sporthalle.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dstligaverwaltung_domain_model_sporthalle.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dstligaverwaltung_domain_model_verein', 'EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_csh_tx_dstligaverwaltung_domain_model_verein.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dstligaverwaltung_domain_model_verein');
$TCA['tx_dstligaverwaltung_domain_model_verein'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_db.xlf:tx_dstligaverwaltung_domain_model_verein',
		'label' => 'uid',
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
		'searchFields' => '',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Verein.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dstligaverwaltung_domain_model_verein.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dstligaverwaltung_domain_model_spieler', 'EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_csh_tx_dstligaverwaltung_domain_model_spieler.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dstligaverwaltung_domain_model_spieler');
$TCA['tx_dstligaverwaltung_domain_model_spieler'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_db.xlf:tx_dstligaverwaltung_domain_model_spieler',
		'label' => 'uid',
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
		'searchFields' => '',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Spieler.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dstligaverwaltung_domain_model_spieler.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dstligaverwaltung_domain_model_spiel', 'EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_csh_tx_dstligaverwaltung_domain_model_spiel.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dstligaverwaltung_domain_model_spiel');
$TCA['tx_dstligaverwaltung_domain_model_spiel'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_db.xlf:tx_dstligaverwaltung_domain_model_spiel',
		'label' => 'uid',
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
		'searchFields' => '',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Spiel.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dstligaverwaltung_domain_model_spiel.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dstligaverwaltung_domain_model_liga', 'EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_csh_tx_dstligaverwaltung_domain_model_liga.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dstligaverwaltung_domain_model_liga');
$TCA['tx_dstligaverwaltung_domain_model_liga'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_db.xlf:tx_dstligaverwaltung_domain_model_liga',
		'label' => 'uid',
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
		'searchFields' => '',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Liga.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dstligaverwaltung_domain_model_liga.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dstligaverwaltung_domain_model_schiedsrichter', 'EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_csh_tx_dstligaverwaltung_domain_model_schiedsrichter.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dstligaverwaltung_domain_model_schiedsrichter');
$TCA['tx_dstligaverwaltung_domain_model_schiedsrichter'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_db.xlf:tx_dstligaverwaltung_domain_model_schiedsrichter',
		'label' => 'uid',
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
		'searchFields' => '',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Schiedsrichter.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dstligaverwaltung_domain_model_schiedsrichter.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dstligaverwaltung_domain_model_trainer', 'EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_csh_tx_dstligaverwaltung_domain_model_trainer.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dstligaverwaltung_domain_model_trainer');
$TCA['tx_dstligaverwaltung_domain_model_trainer'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dst_ligaverwaltung/Resources/Private/Language/locallang_db.xlf:tx_dstligaverwaltung_domain_model_trainer',
		'label' => 'uid',
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
		'searchFields' => '',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Trainer.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dstligaverwaltung_domain_model_trainer.gif'
	),
);

?>