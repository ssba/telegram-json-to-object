<?php

namespace ssba\TelegramJsonToObject\Types;

use ssba\TelegramJsonToObject\Transformers\ChatTransformer;

/**
 * Class Chat.
 *
 * This object represents a chat.
 *
 * @link https://core.telegram.org/bots/api#chat
 *
 */
class Chat extends BaseObject
{
    /**
     * @var string
     */
    public static $transformer = ChatTransformer::class;

    /**
     * Unique identifier for this chat. This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it.
     * But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
     *
     * @var integer
     */
    public $id;

    /**
     * Type of chat, can be either “private”, “group”, “supergroup” or “channel”
     *
     * @var string
     */
    public $type;

    /**
     * Optional. Title, for supergroups, channels and group chats
     *
     * @var string
     */
    public $title;

    /**
     * Optional. Username, for private chats, supergroups and channels if available
     *
     * @var string
     */
    public $username;

    /**
     * 	Optional. First name of the other party in a private chat
     *
     * @var string
     */
    public $first_name;

    /**
     * Optional. Last name of the other party in a private chat
     *
     * @var string
     */
    public $last_name;

    /**
     * Optional. True if a group has ‘All Members Are Admins’ enabled.
     *
     * @var boolean
     */
    public $all_members_are_administrators;

    /**
     * Optional. Chat photo. Returned only in getChat. TODO link to trait
     *
     * @var ChatPhoto
     */
    public $photo;

    /**
     * Optional. Description, for supergroups and channel chats. Returned only in getChat.
     *
     * @var string
     */
    public $description;

    /**
     * Optional. Chat invite link, for supergroups and channel chats. Returned only in getChat.
     *
     * @var string
     */
    public $invite_link;

    /**
     * Optional. Pinned message, for supergroups and channel chats. Returned only in getChat.
     *
     * @var Message
     */
    public $pinned_message;

    /**
     * Optional. For supergroups, name of group sticker set. Returned only in getChat.
     *
     * @var string
     */
    public $sticker_set_name;

    /**
     * Optional. True, if the bot can change the group sticker set. Returned only in getChat.
     *
     * @var boolean
     */
    public $can_set_sticker_set;




}
