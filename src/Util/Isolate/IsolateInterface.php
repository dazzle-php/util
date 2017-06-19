<?php

namespace Dazzle\Util\Isolate;

use Dazzle\Throwable\Exception\Runtime\ExecutionException;

interface IsolateInterface
{
    /**
     * Call function using detached isolated process.
     *
     * @param $func
     * @param array $params
     * @return string
     * @throws ExecutionException
     */
    public function call($func, $params = []);
}
