@extends('layouts.app')

@section('content')
<div class="container">

    @if(Session::has('Message'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('Message') }}
    </div>
    @endif
    <div class="container-header d-flex mb-2" style="align-items: center">
        <h1>@lang('home_employees.em_employees')</h1>
        <a class="btn btn-success ml-auto" href="{{ url('employees/create') }}">@lang('home_companies.cp_add')</a>
    </div>
    <table class="table table-light table-hover">

        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>@lang('home_employees.em_name')</th>
                <th>@lang('home_companies.cp_company')</th>
                <th>@lang('home_employees.em_email')</th>
                <th>@lang('home_employees.em_phone')</th>
                <th>@lang('home_companies.cp_actions')</th>
            </tr>
        </thead>

        <tbody>
            @foreach($employees as $employ)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $employ->first_name }} {{ $employ->last_name }}</td>
                @foreach($companies as $company)
                @if($company['id'] == $employ->company)
                <td>{{ $company['name'] }}</td>
                @endif
                @endforeach
                <td><a href="mailto:{{ $employ->email }}">{{ $employ->email }}</a></td>
                <td>{{ $employ->phone }}</td>
                <td class="d-flex">
                    <a class="btn btn-warning mr-2" href="{{ url('/employees/'.$employ->id.'/edit') }}">@lang('home_companies.cp_edit')</a>
                    <form action="{{ url('/employees/'.$employ->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-danger" type="submit" onclick="return confirm('¿Delete?')">@lang('home_companies.cp_delete')</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

    {{ $employees->links() }}

</div>
@endsection