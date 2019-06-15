<?php
/**
 * 所有 Swoole 服务器基类
 */

namespace SwoftRewrite\Server;

use SwoftRewrite\Server\Contract\ServerInterface;

abstract class Server implements ServerInterface
{
    protected $setting = [];

    public function __construct()
    {
        $this->setting = $this->defaultSetting();
    }


    protected function defaultSetting(): array
    {
        return [
            'deamonize' => 0,
            'worker_num' => 1,
            //if >0 ,must listen event:task,finish
            'task_worker_num' => 0
        ];
    }
}