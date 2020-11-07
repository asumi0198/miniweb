<?php


namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait HasUuid
{
    protected static function booted()
    {
        static::creating(function (Model $model) {
            $model->{$model->getKeyName()} = $model->{$model->getKeyName()} ?: (string) self::generateUuid();
        });
    }

    protected static function generateUuid()
    {
        return Str::of(Str::uuid()->toString())->replace('-', '');
    }
}
