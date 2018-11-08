<?php

namespace SuHyMeBlaS;

class View
{
    private static $path;

    public static function config($path)
    {
        self::$path = $path;
    }

    public static function render(string $file, array $data = [])
    {
        extract($data);

        ob_start();
        include self::$path . $file . '.tpl.php';
        $template = ob_get_contents();
        ob_end_clean();

        return $template;
    }
}
