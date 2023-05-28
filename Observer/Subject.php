<?php

class Subject implements \SplSubject
{
    //subjects state, simplified to an int here
    public $state;

    //list of observers
    private $observers;
    // (usually categorized by which type of events they want to listen for, but not here)

    public function __construct(){
        $this->observers = new \SplObjectStorage();
        //a map of objects to data, or an object set
    }

    public function attach(SplObserver $observer): void
    {
        echo ("Subject attached to an observer.<br>");
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
        echo ("Subject detached from observer.<br>");
    }

    public function notify(): void
    {
        echo ("Notification: HEWWO WORLD <br>");
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function doinAthing(){
        echo ("Subject is doin' a thing... <br>");
        $this->state = rand(0, 10);

        echo("Subject randomized te state - uwu so random {$this->state}<br>");
        $this->notify();
    }
}