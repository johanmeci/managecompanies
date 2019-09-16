@extends('layouts.app')

@section('content')
<div class="container-create">
    
    <form class="form-horizontal" action="{{url('/companies')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('companies.form', ['Modo' => 'crear'])
    </form>

</div>
@endsection