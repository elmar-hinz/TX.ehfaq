<?php
namespace ElmarHinz\Ehfaq\Tests\Functional;

use TYPO3\CMS\Core\Database\DatabaseConnection;

/**
 * Test case.
 *
 * @author Elmar Hinz Distribution <t3elmar@gmail.com>
 */
class HelloWorldTest extends \TYPO3\CMS\Core\Tests\FunctionalTestCase
{

    /**
     * @test
     */
    public function fixtureIsUp()
    {
        $db = $this->getDatabaseConnection();
        $this->assertInstanceOf(DatabaseConnection::class, $db);
        $fileadmin = $this->getInstancePath() . '/fileadmin';
        $this->assertFileExists($fileadmin);
    }

}
