<?php

namespace Nhkr\Page;

interface PageReader
{
    public function readBySlug($slug);
}