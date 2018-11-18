<?php

namespace Behavioral\Strategy;

class File
{
    /**
     * @var string $name
     */
    protected $name;
    /**
     * @var string $path
     */
    protected $path;
    /**
     * @var int $size
     */
    protected $size;
    /**
     * @var string $owner
     */
    protected $owner;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return File
     */
    public function setName(string $name): File
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param string $path
     * @return File
     */
    public function setPath(string $path): File
    {
        $this->path = $path;
        return $this;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     * @return File
     */
    public function setSize(int $size): File
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @return string
     */
    public function getOwner(): string
    {
        return $this->owner;
    }

    /**
     * @param string $owner
     * @return File
     */
    public function setOwner(string $owner): File
    {
        $this->owner = $owner;
        return $this;
    }

}