<?php

namespace ssba\TelegramJsonToObject\Types;

use ssba\TelegramJsonToObject\Transformers\ChosenInlineResultTransformer;


/**
 * Class ChosenInlineResult.
 *
 * Represents a result of an inline query that was chosen by the user and sent to their chat partner.
 *
 * @link https://core.telegram.org/bots/api#choseninlineresult
 *
 */
class ChosenInlineResult extends BaseObject
{

    /**
     * @var string
     */
    public static $transformer = ChosenInlineResultTransformer::class;

    /**
     * The unique identifier for the result that was chosen
     *
     * @var string
     */
    public $result_id;

    /**
     * The user that chose the result
     *
     * @var User
     */
    public $from;

    /**
     * 	Optional. Sender location, only for bots that require user location
     *
     * @var Location
     */
    public $location;

    /**
     * Optional. Identifier of the sent inline message.
     * Available only if there is an inline keyboard attached to the message.
     * Will be also received in callback queries and can be used to edit the message.
     *
     * @var string
     */
    public $inline_message_id;

    /**
     * The query that was used to obtain the result
     *
     * @var string
     */
    public $query;

}