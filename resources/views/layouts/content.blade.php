@section('content-header')
    <section class="content-header breadcrumbs-top">
        @if($header || $description)
            <h1 class=" float-left">
                <span class="text-capitalize">{!! $header !!}</span>
                <small>{!! $description !!}</small>
            </h1>
        @elseif($breadcrumb || config('admin.enable_default_breadcrumb'))
            <div>&nbsp;</div>
        @endif

        @include('admin::partials.breadcrumb')

    </section>
@endsection

@section('content')
    @include('admin::partials.alerts')
    @include('admin::partials.exception')

    {!! $content !!}

    @include('admin::partials.toastr')
@endsection

@section('app')
    {!! RuiYi\LaAdmin\Admin::asset()->styleToHtml() !!}

    <div class="content-header">
        @yield('content-header')
    </div>

    <div class="content-body" id="app">
        {{-- 页面埋点--}}
        {!! admin_section(RuiYi\LaAdmin\Admin::SECTION['APP_INNER_BEFORE']) !!}

        @yield('content')

        {{-- 页面埋点--}}
        {!! admin_section(RuiYi\LaAdmin\Admin::SECTION['APP_INNER_AFTER']) !!}
    </div>

    {!! RuiYi\LaAdmin\Admin::asset()->scriptToHtml() !!}
    <div class="extra-html">{!! RuiYi\LaAdmin\Admin::html() !!}</div>
@endsection

@if(! request()->pjax())
    @include('admin::layouts.page')
@else
    <title>{{ RuiYi\LaAdmin\Admin::title() }} @if($header) | {{ $header }}@endif</title>

    <script>Dcat.wait()</script>

    {!! RuiYi\LaAdmin\Admin::asset()->cssToHtml() !!}
    {!! RuiYi\LaAdmin\Admin::asset()->jsToHtml() !!}

    @yield('app')
@endif
