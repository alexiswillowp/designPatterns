<?php
//include("/Users/alexisp/MyStuff/designPatterns/Observer");
include("Subject.php");
include("ObserverB.php");
include("ObserverA.php");

$subject = new Subject();
$oA = new ObserverA();
$oB = new ObserverB();

$subject->attach($oA);
$subject->attach($oB);

$subject->doinAthing();
$subject->doinAthing();

$subject->detach($oB);

$subject->doinAthing();
?>