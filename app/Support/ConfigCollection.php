<?php

namespace App\Support;

use Illuminate\Database\Eloquent\Collection;

class ConfigCollection extends Collection
{
    public function getAssoc()
    {
        $config = $this->reduce(function ($carry = [], $value) {
            $carry[$value->name] = $value->value;
            return $carry;
        });

        return collect($config);
    }
}
