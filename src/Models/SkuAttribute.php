<?php

namespace RuiYi\LaAdmin\Models;

use RuiYi\LaAdmin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;

class SkuAttribute extends Model
{
    use HasDateTimeFormatter;

    public  $table = 'sku_attribute';
    public  $guarded = [];
    public static $attrType = [
        'radio' => '单选',
        'checkbox' => '多选',
    ];

    protected $casts = [
        'attr_value' => 'json'
    ];
}
