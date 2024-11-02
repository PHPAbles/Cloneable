<?php

declare(strict_types=1);

namespace Potter\Cloneable;

trait CloneableTrait 
{
    final public function getClone(): static
    {
        return clone $this;
    }
}
