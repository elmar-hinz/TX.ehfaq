<?php

namespace ElmarHinz\Ehfaq\Controller;

/***
 *
 * This file is part of the "Simple FAQ" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2016 Elmar Hinz Distribution <t3elmar@gmail.com>, Elmar Hinz
 *
 ***/

/**
 * FAQController
 */
class FAQController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * fAQRepository
     *
     * @var \ElmarHinz\Ehfaq\Domain\Repository\FAQRepository
     * @inject
     */
    protected $fAQRepository = null;
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $fAQs = $this->fAQRepository->findAll();
        $this->view->assign('fAQs', $fAQs);
    }
}
