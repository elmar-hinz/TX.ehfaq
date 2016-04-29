<?php
namespace ElmarHinz\Ehfaq\Tests\Functional;

use TYPO3\CMS\Core\Database\DatabaseConnection;

/**
 * Test case.
 *
 * @author Elmar Hinz Distribution <t3elmar@gmail.com>
 */
class ListTest extends \TYPO3\CMS\Core\Tests\FunctionalTestCase
{
    protected $testExtensionsToLoad = [ 'typo3conf/ext/ehfaq' ];

    public function setUp()
    {
        parent::setUp();
        $this->importDataSet(
            'typo3conf/ext/ehfaq/Tests/Functional/Fixtures/List.xml');
        $this->setUpFrontendRootPage(1, [
            'EXT:ehfaq/Tests/Functional/Fixtures/List.ts',
            'EXT:ehfaq/Tests/Functional/Fixtures/Trim.ts',
        ]);
    }

    /**
     * @test
     */
    public function listOutput()
    {
        $expected = <<< HTML
    <div class="tx-ehfaq">
        <section class="tx-ehfaq-topic">
            <header class="tx-ehfaq-topic-header"><h1>Question 1</h1></header>
            <div class="tx-ehfaq-topic-body ce-intext"> Answer 1 </div>
        </section>
        <section class="tx-ehfaq-topic">
            <header class="tx-ehfaq-topic-header"><h1>Question 2</h1></header>
            <div class="tx-ehfaq-topic-body ce-intext"> Answer 2 </div>
        </section>
        <section class="tx-ehfaq-topic">
            <header class="tx-ehfaq-topic-header"><h1>Question 3</h1></header>
            <div class="tx-ehfaq-topic-body ce-intext"> Answer 3 </div>
        </section>
    </div>
HTML;
        $expected = $this->tidy($expected);
        $response = $this->getFrontendResponse(1);
        $actual = $this->tidy($response->getContent());
        $this->assertEquals($expected, $actual);
    }

    /**
     * Tidy string
     *
     * Trims the string and reduces all whitespace
     * to a single blank.
     *
     * @param string dirty
     * @return string cleaned
     */
    private function tidy($str)
    {
        return trim(preg_replace('/\s\s+/', ' ', $str));
    }

}
