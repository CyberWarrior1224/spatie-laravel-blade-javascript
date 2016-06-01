<?php

namespace Spatie\BladeJavaScript\Transformers;

use Spatie\BladeJavaScript\Transformer;

class PhpNull implements Transformer
{
    public function canTransform($value): bool
    {
        return is_null($value);
    }

    /**
     * @param $value
     * @return string
     */
    public function transform($value): string
    {
        return 'null';
    }
}
