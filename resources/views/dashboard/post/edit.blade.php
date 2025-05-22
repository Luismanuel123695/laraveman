@extends('dashboard.master')

@section('content')

@include('dashboard.fragment._error_form')


    <form action="{{ route('post.update' , $post->id) }}" method="post">

        @method('PATCH')
        @include('dashboard.post._form')


    </form>
@endsection