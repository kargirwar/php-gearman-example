<?php
require(__DIR__ . "/../vendor/autoload.php");
main();

function main()
{
    $c = new \GearmanTest\Client;
    $c->run("user1@example.com");
    $c->run("user2@example.com");
    $c->run("user3@example.com");
}
