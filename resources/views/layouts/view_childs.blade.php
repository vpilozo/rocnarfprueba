@extends('layouts.view_plantilla')

@section('title')
@isset($title)
@include('layouts.view_title',['title'=>$titulo])
@endisset
@endsection

@section('menu')
@include('layouts.view_menu')
@endsection

@section('slider')
@isset($slider)
@include('layouts.view_slider')
@endisset
@endsection

@section('detalle')
@isset($detalle)
@include('producto.view_detalle',['producto'=>$producto])
@endisset
@endsection

@section('categorias')
@isset($imgCategorias)
@include('layouts.view_categorias', ['imgCategorias' => $imgCategorias])
@endisset
@endsection

@section('productos_')
@if(isset($productos) && count($productos) > 0)
@include('layouts.view_productos', ['productos' => $productos])
@endif
@endsection


@section('banner1')
@isset($banner1)
@include('layouts.view_banner1')
@endisset
@endsection

@section('banner2')
@isset($banner2)
@include('layouts.view_banner2')
@endisset
@endsection

@section('footer')
@include('layouts.view_footer')
@endsection