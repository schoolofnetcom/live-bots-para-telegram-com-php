<?php

namespace Telegram;

use SuHyMeBlaS\Collection;

class Router implements \ArrayAccess
{
    use Collection;

    public function handler($path, $data)
    {
        foreach ($this->getArray() as $route => $handler) {
            $route = '/^' . str_replace('/', '\/', $route) . '$/';
            if (preg_match($route, $path, $params)) {
                return $handler($data, $params);
            }
        }

        if ($this->offsetExists('default_action')) {
            $handler = $this->offsetGet("default_action");
            return $handler($data, $params);
        }
    }
}
