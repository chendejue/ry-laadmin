<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge">
    {{-- 默认使用谷歌浏览器内核--}}
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>@if(! empty($header)){{ $header }} | @endif {{ RuiYi\LaAdmin\Admin::title() }}</title>

    @if(! config('admin.disable_no_referrer_meta'))
        <meta name="referrer" content="no-referrer"/>
    @endif

    @if(! empty($favicon = RuiYi\LaAdmin\Admin::favicon()))
        <link rel="shortcut icon" href="{{ $favicon }}">
    @endif

    {!! admin_section(RuiYi\LaAdmin\Admin::SECTION['HEAD']) !!}

    {!! RuiYi\LaAdmin\Admin::asset()->headerJsToHtml() !!}

    {!! RuiYi\LaAdmin\Admin::asset()->cssToHtml() !!}
</head>

@extends('admin::layouts.container')
