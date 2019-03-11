<?php

namespace ssba\TelegramJsonToObject\Types;

use ssba\TelegramJsonToObject\Transformers\MessageTransformer;

/**
 * Class Message.
 *
 * This object represents a message.
 *
 * @link https://core.telegram.org/bots/api#message
 *
 */
class Message extends BaseObject
{

    /**
     * @var string
     */
    public static $transformer = MessageTransformer::class;

    /**
     * @var array
     */
    public static $types = [
        'text',
        'audio',
        'document',
        'game',
        'photo',
        'sticker',
        'video',
        'voice',
        'contact',
        'location',
        'venue',
        'new_chat_member',
        'left_chat_member',
        'new_chat_title',
        'new_chat_photo',
        'delete_chat_photo',
        'group_chat_created',
        'supergroup_chat_created',
        'channel_chat_created',
        'migrate_to_chat_id',
        'migrate_from_chat_id',
        'pinned_message',
        'successful_payment'
    ];

    /**
     * Unique message identifier inside this chat
     *
     * @var integer
     */
    public $message_id;

    /**
     * Optional. Sender, empty for messages sent to channels
     *
     * @var User
     */
    public $from;

    /**
     * Date the message was sent in Unix time
     *
     * @var integer
     */
    public $date;

    /**
     * Conversation the message belongs to
     *
     * @var Chat
     */
    public $chat;

    /**
     * Optional. For forwarded messages, sender of the original message
     *
     * @var User
     */
    public $forward_from;

    /**
     * Optional. For messages forwarded from channels, information about the original channel
     *
     * @var Chat
     */
    public $forward_from_chat;

    /**
     * Optional. For messages forwarded from channels, identifier of the original message in the channel
     *
     * @var integer
     */
    public $forward_from_message_id;

    /**
     * Optional. For messages forwarded from channels, signature of the post author if present
     *
     * @var string
     */
    public $forward_signature;

    /**
     * Optional. For forwarded messages, date the original message was sent in Unix time
     *
     * @var integer
     */
    public $forward_date;

    /**
     * Optional. For replies, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
     *
     * @var Message
     */
    public $reply_to_message;

    /**
     * Optional. Date the message was last edited in Unix time
     *
     * @var integer
     */
    public $edit_date;

    /**
     * Optional. The unique identifier of a media message group this message belongs to
     *
     * @var string
     */
    public $media_group_id;

    /**
     * Optional. Signature of the post author for messages in channels
     *
     * @var string
     */
    public $author_signature;

    /**
     * Optional. For text messages, the actual UTF-8 text of the message, 0-4096 characters.
     *
     * @var string
     */
    public $text;

    /**
     * Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
     *
     * @var array of MessageEntity
     */
    public $entities;

    /**
     * Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
     *
     * @var array of MessageEntity
     */
    public $caption_entities;

    /**
     * Optional. Message is an audio file, information about the file
     *
     * @var Audio
     */
    public $audio;

    /**
     * Optional. Message is a general file, information about the file
     *
     * @var Document
     */
    public $document;

    /**
     * Optional. Message is an animation, information about the animation. For backward compatibility, when this field is set, the document field will also be set
     *
     * @var Animation
     */
    public $animation;
    /**
     * Optional. Message is a game, information about the game.
     *
     * @var Game
     */
    public $game;

    /**
     * Optional. Message is a photo, available sizes of the photo
     *
     * @var array of PhotoSize
     */
    public $photo;

    /**
     * Optional. Message is a sticker, information about the sticker
     *
     * @var Sticker
     */
    public $sticker;

    /**
     * Optional. Message is a video, information about the video
     *
     * @var Video
     */
    public $video;

    /**
     * Optional. Message is a voice message, information about the file
     *
     * @var Voice
     */
    public $voice;

    /**
     * Optional. Message is a video note, information about the video message
     *
     * @var VideoNote
     */
    public $video_note;

    /**
     * Optional. Caption for the audio, document, photo, video or voice, 0-1024 characters
     *
     * @var string
     */
    public $caption;

    /**
     * Optional. Message is a shared contact, information about the contact
     *
     * @var Contact
     */
    public $contact;

    /**
     * Optional. Message is a shared location, information about the location
     *
     * @var Location
     */
    public $location;

    /**
     * Optional. Message is a venue, information about the venue
     *
     * @var Venue
     */
    public $venue;

    /**
     * Optional. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
     *
     * @var array of User
     */
    public $new_chat_members;

    /**
     * Optional. A member was removed from the group, information about them (this member may be the bot itself)
     *
     * @var User
     */
    public $left_chat_member;

    /**
     * Optional. A chat title was changed to this value
     *
     * @var string
     */
    public $new_chat_title;

    /**
     * Optional. A chat photo was change to this value
     *
     * @var array of PhotoSize
     */
    public $new_chat_photo;

    /**
     * Optional. Service message: the chat photo was deleted
     *
     * @var true
     */
    public $delete_chat_photo;

    /**
     * Optional. Service message: the group has been created
     *
     * @var true
     */
    public $group_chat_created;

    /**
     * Optional. Service message: the supergroup has been created. This field can‘t be received in a message coming through updates,
     * because bot can’t be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
     *
     * @var true
     */
    public $supergroup_chat_created;

    /**
     * Optional. Service message: the channel has been created. This field can‘t be received in a message coming through updates,
     * because bot can’t be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel.
     *
     * @var true
     */
    public $channel_chat_created;

    /**
     * Optional. The group has been migrated to a supergroup with the specified identifier.
     * This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it.
     * But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
     *
     * @var integer
     */
    public $migrate_to_chat_id;

    /**
     * Optional. The group has been migrated to a supergroup with the specified identifier.
     * This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it.
     * But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
     *
     * @var integer
     */
    public $migrate_from_chat_id;

    /**
     * Optional. Specified message was pinned. Note that the Message object in this field will not contain further reply_to_message fields even if it is itself a reply.
     *
     * @var Message
     */
    public $pinned_message;

    /**
     * Optional. Message is an invoice for a payment, information about the invoice.
     *
     * @var Invoice
     */
    public $invoice;

    /**
     * Optional. Message is a service message about a successful payment, information about the payment.
     *
     * @var SuccessfulPayment
     */
    public $successful_payment;

    /**
     * Optional. The domain name of the website on which the user has logged in.
     *
     * @var string
     */
    public $connected_website;

    /**
     * Optional. Telegram Passport data
     *
     * @var PassportData
     */
    public $passport_data;


}
