<?php
/**
 * Created by PhpStorm.
 * User: zhanghongbo
 * Date: 2019/6/15
 * Time: 下午4:36
 */

namespace SwoftRewrite\Server\Swoole;


use Swoole\Http\Request;
use Swoole\Http\Response;

interface RequestInterface
{
    public function onRequest(Request $request,Response $response): void;
}