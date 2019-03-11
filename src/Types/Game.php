<?php

namespace ssba\TelegramJsonToObject\Types;

use ssba\TelegramJsonToObject\Transformers\GameTransformer;


/**
 * Class Game.
 *
 * This object represents a game. Use BotFather to create and edit games, their short names will act as unique identifiers.
 *
 * @link https://core.telegram.org/bots/api#game
 *
 */
class Game extends BaseObject
{

    /**
     * @var string
     */
    public static $transformer = GameTransformer::class;

    /**
     * Title of the game
     *
     * @var string
     */
    public $title;

    /**
     * Description of the game
     *
     * @var string
     */
    public $description;

    /**
     * Photo that will be displayed in the game message in chats.
     *
     * @var array of PhotoSize
     */
    public $photo;

    /**
     * Optional. Brief description of the game or high scores included in the game message.
     * Can be automatically edited to include current high scores for the game when the bot calls setGameScore,
     * or manually edited using editMessageText. 0-4096 characters.
     *
     * @var string
     */
    public $text;

    /**
     * Optional. Special entities that appear in text, such as usernames, URLs, bot commands, etc.
     *
     * @var array of MessageEntity
     */
    public $text_entities;

    /**
     * Optional. Animation that will be displayed in the game message in chats. Upload via BotFather
     *
     * @var Animation
     */
    public $animation;

}