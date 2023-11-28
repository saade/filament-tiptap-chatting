<?php

namespace Saade\FilamentTiptapChatting\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Saade\FilamentTiptapChatting\FilamentTiptapChatting
 */
class FilamentTiptapChatting extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Saade\FilamentTiptapChatting\FilamentTiptapChatting::class;
    }
}
