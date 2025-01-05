<?php

/*
 * This file is part of the zenstruck/messenger-monitor-bundle package.
 *
 * (c) Kevin Bond <kevinbond@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zenstruck\Messenger\Monitor\Tests\Feature;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Zenstruck\Console\Test\InteractsWithConsole;

/**
 * @author Kevin Bond <kevinbond@gmail.com>
 */
final class DoctrineSchemaTest extends KernelTestCase
{
    use InteractsWithConsole;

    /**
     * @test
     */
    public function run_doctrine_schema_validate_command(): void
    {
        $this->executeConsoleCommand('doctrine:schema:validate --skip-sync')
            ->assertSuccessful()
        ;
    }
}
