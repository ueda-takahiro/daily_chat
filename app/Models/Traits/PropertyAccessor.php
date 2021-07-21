<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Model;

trait PropertyAccessor
{
    /**
     * テーブル名取得Trait
     *
     * @return string|null
     */
    public static function table(): ?string
    {
        static $name;

        if (!empty($name)) return $name;

        $model = new static;
        if (!$model instanceof Model) return null;

        return $model->getTable();
    }
}
