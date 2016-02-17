<?php

namespace Chernoff\Events;

use Symfony\Component\EventDispatcher\Event;

/**
 * Class WHMCSEvent
 * @package Chernoff\Events
 */
class WHMCSEvent extends Event
{
    /** @var mixed */
    protected $vars;

    /**
     * @param $vars
     */
    public function __construct($vars)
    {
        $this->vars = $vars;
    }

    /**
     * @return mixed
     */
    public function getVars()
    {
        return $this->vars;
    }

    /**
     * @param $vars
     * @return $this
     */
    public function setVars($vars)
    {
        $this->vars = $vars;

        return $this;
    }
}
