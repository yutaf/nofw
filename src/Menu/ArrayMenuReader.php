<?php

namespace Nhkr\Menu;

class ArrayMenuReader implements MenuReader
{
    public function readMenu()
    {
        return [
            ['href' => '/', 'text' => 'Homepage'],
        ];
    }
}