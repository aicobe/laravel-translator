<?php

namespace Aicobe\LaravelTranslator\Commnads;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class Publish extends Command
{
    /**
     * @var string
     */
    protected $signature = 'laravel-lang:publish
                            {locales=all : Comma-separated list of, eg: zh_CN,tk,th}
                            {--force : override existing files.}';

    protected $description = 'publish language files to resources directory.';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->info('handle publish command');
    }

}
