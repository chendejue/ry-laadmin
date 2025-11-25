<?php
namespace RuiYi\LaAdmin\Form\Extend\Sku;

use RuiYi\LaAdmin\Admin;
use RuiYi\LaAdmin\Actions\Action;
use RuiYi\LaAdmin\Models\SkuAttribute;
use RuiYi\LaAdmin\Grid\RowAction;
use Illuminate\Http\Request;

class DelSkuAttrAction extends RowAction
{

    protected $title = '删除';

    public function handle(Request $request)
    {
        // 获取当前行ID
        $id = $this->getKey();
        SkuAttribute::where(['id'=> $id])->delete();
        return $this->response()->success('删除成功')->refresh();
    }

    /**
     * 确认弹窗信息，如不需要可以删除此方法
     *
     * @return string|void
     */
    public function confirm()
    {
        return ['确认要删除吗?', '删除后不可恢复'];
    }
}
