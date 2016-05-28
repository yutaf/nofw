<?php

return [
    ['GET', '/', ['Nhkr\Controllers\Homepage', 'show']],
    ['GET', '/{slug}', ['Nhkr\Controllers\Page', 'show']],
];