<?php
require(__DIR__ . "/../vendor/autoload.php");
main();

function main()
{
    $c = new \GearmanTest\Worker;
    $c->run();
}
