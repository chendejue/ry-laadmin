<?php

namespace RuiYi\LaAdmin\Form\Extend\FormMedia\Form\Field;

use RuiYi\LaAdmin\Form\Extend\FormMedia\Form\Field;

/**
 * 表单单图字段
 *
 * @create 2020-11-25
 * @author deatil
 */
class Photo extends Field
{
    protected $limit = 1;

    protected $remove = false;

    protected $type = 'image';
}
