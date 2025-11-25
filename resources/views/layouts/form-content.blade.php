<script>Dcat.wait();</script>

<style>
    .form-content .row {
        margin-right: 0;
        margin-left: 0;
    }
</style>

{{--必须在静态资源加载前，用section先渲染 content--}}
@section('content')
    <section class="form-content">{!! $content !!}</section>
@endsection

{!! RuiYi\LaAdmin\Admin::asset()->cssToHtml() !!}
{!! RuiYi\LaAdmin\Admin::asset()->jsToHtml() !!}

{!! RuiYi\LaAdmin\Admin::asset()->styleToHtml() !!}

@yield('content')

{!! RuiYi\LaAdmin\Admin::asset()->scriptToHtml() !!}
<div class="extra-html">{!! RuiYi\LaAdmin\Admin::html() !!}</div>

{{--select2下拉选框z-index必须大于弹窗的值--}}
<style>.select2-dropdown {z-index: 99999999999}</style>
