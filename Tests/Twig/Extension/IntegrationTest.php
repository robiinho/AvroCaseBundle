<?php

/*
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Avro\CaseBundle\Tests\Twig\Extension;

use Avro\CaseBundle\Twig\Extension\CaseExtension;
use Avro\CaseBundle\Util\CaseConverter;
use Twig\Test\IntegrationTestCase;

/**
 * @author Steffen Roßkamp <steffen.rosskamp@gimmickmedia.de>
 * @afterClass CaseExtensionTest
 */
class IntegrationTest extends IntegrationTestCase
{
    public function getExtensions(): array
    {
        return [
            new CaseExtension(new CaseConverter()),
        ];
    }

    public function getFixturesDir(): string
    {
        return __DIR__.'/Fixtures/';
    }
}
