<?php

namespace RuiYi\LaAdmin\Form\Field;

use RuiYi\LaAdmin\Admin;
use RuiYi\LaAdmin\Models\SkuAttribute;
use RuiYi\LaAdmin\Form\Field;
use RuiYi\LaAdmin\Widgets\Modal;
use RuiYi\LaAdmin\Http\Renderable\SkuAttributesTable;
use RuiYi\LaAdmin\Http\Forms\AddSkuAttrFrom;
class SkuField extends Field
{
    protected $view = 'admin::form.extend.sku.sku';
    public static $js = [
        '@moment',
        '@goods-sku',
    ];

    public static $css = [
        '@goods-sku'
    ];

    public function render()
    {
        $uploadUrl = admin_setting('sku_plus_img_upload_url') ?: '/admin/sku-image-upload';
        $deleteUrl = admin_setting('sku_plus_img_remove_url') ?: '/admin/sku-image-remove';
        $skuAttributes = SkuAttribute::orderBy('sort', 'desc')->get();
        $manageSkuAttrModal = $this->manageSkuAttrModal();
        $addSkuAttrFrom = $this->addSkuAttrModal();
        $this->script = <<< EOF
        window.DemoSku = new JadeKunSKU('{$this->getElementClassSelector()}');
EOF;
        $this->addVariables(compact('skuAttributes','manageSkuAttrModal','addSkuAttrFrom', 'uploadUrl', 'deleteUrl'));

        return parent::render();
    }

    public function manageSkuAttrModal(){
        $title = '<button type="button" class="btn btn-info btn-sm">管理规格</button>';
        $modal = Modal::make();
        $modal->staticBackdrop();
        $modal->title('管理规格');
        $modal->xl();
        $modal->body(SkuAttributesTable::make());
        $modal->button($title);
        return $modal->render();
    }

    public function addSkuAttrModal(){
        $title = '<button type="button" class="btn btn-success btn-sm">添加规格</button>';
        $modal = Modal::make();
        $modal->staticBackdrop();
        $modal->title('添加规格');
        $modal->lg();
        $modal->body(AddSkuAttrFrom::make());
        $modal->button($title);
        return $modal->render();
    }

    /**
     * 添加扩展列.
     *
     * @param  array  $column
     * @return $this
     */
    public function addColumn(array $column = []): self
    {
        $this->addVariables(['extra_column' => json_encode($column)]);

        return $this;
    }
}
