<?php

namespace ElmarHinz\Ehfaq\Domain\Repository;

/***
 *
 * This file is part of the "Simple FAQ" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2016 Elmar Hinz <t3elmar@gmail.com>
 *
 ***/

/**
 * The repository for FAQs
 */
class FAQRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    protected $defaultOrderings = array(
        'sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
    );
}
