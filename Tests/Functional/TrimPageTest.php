<?php
namespace ElmarHinz\Ehfaq\Tests\Functional;

/**
 * Test case.
 *
 * @author Elmar Hinz Distribution <t3elmar@gmail.com>
 */
class TrimPageTest extends \TYPO3\CMS\Core\Tests\FunctionalTestCase
{

    protected $testExtensionsToLoad = [ 'typo3conf/ext/ehfaq' ];

    public function setUp()
    {
        parent::setUp();
        $this->importDataSet(
            'typo3/sysext/core/Tests/Functional/Fixtures/pages.xml');
        $this->setUpFrontendRootPage(1, [
            'EXT:ehfaq/Tests/Functional/Fixtures/Hello.ts',
            'EXT:ehfaq/Tests/Functional/Fixtures/Trim.ts',
        ]);
    }

    /**
     * @test
     */
    public function trimmedPageOutput()
    {
        $response = $this->getFrontendResponse(1);
        $this->assertEquals("<p>Hello world!</p>", $response->getContent());
    }

}
