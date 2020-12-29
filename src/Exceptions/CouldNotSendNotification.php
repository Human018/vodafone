<?php

namespace NotificationChannels\Vodafone\Exceptions;

class CouldNotSendNotification extends StandardNotification
{
    public static function methodDoesNotExist()
    {
        return new static('The toVodafone method does not exist in your notification class.');
    }

    public static function incorrectMessageClass()
    {
        return new static('Your notification is incorrectly formatted or needs to use an instance of the VodafoneMessage class.');
    }
}
