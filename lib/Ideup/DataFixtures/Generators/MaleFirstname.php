<?php

namespace Ideup\DataFixtures\Generators;

class MaleFirstname extends \Ideup\DataFixtures\AbstractGenerator
{
    public function __construct()
    {
        parent::__construct(file($this->getDataDirectory().'/firstname.male'));
    }
}
