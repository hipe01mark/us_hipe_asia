@extends('app')

@section('contents')
    <div class="p-services">
        @include('sections.showcase.services')
        @include('sections.offshore-development.index')
        @include('sections.projects.index')
        @include('sections.product.index')
        @include('sections.price-list.index')
        @include('sections.development-process.index')
        @include('sections.faq.index')
    </div>
@endsection
