<?php

namespace Benchmarker\Style;

use \Benchmarker\Style as Style;

class All extends Style {
    use TimeString;

    public function say ($str) {
        print $str;
    }

    public function spewTimeString(
        $real_time,
        $user_time,
        $sys_time,
        $child_user_time,
        $child_sys_time,
        $all_cpu_time,
        $parent_cpu_time,
        $child_cpu_time
    ) {
        return $this->spewAllTimeString(
            $real_time,
            $user_time,
            $sys_time,
            $child_user_time,
            $child_sys_time,
            $all_cpu_time
        );
    }
}
