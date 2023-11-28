<?php

namespace Saade\FilamentTiptapChatting\Commands;

use Illuminate\Console\Command;

class FilamentTiptapChattingCommand extends Command
{
    public $signature = 'filament-tiptap-chatting';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
