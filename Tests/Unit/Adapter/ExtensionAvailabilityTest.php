<?php

declare(strict_types=1);

/*
 * This file is part of the "schema" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\Schema\Tests\Unit\Adapter;

use Brotkrueml\Schema\Adapter\ExtensionAvailability;
use PHPUnit\Framework\MockObject\Stub;
use PHPUnit\Framework\TestCase;
use TYPO3\CMS\Core\Package\PackageManager;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * @runInSeparateProcess
 */
class ExtensionAvailabilityTest extends TestCase
{
    /**
     * @var Stub&PackageManager
     */
    private $packageManagerStub;

    private ExtensionAvailability $subject;

    protected function setUp(): void
    {
        $this->subject = new ExtensionAvailability();

        $this->packageManagerStub = $this->createStub(PackageManager::class);
        ExtensionManagementUtility::setPackageManager($this->packageManagerStub);
    }

    /**
     * @test
     */
    public function isSeoAvailableCallIsLoadedSeo(): void
    {
        $this->packageManagerStub
            ->method('isPackageActive')
            ->with('seo')
            ->willReturn(true);

        self::assertTrue($this->subject->isSeoAvailable());
    }

    /**
     * @test
     */
    public function isSeoAvailableReturnsFalseWhenItsLoaded(): void
    {
        $this->packageManagerStub
            ->method('isPackageActive')
            ->with('seo')
            ->willReturn(false);

        self::assertFalse($this->subject->isSeoAvailable());
    }
}
