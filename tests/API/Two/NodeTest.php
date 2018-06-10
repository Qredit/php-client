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
 * This is the node resource test class.
 *
 * @author Brian Faust <brian@ark.io>
 * @coversNothing
 */
class NodeTest extends TestCase
{
    /** @test */
    public function status_should_be_successful()
    {
        $response = $this->getResource(2, 'node')->status();

        $this->assertTrue($response->isSucess());
    }

    /** @test */
    public function syncing_should_be_successful()
    {
        $response = $this->getResource(2, 'node')->syncing();

        $this->assertTrue($response->isSucess());
    }

    /** @test */
    public function configuration_should_be_successful()
    {
        $response = $this->getResource(2, 'node')->configuration();

        $this->assertTrue($response->isSucess());
    }
}
