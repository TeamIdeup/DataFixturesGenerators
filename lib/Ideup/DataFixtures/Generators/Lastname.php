<?php

namespace Ideup\DataFixtures\Generators;

class Lastname extends \Ideup\DataFixtures\AbstractGenerator
{
    public function __construct()
    {
        parent::__construct(file($this->getDataDirectory().'/lastname'));
    }
}
