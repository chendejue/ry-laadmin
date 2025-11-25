<?php

namespace RuiYi\LaAdmin\Form\Extend\FormMedia\Form\Field;

use RuiYi\LaAdmin\Form\Extend\FormMedia\Form\Field;
use RuiYi\LaAdmin\Form\Extend\FormMedia\Form\FieldIconimg;
/**
 * 表单图标字段
 *
 * @create 2020-11-25
 * @author deatil
 */
class Iconimg extends FieldIconimg
{
    protected $limit = 1;

    protected $remove = false;

    protected $type = 'image';
}
