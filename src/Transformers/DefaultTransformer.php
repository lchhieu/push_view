<?php

namespace Lchhieu\PushView\Transformers;

class DefaultTransformer
{
    public function transform($value)
    {
        return json_encode($value);
    }
}
