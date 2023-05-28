<?php

class ObserverA implements \SplObserver
{

    public function update(SplSubject $subject): void
    {
        if($subject->state >3){
            echo ("observer A noticed state was above three, now it's gonna do a dance.<br>");
        }
    }
}