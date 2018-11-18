<?php

namespace Behavioral\Strategy;

interface PlatformInterface
{
    /**
     * @param File $file
     * @return mixed
     */
    public function copy(File $file);

    /**
     * @param File $file
     * @return mixed
     */
    public function delete(File $file);
}