<div class="container-header">
    <h1 class="title">
        @if($Modo == 'crear')
        @lang('home_companies.cp_add') @lang('home_employees.em_employee')
        @else
        @lang('home_companies.cp_edit') @lang('home_employees.em_employee')
        @endif
    </h1>
</div>
<div class="form-group">
    <label class="control-label" for="first_name">@lang('home_employees.em_name'):</label>
    <input class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" type=" text" name="first_name" id="first_name" value="{{ isset($employee->first_name) ? $employee->first_name : old('first_name') }}">
    {!! $errors->first('first_name', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    <label class="control-label" for=" last_name">@lang('home_employees.em_lastname'):</label>
    <input class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}" type="last_name" name="last_name" id="last_name" value="{{ isset($employee->last_name) ? $employee->last_name : old('last_name') }}">
    {!! $errors->first('last_name', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    <label class="control-label" for="company">@lang('home_companies.cp_company'):</label>
    <select class="form-control {{ $errors->has('company') ? 'is-invalid' : '' }}" name="company" id="company">
        @if(isset($companies) && isset($employee))
        @foreach ($companies as $company)
        @if($company['id'] == $employee->company)
        <option value="{{$company['id']}}" selected>{{$company['name']}}</option>
        @else
        <option value="{{$company['id']}}">{{$company['name']}}</option>
        @endif
        @endforeach
        <option value="">@lang('home_employees.em_company')</option>
        @else
        <option value="">@lang('home_employees.em_company')</option>
        @foreach ($companies as $company)
        <option value="{{$company['id']}}">{{$company['name']}}</option>
        @endforeach
        @endif
    </select>
    {!! $errors->first('company', '<div class="invalid-feedback">:message</div>') !!}
    <!-- <input class="form-control" type="company" name="company" id="company" value="{{ isset($employee->company) ? $employee->company : '' }}"> -->
</div>
<div class="form-group">
    <label class="control-label" for="email">@lang('home_employees.em_email'):</label>
    <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ isset($employee->email) ? $employee->email : old('email') }}">
    {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    <label class="control-label" for="phone">@lang('home_employees.em_phone'):</label>
    <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="phone" name="phone" id="phone" value="{{ isset($employee->phone) ? $employee->phone : old('phone') }}">
    {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="div-actions">
    <input class="btn btn-success" type="submit" value="@if($Modo == 'crear') @lang('home_companies.cp_add') @else @lang('home_companies.cp_edit') @endif">
    <a class="btn btn-primary" href="{{ url('employees') }}">@lang('home_companies.cp_back')</a>
</div>