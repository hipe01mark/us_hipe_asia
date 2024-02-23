@extends('app')

@section('contents')
    <div class="p-home">
        @include('sections.showcase.index')
        @include('sections.articles.index')
        @include('sections.clients-insight.index')
        @include('sections.services.index')
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
