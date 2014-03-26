<?php
/**
 * Edmundo Fuentes
 * FuentesWorks
 * (c) 2014
 *
 * Based on the work by Rafał Wrzeszcz <rafal.wrzeszcz@wrzasq.pl>
 *   in the original package ChillDev\Bundle\FileManagerBundle
 */

namespace FuentesWorks\DocBrowserBundle\Filesystem;

use Symfony\Component\Filesystem\Exception\IOException;
use Symfony\Component\Filesystem\Filesystem as FsUtils;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Filesystem
{
    /**
     * Root path for content.
     *
     * @var string
     */
    protected $root;

    /**
     * Symfony's filesystem helper utility.
     *
     * @var FsUtils
     */
    protected $filesystem;

    /**
     * Initializes filesystem wrapper.
     *
     * @param string $root Root path for this disk.
     * @throws IOException When given path does not exist.
     */
    public function __construct($root)
    {
        if (!\file_exists($root)) {
            throw new IOException(\sprintf('Specified filesystem root path "%s" does not exist.', $root));
        }

        $this->root = $root;
        $this->filesystem = new FsUtils();
    }

    /**
     * Checks if file exists.
     *
     * @param string $path File path.
     * @return bool File state.
     */
    public function exists($path)
    {
        return \file_exists($this->root . $path);
    }

    /**
     * Initializes directory iterator.
     *
     * @param string $path Subject directory path.
     * @return \FilesystemIterator Directory listing iterator.
     */
    public function createDirectoryIterator($path)
    {
        return new \FilesystemIterator(
            $this->root . $path,
            \FilesystemIterator::KEY_AS_FILENAME
            | \FilesystemIterator::CURRENT_AS_FILEINFO
            | \FilesystemIterator::SKIP_DOTS
            | \FilesystemIterator::UNIX_PATHS
        );
    }

    /**
     * Creates fileinfo object.
     *
     * @param string $path Subject path.
     * @return \SplFileInfo File information object.
     * @version 0.0.3
     * @since 0.0.3
     */
    public function getFileInfo($path)
    {
        return new \SplFileInfo($this->root . $path);
    }
}