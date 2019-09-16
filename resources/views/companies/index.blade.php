@extends('layouts.app')

@section('title', 'app-companies')

@section('content')
<div class="container">

    @if(Session::has('Message'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('Message') }}
    </div>
    @endif
    <div class="container-header d-flex mb-2" style="align-items: center">
        <h1 class="title">@lang('home_companies.cp_companies')</h1>
        <a class="btn btn-success ml-auto" href="{{ url('companies/create') }}">@lang('home_companies.cp_add')</a>
    </div>
    <div class="container-body">
        <table class="table table-light table-hover">

            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Logo</th>
                    <th>@lang('home_companies.cp_name')</th>
                    <th>@lang('home_companies.cp_email')</th>
                    <th>@lang('home_companies.cp_website')</th>
                    <th>@lang('home_companies.cp_actions')</th>
                </tr>
            </thead>

            <tbody>
                @foreach($companies as $company)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$company->logo }}" alt="" width="50">
                    </td>
                    <td>{{ $company->name }}</td>
                    <td><a href="mailto:{{ $company->email }}">{{ $company->email }}</a></td>
                    <td><a href="{{ $company->website }}" target="_blank">{{ $company->website }}</a></td>
                    <td class="d-flex">
                        <a class="btn btn-warning mr-2" href="{{ url('/companies/'.$company->id.'/edit') }}">@lang('home_companies.cp_edit')</a>
                        <form action="{{ url('/companies/'.$company->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Delete?')">@lang('home_companies.cp_delete')</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    {{ $companies->links() }}

</div>
@endsection