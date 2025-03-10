<?php
use SNSVLP\CocktailSnSvLp\Domain\Model\Quantity;

return [
    'ctrl' => [
        'title' => 'LLL:EXT:cocktail_sn_sv_lp/Resources/Private/Language/locallang_db.xlf:tx_cocktailsnsvlp_domain_model_quantity',
        'label' => 'value',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'value,unity,ingredient',
        'iconfile' => 'EXT:cocktail_sn_sv_lp/Resources/Public/Icons/tx_cocktailsnsvlp_domain_model_quantity.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, value, unity, ingredient',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, value, unity, ingredient, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_cocktailsnsvlp_domain_model_quantity',
                'foreign_table_where' => 'AND tx_cocktailsnsvlp_domain_model_quantity.pid=###CURRENT_PID### AND tx_cocktailsnsvlp_domain_model_quantity.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
            ],
        ],

        'value' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cocktail_sn_sv_lp/Resources/Private/Language/locallang_db.xlf:tx_cocktailsnsvlp_domain_model_quantity.value',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2,required'
            ]
        ],
        'unity' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cocktail_sn_sv_lp/Resources/Private/Language/locallang_db.xlf:tx_cocktailsnsvlp_domain_model_quantity.unity',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [Quantity::UNIT_LEAF[0], Quantity::UNIT_LEAF[1]],
                    [Quantity::UNIT_LITRE[0], Quantity::UNIT_LITRE[1]],
                    [Quantity::UNIT_CLITRE[0], Quantity::UNIT_CLITRE[1]],
                    [Quantity::UNIT_MLITRE[0], Quantity::UNIT_MLITRE[1]],
                    [Quantity::UNIT_GRAMME[0], Quantity::UNIT_GRAMME[1]],
                    [Quantity::UNIT_TABLE_SPOON[0], Quantity::UNIT_TABLE_SPOON[1]],
                    [Quantity::UNIT_TEA_SPOON[0], Quantity::UNIT_TEA_SPOON[1]],
                    [Quantity::UNIT_ZEST[0], Quantity::UNIT_ZEST[1]],
                    [Quantity::UNIT_CUBE[0], Quantity::UNIT_CUBE[1]],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => 'required'
            ],
        ],
        'ingredient' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cocktail_sn_sv_lp/Resources/Private/Language/locallang_db.xlf:tx_cocktailsnsvlp_domain_model_quantity.ingredient',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_cocktailsnsvlp_domain_model_ingredient',
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
    
        'recipe' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
