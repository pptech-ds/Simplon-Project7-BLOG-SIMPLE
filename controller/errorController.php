<?php

function error($e)
{
    require dirname(__DIR__) . 'view/error/error' . $e->getMessage() . '.php';
}