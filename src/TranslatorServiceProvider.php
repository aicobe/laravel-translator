<?php

namespace Aicobe\LaravelTranslator;

use Aicobe\LaravelTranslator\Commnads\Publish;
use Illuminate\Translation\TranslationServiceProvider;

class TranslatorServiceProvider extends TranslationServiceProvider
{

    public function register()
    {
        parent::register();

        $this->registerCommands();
    }

    /**
     * Register translation laoder.
     *
     * @return void
     */
    public function registerLoader()
    {

        $this->app->singleton('translation.loader', function ($app) {
            $path = base_path('vendor/caouecs/laravel-lang/src/');
            $translationLoader = new FileLoader($app['files'], $app['path.lang'], (array) $path);
            if (\method_exists($translationLoader, 'addJsonPath')) {
                $translationLoader->addJsonPath(base_path('vendor/caouecs/laravel-lang/json/'));
            }
            return $translationLoader;
        });
    }

    protected function registerCommands()
    {
        $this->commands(Publish::class);
    }
}
