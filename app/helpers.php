<?php

if (!function_exists('linkActiveClass')) {
    function linkActiveClass($segment){
        $segments = is_array($segment) ? $segment : func_get_args();
        return (array_intersect($segments, request()->segments())) ? 'active' : '';
    }
}

if (!function_exists('linkMenuOpen')) {
    function linkMenuOpen($segment){
        $segments = is_array($segment) ? $segment : func_get_args();
        return (array_intersect($segments, request()->segments())) ? 'menu-open' : '';
    }
}
