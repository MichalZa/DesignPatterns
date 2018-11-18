<?php

namespace Behavioral\Strategy;


class Cpanel implements PlatformInterface
{
    public function copy(File $file)
    {
        // copy file in cpanel way
    }

    public function delete(File $file)
    {
        // delete file in cpanel way
    }
}