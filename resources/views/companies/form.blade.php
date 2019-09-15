<div class="container-header">
    <h1 class="title">
        @if($Modo == 'crear')
        @lang('home_companies.cp_add') @lang('home_companies.cp_company')
        @else
        @lang('home_companies.cp_edit') @lang('home_companies.cp_company')
        @endif
    </h1>
</div>
<div class="form-group">
    <label class="control-label" for="name">@lang('home_companies.cp_name'):</label>
    <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ isset($company->name) ? $company->name : old('name') }}">
    {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    <label class="control-label" for="email">@lang('home_companies.cp_email'):</label>
    <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ isset($company->email) ? $company->email : old('email') }}">
    {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    <label class="control-label" for="logo">@lang('home_companies.cp_logo'):</label>
    @if(isset($company->logo))
    <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$company->logo }}" alt="" width="100">
    @endif
    <input class="form-control {{ $errors->has('logo') ? 'is-invalid' : '' }}" type="file" name="logo" id="logo">
    {!! $errors->first('logo', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    <label class="control-label" for="website">@lang('home_companies.cp_website'):</label>
    <input class="form-control {{ $errors->has('website') ? 'is-invalid' : '' }}" type="url" name="website" id="website" value="{{ isset($company->website) ? $company->website : old('website') }}">
    {!! $errors->first('website', '<div class="invalid-feedback">:message</div>') !!}
</div>

<input class="btn btn-success" type="submit" value="@if($Modo == 'crear') @lang('home_companies.cp_add') @else @lang('home_companies.cp_edit') @endif">
<a class="btn btn-primary" href="{{ url('companies') }}">@lang('home_companies.cp_back')</a>