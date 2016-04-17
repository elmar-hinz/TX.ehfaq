<?php
namespace ElmarHinz\Ehfaq\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Elmar Hinz Distribution <t3elmar@gmail.com>
 */
class FAQControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \ElmarHinz\Ehfaq\Controller\FAQController
     */
    protected $subject = null;

    protected function setUp()
    {
        $this->subject = $this->getMock(\ElmarHinz\Ehfaq\Controller\FAQController::class, ['redirect', 'forward', 'addFlashMessage'], [], '', false);
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllFAQsFromRepositoryAndAssignsThemToView()
    {

        $allFAQs = $this->getMock(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class, [], [], '', false);

        $fAQRepository = $this->getMock(\ElmarHinz\Ehfaq\Domain\Repository\FAQRepository::class, ['findAll'], [], '', false);
        $fAQRepository->expects(self::once())->method('findAll')->will(self::returnValue($allFAQs));
        $this->inject($this->subject, 'fAQRepository', $fAQRepository);

        $view = $this->getMock(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class);
        $view->expects(self::once())->method('assign')->with('fAQs', $allFAQs);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
