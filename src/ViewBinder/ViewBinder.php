<?php

namespace Lchhieu\PushView\ViewBinder;

interface ViewBinder
{
    /**
     * Bind the JavaScript variables to the view.
     *
     * @param string $js
     */
    public function bind($js);
}