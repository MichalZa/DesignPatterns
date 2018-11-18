<?php

namespace Behavioral\Strategy;

class FileManager
{
    /**
     * @var PlatformInterface
     */
    private $platform;

    public function __construct(PlatformInterface $platform)
    {
        $this->platform = $platform;
    }

    public function copy(File $file)
    {
        return $this->platform->copy($file);
    }

    public function delete(File $file)
    {
        return $this->platform->delete($file);
    }
}