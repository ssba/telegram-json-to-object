<?php

namespace ssba\TelegramJsonToObject\Types;

use ssba\TelegramJsonToObject\Transformers\EncryptedPassportElementTransformer;


/**
 * Class EncryptedPassportElement.
 *
 * Contains information about documents or other Telegram Passport elements shared with the bot by the user.
 *
 * @link https://core.telegram.org/bots/api#encryptedpassportelement
 *
 */
class EncryptedPassportElement extends BaseObject
{

    /**
     * @var string
     */
    public static $transformer = EncryptedPassportElementTransformer::class;

    /**
     * 	Element type. One of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”,
     *  “address”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”,
     *  “temporary_registration”, “phone_number”, “email”.
     *
     * @var string
     */
    public $type;

    /**
     * Optional. Base64-encoded encrypted Telegram Passport element data provided by the user,
     * available for “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport” and
     * “address” types. Can be decrypted and verified using the accompanying EncryptedCredentials.
     *
     * @var string
     */
    public $data;

    /**
     * Optional. User's verified phone number, available only for “phone_number” type
     *
     * @var string
     */
    public $phone_number;

    /**
     * Optional. User's verified email address, available only for “email” type
     *
     * @var string
     */
    public $email;

    /**
     * Optional. Array of encrypted files with documents provided by the user, available for “utility_bill”,
     * “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types.
     * Files can be decrypted and verified using the accompanying EncryptedCredentials.
     *
     * @var array of PassportFile
     */
    public $files;

    /**
     * Optional. Encrypted file with the front side of the document, provided by the user.
     * Available for “passport”, “driver_license”, “identity_card” and “internal_passport”.
     * The file can be decrypted and verified using the accompanying EncryptedCredentials.
     *
     * @var PassportFile
     */
    public $front_side;

    /**
     * Optional. Encrypted file with the reverse side of the document, provided by the user.
     * Available for “driver_license” and “identity_card”.
     * The file can be decrypted and verified using the accompanying EncryptedCredentials.
     *
     * @var PassportFile
     */
    public $reverse_side;

    /**
     * Base64-encoded secret, encrypted with the bot's public RSA key, required for data decryption
     *
     * @var PassportFile
     */
    public $secret;

    /**
     * Optional. Encrypted file with the selfie of the user holding a document, provided by the user;
     * available for “passport”, “driver_license”, “identity_card” and “internal_passport”.
     * The file can be decrypted and verified using the accompanying EncryptedCredentials.
     *
     * @var array of PassportFile
     */
    public $selfie;

    /**
     * Optional. Array of encrypted files with translated versions of documents provided by the user.
     * Available if requested for “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”,
     * “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types.
     * Files can be decrypted and verified using the accompanying EncryptedCredentials.
     *
     * @var array of PassportFile
     */
    public $translation;

    /**
     * Base64-encoded element hash for using in PassportElementErrorUnspecified
     *
     * @var string
     */
    public $hash;

}