<?php

namespace ssba\TelegramJsonToObject\Types;

/**
 * Class User.
 *
 * This object represents a Telegram user or bot.
 *
 * @link https://core.telegram.org/bots/api#user
 *
 */
class User extends BaseObject
{
    /**
     * Unique identifier for this user or bot
     *
     * @var integer
     */
    public $id;

    /**
     * True, if this user is a bot
     *
     * @var boolean
     */
    public $is_bot;

    /**
     * User‘s or bot’s first name
     *
     * @var string
     */
    public $first_name;

    /**
     * 	Optional. User‘s or bot’s last name
     *
     * @var string
     */
    public $last_name;

    /**
     * Optional. User‘s or bot’s username
     *
     * @var string
     */
    public $username;

    /**
     * Optional. IETF language tag of the user's language https://en.wikipedia.org/wiki/IETF_language_tag
     *
     * @var string
     */
    public $language_code;
}