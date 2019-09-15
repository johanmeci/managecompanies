@extends('layouts.app')

@section('content')
<div class="container">
    
    <form action="{{ url('/companies/'.$company->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        @include('companies.form', ['Modo' => 'editar'])
    </form>

</div>
@endsection