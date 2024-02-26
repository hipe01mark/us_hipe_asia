@extends('app')

@section('contents')
    <div class="p-home">
        @include('sections.showcase.home')
        @include('sections.articles.index')
        @include('sections.clients-insight.index')
        @include('sections.services.index')
        @include('sections.benefits.index')
        @include('sections.companies.index')
    </div>
@endsection

@section('custom-scripts')
    <script>
        window.addEventListener('load', () => {
            setTimeout(() => {
                ClientControllerInstance.initSwiper();
            }, 1);
        });
    </script>
@endsection
