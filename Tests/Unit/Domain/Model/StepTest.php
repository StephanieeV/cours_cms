<?php
namespace SNSVLP\CocktailSnSvLp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Stéphanie Viéville <stephanie.vieville@etu.u-bordeaux.fr>
 * @author Sylvie Nguyen <sylvie.nguyen@etu.u-bordeaux.fr>
 * @author Lucie Perruchaud <lucie.perruchaud@etu.u-bordeaux.fr>
 */
class StepTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \SNSVLP\CocktailSnSvLp\Domain\Model\Step
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \SNSVLP\CocktailSnSvLp\Domain\Model\Step();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPhotoReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getPhoto()
        );
    }

    /**
     * @test
     */
    public function setPhotoForFileReferenceSetsPhoto()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setPhoto($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'photo',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }
}
