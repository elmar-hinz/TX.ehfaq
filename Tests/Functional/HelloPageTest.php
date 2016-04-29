<?php
namespace ElmarHinz\Ehfaq\Tests\Functional;

/**
 * Test case.
 *
 * @author Elmar Hinz Distribution <t3elmar@gmail.com>
 */
class HelloPageTest extends \TYPO3\CMS\Core\Tests\FunctionalTestCase
{

    protected $testExtensionsToLoad = [ 'typo3conf/ext/ehfaq' ];

    public function setUp()
    {
        parent::setUp();
        $this->importDataSet(
            'typo3/sysext/core/Tests/Functional/Fixtures/pages.xml');
        $this->setUpFrontendRootPage(1,
              ['EXT:ehfaq/Tests/Functional/Fixtures/Hello.ts']);
    }

    /**
     * @test
     */
    public function simplePageOutput()
    {
        $response = $this->getFrontendResponse(1);
        $this->assertContains("<p>Hello world!</p>", $response->getContent());
    }

}
