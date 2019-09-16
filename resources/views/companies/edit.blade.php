@extends('layouts.app')

@section('content')
<div class="container-edit">

    <form class="form-horizontal" action="{{ url('/companies/'.$company->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        @include('companies.form', ['Modo' => 'editar'])
    </form>

</div>
@endsection