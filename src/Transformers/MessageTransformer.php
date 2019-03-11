<?php

namespace ssba\TelegramJsonToObject\Transformers;

use ssba\TelegramJsonToObject\Types\Animation;
use ssba\TelegramJsonToObject\Types\Audio;
use ssba\TelegramJsonToObject\Types\Chat;
use ssba\TelegramJsonToObject\Types\Contact;
use ssba\TelegramJsonToObject\Types\Document;
use ssba\TelegramJsonToObject\Types\Game;
use ssba\TelegramJsonToObject\Types\Invoice;
use ssba\TelegramJsonToObject\Types\Location;
use ssba\TelegramJsonToObject\Types\Message;
use ssba\TelegramJsonToObject\Types\MessageEntity;
use ssba\TelegramJsonToObject\Types\PassportData;
use ssba\TelegramJsonToObject\Types\PhotoSize;
use ssba\TelegramJsonToObject\Types\Sticker;
use ssba\TelegramJsonToObject\Types\SuccessfulPayment;
use ssba\TelegramJsonToObject\Types\User;
use ssba\TelegramJsonToObject\Types\Venue;
use ssba\TelegramJsonToObject\Types\Video;
use ssba\TelegramJsonToObject\Types\VideoNote;
use ssba\TelegramJsonToObject\Types\Voice;
use ssba\TelegramJsonToObject\Bindings\ArrayBinding;
use ssba\TelegramJsonToObject\Bindings\FieldBinding;
use ssba\TelegramJsonToObject\ClassBindings;


class MessageTransformer implements Transformer
{

    public function register(ClassBindings $classBindings)
    {
        $classBindings->register(new FieldBinding('from', 'from', User::class));
        $classBindings->register(new FieldBinding('chat', 'chat', Chat::class));
        $classBindings->register(new FieldBinding('forward_from', 'forward_from', User::class));
        $classBindings->register(new FieldBinding('forward_from_chat', 'forward_from_chat', Chat::class));
        $classBindings->register(new FieldBinding('reply_to_message', 'reply_to_message', Message::class));
        $classBindings->register(new ArrayBinding('entities', 'entities', MessageEntity::class));
        $classBindings->register(new ArrayBinding('caption_entities', 'caption_entities', MessageEntity::class));
        $classBindings->register(new FieldBinding('audio', 'audio',Audio::class));
        $classBindings->register(new FieldBinding('document', 'document', Document::class));
        $classBindings->register(new FieldBinding('animation', 'animation', Animation::class));
        $classBindings->register(new FieldBinding('game', 'game', Game::class));
        $classBindings->register(new ArrayBinding('photo', 'photo', PhotoSize::class));
        $classBindings->register(new FieldBinding('sticker', 'sticker', Sticker::class));
        $classBindings->register(new FieldBinding('video', 'video', Video::class));
        $classBindings->register(new FieldBinding('voice', 'voice', Voice::class));
        $classBindings->register(new FieldBinding('video_note', 'video_note', VideoNote::class));
        $classBindings->register(new FieldBinding('contact', 'contact', 	Contact::class));
        $classBindings->register(new FieldBinding('location', 'location', 	Location::class));
        $classBindings->register(new FieldBinding('venue', 'venue', Venue::class));
        $classBindings->register(new ArrayBinding('new_chat_members', 'new_chat_members', User::class));
        $classBindings->register(new FieldBinding('left_chat_member', 'left_chat_member', User::class));
        $classBindings->register(new ArrayBinding('new_chat_photo', 'new_chat_photo', PhotoSize::class));
        $classBindings->register(new FieldBinding('pinned_message', 'pinned_message', Message::class));
        $classBindings->register(new FieldBinding('invoice', 'invoice', 	Invoice::class));
        $classBindings->register(new FieldBinding('successful_payment', 'successful_payment', SuccessfulPayment::class));
        $classBindings->register(new FieldBinding('passport_data', 'passport_data', PassportData::class));
    }

    public function transforms()
    {
        return Message::class;
    }

}