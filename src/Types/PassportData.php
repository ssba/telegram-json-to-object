<?php

namespace ssba\TelegramJsonToObject\Types;

use ssba\TelegramJsonToObject\Transformers\PassportDataTransformer;


/**
 * Class PassportData.
 *
 * Contains information about Telegram Passport data shared with the bot by the user.
 *
 * @link https://core.telegram.org/bots/api#passportdata
 *
 */
class PassportData extends BaseObject
{

    /**
     * @var string
     */
    public static $transformer = PassportDataTransformer::class;

    /**
     * Array with information about documents and other Telegram Passport elements that was shared with the bot
     *
     * @var array of EncryptedPassportElement
     */
    public $data;

    /**
     * Encrypted credentials required to decrypt the data
     *
     * @var EncryptedCredentials
     */
    public $credentials;

}