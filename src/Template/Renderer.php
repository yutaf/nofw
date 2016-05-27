<?php

namespace Nhkr\Template;

interface Renderer
{
    public function render($template, $data = []);
}