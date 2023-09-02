@extends('cms.template.app')

@section('custom-css')
@endsection

@section('content')
    <div class="container" style="marin-top: 100px;">
        <form action="/wehea/register" method="post">
            <button type="submit">Join Wehea</button>
        </form>
    </div>
@endsection

@section('custom-js')
@endsection
