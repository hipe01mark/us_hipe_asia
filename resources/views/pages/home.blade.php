@extends('app')

@section('contents')
    <div class="p-home">
        @include('sections.showcase.index')
        @include('sections.clients-insight.index')
    </div>
@endsection
