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

        foreach ($this->getHooks() as $hook => $expectedResult) {
            add_hook($hook, 1, function ($vars) use ($hook, $expectedResult, $dispatcher, $exception) {
                // We don't want to show errors to the customer so let's catch them and add log entries instead
                try {
                    $result = $dispatcher->dispatch($hook, new WHMCSEvent($vars));

                    if ($result instanceof WHMCSEvent) {
                        $result = $result->getResult();
                    }

                    // @TODO check if dispatcher has returned correct data type using $expectedResult

                    return $result;
                }
                catch (\Exception $e) {
                    $exception->handle($e);
                }
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
            $hooks = array_merge($hooks, $class::getHooks());
        }

        return $hooks;
    }
}
