<?php

namespace Ideup\DataFixtures\Generators;

class Firstname extends \Ideup\DataFixtures\AbstractGenerator
{
    public function __construct()
    {
        $dir = $this->getDataDirectory();
        $male = file($dir.'/firstname.male');
        $female = file($dir.'/firstname.female');

        parent::__construct(array_merge($male, $female));
    }
}
