<?php

namespace Behavioral\Strategy;

class DirectAdmin implements PlatformInterface
{
    public function copy(File $file)
    {
        // copy file in direct admin way
    }

    public function delete(File $file)
    {
        // delete file in direct admin way
    }
}