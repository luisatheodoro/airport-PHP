<?php
declare(strict_types=1);

final class Airport
{
    public function __construct($name) {
        $this->name = $name;
    }

    public function canLand($plane=null) :bool {
        return true;
    }

    public function canTakeOff($plane=null) :bool {
        return true;
    }
}
