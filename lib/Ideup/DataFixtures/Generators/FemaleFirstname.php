<?php

namespace Ideup\DataFixtures\Generators;

class FemaleFirstname extends \Ideup\DataFixtures\AbstractGenerator
{
    public function __construct()
    {
        parent::__construct(file($this->getDataDirectory().'/firstname.female'));
    }
}
