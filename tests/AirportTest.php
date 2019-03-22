<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class AirportTest extends TestCase
{
    public function testPlaneCanLand() {
        $this->airport = new Airport();
        $this->assertTrue($this->airport->canLand('Airfrance'));
    }
}