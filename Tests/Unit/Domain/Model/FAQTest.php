<?php
namespace ElmarHinz\Ehfaq\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Elmar Hinz Distribution <t3elmar@gmail.com>
 */
class FAQTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \ElmarHinz\Ehfaq\Domain\Model\FAQ
     */
    protected $subject = null;

    protected function setUp()
    {
        $this->subject = new \ElmarHinz\Ehfaq\Domain\Model\FAQ();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getQuestionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getQuestion()
        );

    }

    /**
     * @test
     */
    public function setQuestionForStringSetsQuestion()
    {
        $this->subject->setQuestion('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'question',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getAnswerReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAnswer()
        );

    }

    /**
     * @test
     */
    public function setAnswerForStringSetsAnswer()
    {
        $this->subject->setAnswer('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'answer',
            $this->subject
        );

    }
}
