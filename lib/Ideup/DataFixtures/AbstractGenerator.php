<?php

namespace Ideup\DataFixtures;

abstract class AbstractGenerator extends \ArrayObject
{
    protected $dataDirectory;

    public function getDataDirectory()
    {
        if ($this->dataDirectory === null) {
            return dirname(dirname(__DIR__)).'/data';
        }
        return $this->dataDirectory;
    }

    public function setDataDirectory($directory)
    {
        $this->dataDirectory = $directory;
    }

    public function rand()
    {
        return rtrim($this->offsetGet(rand(0, $this->count())));
    }
}
