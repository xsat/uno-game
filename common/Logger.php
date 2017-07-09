<?php

namespace Common;

/**
 * Class Logger
 */
class Logger
{
    /**
     * @var string
     */
    private $directory;

    /**
     * Logger constructor.
     * @param string $directory
     */
    public function __construct($directory)
    {
        $this->directory = $directory;
    }

    /**
     * @param string $filename
     *
     * @return string
     */
    public function get(string $filename): string
    {
        if (!file_exists($this->directory . $filename)) {
            return '';
        }

        return file_get_contents($this->directory . $filename);
    }

    /**
     * @param string $filename
     * @param null|string $content
     */
    public function add(string $filename, ?string $content): void
    {
        file_put_contents($this->directory . $filename, $content, FILE_APPEND);
    }

    /**
     * @param string $filename
     */
    public function clear(string $filename): void
    {
        file_put_contents($this->directory . $filename, '');
    }

    /**
     * @param string $filename
     */
    public function delete(string $filename): void
    {
        if (file_exists($this->directory . $filename)) {
            unlink($this->directory . $filename);
        }
    }
}
