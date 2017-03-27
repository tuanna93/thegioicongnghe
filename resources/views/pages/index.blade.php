@extends('master')
@section('keywords',isset($keywords) ? $keywords : \App\Helpers\Helpers::page_get_option('keywords'))
@section('description',isset($description) ? $description : \App\Helpers\Helpers::page_get_option('description'))
@section('title',isset($title) ? $title : \App\Helpers\Helpers::page_get_option('title'))
@section('content')

    @include('widgets.main.pages.index')

    @include('widgets.main.adv')

    @include('widgets.main.hotsale')

    @include('widgets.main.tab_product')

    @include('widgets.main.info')

    @include('widgets.main.sale')

@endsection