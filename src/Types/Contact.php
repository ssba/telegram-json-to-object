<?php

namespace ssba\TelegramJsonToObject\Types;

/**
 * Class Contact.
 *
 * This object represents a phone contact.
 *
 * @link https://core.telegram.org/bots/api#contact
 *
 */
class Contact extends BaseObject
{
    /**
     * Contact's phone number
     *
     * @var string
     */
    public $phone_number;

    /**
     * Contact's first name
     *
     * @var string
     */
    public $first_name;

    /**
     * Optional. Contact's last name
     *
     * @var string
     */
    public $last_name;

    /**
     * Optional. Contact's user identifier in Telegram
     *
     * @var integer
     */
    public $user_id;

    /**
     * Optional. Additional data about the contact in the form of a vCard
     *
     * @var string
     */
    public $vcard;

}