@extends('cms.template.app')

@section('custom-css')
@endsection

@section('content')
    <div class="container" style="padding-top: 100px;">
        <form action="/wehea/register" method="post">
            @csrf
            <button type="submit">Join Wehea</button>
        </form>
        <a href="/wehea/info">View Info</a>
    </div>
@endsection

@section('custom-js')
@endsection
