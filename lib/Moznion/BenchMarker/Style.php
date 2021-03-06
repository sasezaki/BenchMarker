<?php

namespace Moznion\BenchMarker;

abstract class Style {
    protected $format;

    public function __construct($format) {
        $this->$format = $format;
    }

    /**
     * @param $style
     * @param $format
     * @return Style
     */
    public static function createStyle ($style, $format) {
        $class = "\\Moznion\\BenchMarker\\Style\\" . ucfirst($style);
        if (!class_exists($class)) {
            die("Style is not supported ($style)");
        }

        return new $class($format);
    }

    abstract public function say ($str);
    abstract public function spewTimeString(
        $real_time,
        $user_time,
        $sys_time,
        $child_user_time,
        $child_sys_time,
        $all_cpu_time,
        $parent_cpu_time,
        $child_cpu_time
    );
}

