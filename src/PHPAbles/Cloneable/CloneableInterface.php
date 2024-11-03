<?php

declare(strict_types=1);

namespace PHPAbles\Cloneable;

interface CloneableInterface 
{
    public function getClone(): static;
}
