<?php

namespace my\package_name;

class Class_Name
{
    public function __construct(private string $name)
    {
    }

    public function __toString()
    {
        return $this->name;
    }
}
