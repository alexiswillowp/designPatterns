<?php

class ObserverB implements \SplObserver
{

    public function update(SplSubject $subject): void
    {
        if($subject->state == 0 || $subject->state <= 2){
            echo ("observer b noticed state was smol, will now do a jig.<br>");
        }
    }
}