<?php

namespace ssba\TelegramJsonToObject\Types;

use GuzzleHttp\Psr7\LazyOpenStream;
use Psr\Http\Message\StreamInterface;

/**
 * This object represents the contents of a file to be uploaded. Must be posted using multipart/form-data in the usual way that files are uploaded via the browser.
 *
 * Class InputFile.
 */
class InputFile
{

    /**
     * The file path
     * @var null|StreamInterface|resource|string
     */
    protected $file;

    /**
     * The filename
     * @var null|string
     */
    protected $filename;

    /**
     * File's content
     * @var string|resource|StreamInterface
     */
    protected $contents;

    /**
     * InputFile constructed.
     *
     * @param string|resource|StreamInterface|null $file
     */
    public function __construct($file = null)
    {
        $this->file = $file;
        if ($this->isFileResourceOrStream() && ! isset($this->filename)) {
            return $this->filename = $this->attemptFileNameDetection();
        }else{
            $this->filename = basename($this->file);
        }
    }

    /**
     *
     *
     * @param $property
     *
     * @return mixed
     */
    public function __get($property) {
        if (property_exists($this, $property))
            return $this->$property;
        return null;
    }

    /**
     *
     *
     * @param $property
     *
     * @param $value
     *
     * @return InputFile
     */
    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }

        return $this;
    }

    /**
     * Check if it is a resource file.
     *
     * @return bool true if it's a resource file or an instance of StreamInterface, false otherwise.
     */
    protected function isFileResourceOrStream(): bool
    {
        return is_resource($this->file) || $this->file instanceof StreamInterface;
    }

    /**
     * Try to get filename  from meta data in the stream or resource.
     *
     * @return string|null
     */
    protected function attemptFileNameDetection()
    {
        if ($uri = $this->getUriMetaDataFromStream()) {
            return basename($uri);
        }
    }

    /**
     * Check if it is a remote file.
     *
     * @return bool
     */
    public function isFileRemote(): bool
    {
        return is_string($this->file) && preg_match('/^(https?|ftp):\/\/.*/', $this->file) === 1;
    }

    /**
     * Check if it is a local file and exists.
     *
     * @return bool
     */
    protected function isFileLocal(): bool
    {
        if (! is_string($this->file) ) {
            return false;
        }

        return is_file($this->file) && is_readable($this->file);
    }

    /**
     * Depending on if supplied Input was a resource or stream, call the appropriate
     * stream_meta command to get information required.
     *
     * @return string|null
     */
    protected function getUriMetaDataFromStream()
    {
        $meta = is_resource($this->file) ? stream_get_meta_data($this->file) : $this->file->getMetadata();

        return $meta['uri'] ?? null;
    }

    /**
     * Open file.
     *
     * @return StreamInterface|resource|string
     */
    public function open()
    {
        if ($this->isFileRemote() || $this->isFileLocal()) {
            return $this->contents = new LazyOpenStream($this->file, 'r');
        }

        return $this->contents = $this->file;
    }




}
