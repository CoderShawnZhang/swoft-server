<?php
/**
 * Created by PhpStorm.
 * User: zhanghongbo
 * Date: 2019/6/15
 * Time: 下午3:32
 */

namespace SwoftRewrite\Server\Contract;

interface ServerInterface
{
    public const MODE_LIST = [
        SWOOLE_BASE => 'Base',
        SWOOLE_PROCESS => 'Process',
    ];

    public const TYPE_LIST = [
        SWOOLE_SOCK_TCP => 'TCP',
        SWOOLE_SOCK_TCP6 => 'TCP6',
        SWOOLE_SOCK_UDP => 'UDP',
        SWOOLE_SOCK_UDP6 => 'UPD6',
        SWOOLE_SOCK_UNIX_DGRAM => 'UNIX DGRAM',
        SWOOLE_SOCK_UNIX_STREAM => 'UNIX STREAM',
    ];

    public function start(): void;

    public function stop(): void;

    public function restart(): void;


    public function getHost(): string;

    public function getPort(): int;

    public function getMode(): int;

    public function getType(): int;

    public function getSetting(): array;

    public function getOn(): array;

    public function getListener(): array;

    public function getTypeName(): string;
}