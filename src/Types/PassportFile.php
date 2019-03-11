<?php

namespace ssba\TelegramJsonToObject\Types;


/**
 * Class PassportFile.
 *
 * This object represents a file uploaded to Telegram Passport.
 * Currently all Telegram Passport files are in JPEG format when decrypted and don't exceed 10MB.
 *
 * @link https://core.telegram.org/bots/api#passportfile
 *
 */
class PassportFile extends BaseObject
{
    /**
     * Venue location
     *
     * @var Location
     */
    public $file_id;

    /**
     * Name of the venue
     *
     * @var integer
     */
    public $file_size;

    /**
     * Address of the venue
     *
     * @var integer
     */
    public $file_date;

}