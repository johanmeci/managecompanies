@extends('layouts.app')

@section('content')
<div class="container">

    <form action="{{url('/employees')}}" method="post">
        {{ csrf_field() }}
        @include('employees.form', ['Modo' => 'crear'])
    </form>

</div>
@endsection