@extends('app')

@section('contents')
    <div class="p-about-us">
        @include('sections.showcase.about-us')
        @include('sections.company-information.index')
        @include('sections.faq.index')
    </div>
@endsection
