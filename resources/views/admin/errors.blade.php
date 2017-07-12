@extends('admin.main')
@section('admin_errors')

@if(count($adminError) > 0)
    <div class="alert alert-danger">
        @foreach($adminError as $err)
            <p>{{$err}}</p>
        @endforeach
    </div>
@endif

@endsection