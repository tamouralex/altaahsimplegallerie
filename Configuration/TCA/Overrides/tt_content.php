<?php
defined('TYPO3_MODE') || die();

call_user_func(static function () {

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['altaahsimplegallerie_simplegallerie'] = 'tx_altaahsimplegallerie_simplegallerie';
$tempColumns = [
    'tx_altaahsimplegallerie_simplegalerieimg' => [
        'config' => [
            'appearance' => [
                'enabledControls' => [
                    'delete' => 1,
                    'dragdrop' => 1,
                    'hide' => 1,
                    'info' => 1,
                    'localize' => 1,
                    'new' => 1,
                    'sort' => 1,
                ],
                'levelLinksPosition' => 'bottom',
                'showAllLocalizationLink' => 1,
                'showNewRecordLink' => 1,
                'showPossibleLocalizationRecords' => 1,
                'useSortable' => 1,
            ],
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_altaahsimplegallerie_simplegalerieimg',
            'foreign_table_field' => 'parenttable',
            'type' => 'inline',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:altaahsimplegallerie/Resources/Private/Language/locallang_db.xlf:tt_content.tx_altaahsimplegallerie_simplegalerieimg',
    ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:altaahsimplegallerie/Resources/Private/Language/locallang_db.xlf:tt_content.CType.div._altaahsimplegallerie_',
    '--div--',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:altaahsimplegallerie/Resources/Private/Language/locallang_db.xlf:tt_content.CType.altaahsimplegallerie_simplegallerie',
    'altaahsimplegallerie_simplegallerie',
    'tx_altaahsimplegallerie_simplegallerie',
];
$tempTypes = [
    'altaahsimplegallerie_simplegallerie' => [
        'columnsOverrides' => [
            'tx_altaahsimplegallerie_simplegalerieimg' => [
                'label' => 'Image gallerie',
                'description' => 'Gallerie',
            ],
        ],
        'showitem' => '
           --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
           --palette--;;general,
           --palette--;;headers,
            tx_altaahsimplegallerie_simplegalerieimg,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
];
$GLOBALS['TCA']['tt_content']['types'] += $tempTypes;
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'altaahsimplegallerie',
    'Configuration/TypoScript/',
    'altaahsimplegallerie'
);

});

require(\TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName('EXT:backgroundimage4ce/Configuration/TCA/Overrides/tt_content.php'));


