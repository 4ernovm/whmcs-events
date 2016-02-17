<?php

namespace Chernoff\Events;

use Chernoff\Container\ServiceProvider as BaseProvider;
use Chernoff\Foundation\ExceptionHandler;

use Symfony\Component\EventDispatcher\EventDispatcher;

/**
 * Class ServiceProvider
 * @package Chernoff\Events
 */
class ServiceProvider extends BaseProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton("dispatcher", function() { return new EventDispatcher; });
        $this->app->alias("dispatcher", 'Symfony\Component\EventDispatcher\EventDispatcher');
    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        /** @var EventDispatcher $dispatcher */
        $dispatcher = $this->app->make("dispatcher");
        /** @var ExceptionHandler $exception */
        $exception  = $this->app->make("exception_handler");

        foreach ($this->getHooks() as $hook) {
            add_hook($hook, 1, function ($vars) use ($hook, $dispatcher, $exception) {
                // We don't want to show errors to the customer so let's catch them and add log entries instead
                try {
                    return $dispatcher->dispatch($hook, new WHMCSEvent($vars));
                }
                catch (\Exception $e) {
                    $exception->handle($e);
                }

                return $vars;
            });
        }
    }

    /**
     * @return array
     */
    public function provides()
    {
        return array("dispatcher");
    }

    /**
     * Returns list of hooks available in WHMCS
     *
     * @return array
     */
    protected function getHooks()
    {
        $hooks   = [];
        $classes = [
            'Chernoff\Events\Hooks\Addon',
            'Chernoff\Events\Hooks\Authentication',
            'Chernoff\Events\Hooks\Client',
            'Chernoff\Events\Hooks\ClientAreaInterface',
            'Chernoff\Events\Hooks\Contact',
            'Chernoff\Events\Hooks\Cron',
            'Chernoff\Events\Hooks\Domain',
            'Chernoff\Events\Hooks\Invoice',
            'Chernoff\Events\Hooks\Miscellaneous',
            'Chernoff\Events\Hooks\Module',
            'Chernoff\Events\Hooks\Output',
            'Chernoff\Events\Hooks\Product',
            'Chernoff\Events\Hooks\RegistrarModule',
            'Chernoff\Events\Hooks\Service',
            'Chernoff\Events\Hooks\ShoppingCart',
            'Chernoff\Events\Hooks\SupportTools',
            'Chernoff\Events\Hooks\Ticket',
        ];

        foreach ($classes as $class) {
            $reflection = new \ReflectionClass($class);
            $hooks      = array_merge($hooks, $reflection->getConstants());
        }
        
        return $hooks;
    }
}
