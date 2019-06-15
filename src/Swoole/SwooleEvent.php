<?php
/**
 * Created by PhpStorm.
 * User: zhanghongbo
 * Date: 2019/6/15
 * Time: 下午4:13
 */
namespace SwoftRewrite\Server\Swoole;


final class SwooleEvent
{
    public const STRAT = 'start';
    
    public const SHUTDOWN = 'shutdown';

    public const MANAGER_START = 'manager_start';

    public const MANAGER_STOP = 'manager_start';

    public const WORKER_START = 'worker_start';

    public const WORKER_STOP = 'worker_stop';

    public const WORKER_ERROR = 'worker_error';

    public const REQUEST = 'request';

    public const HANDSHAKE = 'handshake';




    public const LISTENER_MAPPING = [
        self::REQUEST => RequestInterface::class,

        self::HANDSHAKE =>RequestInterface::class,

    ];
}