<?php

declare(strict_types=1);

namespace PHPAbles\Cloneable;

trait CloneableTrait 
{
    final public function getClone(): static
    {
        return clone $this;
    }
}
