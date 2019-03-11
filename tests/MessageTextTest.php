<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use ssba\TelegramJsonToObject\TelegramJsonToObject;
use \ssba\TelegramJsonToObject\Types\Update;

final class MessageTextTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $str = file_get_contents(__DIR__."\TextMessageTemplate.json");

        $str=str_replace("@@UPDATE_ID", "1",$str);
        $str=str_replace("@@MESSAGE_ID", "1",$str);
        $str=str_replace("@@USER_ID", "1",$str);
        $str=str_replace("@@IS_BOT", "false",$str);
        $str=str_replace("@@USER_FIRST_NAME", "S",$str);
        $str=str_replace("@@USER_LAST_NAME", "B",$str);
        $str=str_replace("@@USER_USERNAME", "SB",$str);
        $str=str_replace("@@CHAT_ID", "1",$str);
        $str=str_replace("@@CURRENT_TIMESTAMP", "22",$str);
        $str=str_replace("@@COMMAND_WORD", "TEST",$str);

        fwrite(STDOUT, print_r($str, TRUE));

        $this->assertInstanceOf(
            Update::class,
            TelegramJsonToObject::resolve($str)
        );
    }

    /*
    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')
        );
    }*/
}
