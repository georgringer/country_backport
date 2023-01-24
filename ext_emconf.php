<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Backport of TYPO3 v12 country list to TYPO3 v11',
    'description' => 'Static list of countries for TYPO3 v11. This extension is only needed for TYPO3 v11. For TYPO3 v12 and later, the country list is part of the core.',
    'category' => 'fe',
    'author' => 'Georg Ringer',
    'author_email' => 'mail@ringer.it',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'version' => '0.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-12.5.99',
        ],
    ],
];
