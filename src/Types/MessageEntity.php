<?php

namespace ssba\TelegramJsonToObject\Types;

use ssba\TelegramJsonToObject\Transformers\MessageEntityTransformer;

/**
 * Class MessageEntity.
 *
 * This object represents one special entity in a text message. For example, hashtags, usernames, URLs, etc.
 *
 * @link https://core.telegram.org/bots/api#messageentity
 *
 */
class MessageEntity extends BaseObject
{
    /**
     * @var string
     */
    public static $transformer = MessageEntityTransformer::class;

    /**
     * Type of the entity. Can be mention (@username), hashtag, cashtag, bot_command, url, email, phone_number, bold (bold text), italic (italic text),
     * code (monowidth string), pre (monowidth block), text_link (for clickable text URLs), text_mention (for users without usernames).
     *
     * @var string
     */
    public $type;

    /**
     * Offset in UTF-16 code units to the start of the entity.
     *
     * @var integer
     */
    public $offset;

    /**
     * Length of the entity in UTF-16 code units.
     *
     * @var integer
     */
    public $length;

    /**
     * Optional. For “text_link” only, url that will be opened after user taps on the text.
     *
     * @var string
     */
    public $url;

    /**
     * Optional. For “text_mention” only, the mentioned user.
     *
     * @var User
     */
    public $user;


}