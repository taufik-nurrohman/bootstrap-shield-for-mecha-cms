<?php

Widget::add('tagLinks', function($connector = ', ') {
    $config = Config::get();
    $speak = Config::speak();
    $links = array();
    $source = $config->article->tags;
    if( ! isset($source) || ! is_object($source)) return "";
    foreach($source as $tag) {
        if($tag && $tag->id !== 0) {
            $links[] = '<a href="' . $config->url . '/' . $config->tag->slug . '/' . $tag->slug . '" rel="tag">' . $tag->name . '</a>';
        }
    }
    return ! empty($links) ? $speak->tags . ': ' . implode($connector, $links) : "";
});

Config::set(array(
    'speak.older' => $speak->older . ' <i class="fa fa-angle-right"></i>',
    'speak.newer' => '<i class="fa fa-angle-left"></i> ' . $speak->newer
));

Filter::add('navigation:list', function($str) {
    return preg_replace(
        array(
            '#^<ul>#',
            '# class="selected"#'
        ),
        array(
            '<ul class="nav navbar-nav">',
            ' class="active"'
        ),
    $str);
});

Menu::configure('classes', array(
    'children' => 'navbar-nav-submenu navbar-nav-submenu-%s'
));