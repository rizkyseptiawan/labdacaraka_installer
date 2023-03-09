<?php

namespace Labdacaraka\LabdacarakaInstaller\Commands;

use Illuminate\Console\Command;

class LabdacarakaInstallerCommand extends Command
{
    public $signature = 'labdacaraka-installer';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
