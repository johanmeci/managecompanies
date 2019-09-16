@extends('layouts.app')

@section('content')
<div class="container-edit">

    <form class="form-horizontal" action="{{ url('/employees/'.$employee->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        @include('employees.form', ['Modo' => 'editar'])
    </form>

</div>
@endsection