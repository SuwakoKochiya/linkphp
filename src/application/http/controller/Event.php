<?php

// +----------------------------------------------------------------------
// | LinkPHP [ Link All Thing ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 http://linkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liugene <liujun2199@vip.qq.com>
// +----------------------------------------------------------------------
// |               配置类
// +----------------------------------------------------------------------
namespace app\http\controller;

use linkphp\event\EventDefinition;
use linkphp\event\EventServerProvider;

class Event implements EventServerProvider
{
    public function update(EventDefinition $definition)
    {
        dump(2);
        return $definition;
        // TODO: Implement update() method.
    }
}