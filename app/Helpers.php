<?php

function image_upload($path)
{
    $path = explode('-', $path);

    return @(url('/') . "/image/uploads/" . $path[0] .'/' . $path[1]);
}