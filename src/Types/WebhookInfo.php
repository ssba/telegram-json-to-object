<?php

namespace ssba\TelegramJsonToObject\Types;

/**
 * Class WebhookInfo.
 *
 * Contains information about the current status of a webhook.
 *
 * @link https://core.telegram.org/bots/api#webhookinfo
 *
 */
class WebhookInfo extends BaseObject
{
    /**
     * Webhook URL, may be empty if webhook is not set up
     *
     * @var string
     */
    public $url;

    /**
     * Number of updates awaiting delivery
     *
     * @var integer
     */
    public $pending_update_count;

    /**
     * Optional. Unix time for the most recent error that happened when trying to deliver an update via webhook
     *
     * @var integer
     */
    public $last_error_date;

    /**
     * Optional. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
     *
     * @var string
     */
    public $last_error_message;

    /**
     * Optional. Maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery
     *
     * @var integer
     */
    public $max_connections;

    /**
     * Optional. A list of update types the bot is subscribed to. Defaults to all update types
     *
     * @var array of string
     */
    public $allowed_updates;
}
