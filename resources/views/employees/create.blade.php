@extends('layouts.app')

@section('content')
<div class="container-create">

    <form class="form-horizontal" action="{{url('/employees')}}" method="post">
        {{ csrf_field() }}
        @include('employees.form', ['Modo' => 'crear'])
    </form>

</div>
@endsection