<?php

namespace Doctrine\Common;

use my\package\Class\Name;
use my\package_name\Class_Name;

class ClassLoader
{
    public function __construct(
        public Name $name,
        public Class_Name $name2
    ) {
    }

    public function __toString()
    {
        return 'Classes: ' . $this->name . ' and ' . $this->name2 . PHP_EOL;
    }
}
