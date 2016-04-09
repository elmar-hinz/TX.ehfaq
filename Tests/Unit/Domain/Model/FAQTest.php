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

    /**
     * @test
     */
    public function getImagesReturnsInitialValueForFileReference()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getImages()
        );

    }

    /**
     * @test
     */
    public function setImagesForFileReferenceSetsImages()
    {
        $image = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $objectStorageHoldingExactlyOneImages = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneImages->attach($image);
        $this->subject->setImages($objectStorageHoldingExactlyOneImages);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneImages,
            'images',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addImageToObjectStorageHoldingImages()
    {
        $image = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $imagesObjectStorageMock = $this->getMock(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class, ['attach'], [], '', false);
        $imagesObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($image));
        $this->inject($this->subject, 'images', $imagesObjectStorageMock);

        $this->subject->addImage($image);
    }

    /**
     * @test
     */
    public function removeImageFromObjectStorageHoldingImages()
    {
        $image = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $imagesObjectStorageMock = $this->getMock(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class, ['detach'], [], '', false);
        $imagesObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($image));
        $this->inject($this->subject, 'images', $imagesObjectStorageMock);

        $this->subject->removeImage($image);

    }
}
