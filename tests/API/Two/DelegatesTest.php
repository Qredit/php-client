<?php

declare(strict_types=1);

/*
 * This file is part of Ark PHP Client.
 *
 * (c) Ark Ecosystem <info@ark.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ArkEcosystem\Tests\Client\API\Two;

use ArkEcosystem\Tests\Client\TestCase;

/**
 * This is the delegates resource test class.
 *
 * @author Brian Faust <brian@ark.io>
 * @coversNothing
 */
class DelegatesTest extends TestCase
{
    /** @test */
    public function all_should_be_successful()
    {
        $response = $this->getResource(2, 'delegates')->all();

        $this->assertTrue($response->isSucess());
    }

    /** @test */
    public function show_should_be_successful()
    {
        $response = $this->getResource(2, 'delegates')->show();

        $this->assertTrue($response->isSucess());
    }

    /** @test */
    public function blocks_should_be_successful()
    {
        $response = $this->getResource(2, 'delegates')->blocks();

        $this->assertTrue($response->isSucess());
    }

    /** @test */
    public function voters_should_be_successful()
    {
        $response = $this->getResource(2, 'delegates')->voters();

        $this->assertTrue($response->isSucess());
    }
}
