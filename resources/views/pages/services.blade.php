@extends('app')

@section('contents')
    <div class="p-services">
        @include('sections.showcase.services')
        @include('sections.offshore-development.index')
        @include('sections.faq.index')
    </div>
@endsection
