@extends('layout.publiclayout')
@section('content')
    <div class="container product_section_container">
        <div class="row">
            <div class="container">
                {!! Form::open(['method' => 'post', 'route' => 'register.store', 'class' => 'login']) !!}
                <p class="lead">@lang('auth.title')</p>
                @include('errors.error')
                <div class="form-group">
                    {!! Form::email('email', '', ['class' =>'required form-control', 'placeholder' => trans('auth.email')]) !!}
                </div>
                <div class="form-group">
                    {!! Form::password('password', ['class' =>'password required form-control', 'placeholder' => trans('auth.password')]) !!}
                </div>
                <div class="form-group">
                    {!! Form::password('password_confirmation', ['class' => 'password required form-control', 'id' => 'password-confirm', 'placeholder' => trans('auth.repassword')]) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('name', '',['class' =>'required form-control', 'placeholder' => trans('auth.fullname')]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('gender', trans('user.lb-gender'), ['class' => 'col-md-4 col-form-label']) !!}
                    {!! Form::select('gender', ['0' => trans('user.select-female'), '1' => trans('user.select-male')]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('dob', trans('user.lb-dob'), ['class' => 'col-md-4 col-form-label']) !!}
                    {!! Form::date('dob', \Carbon\Carbon::now(), ['class' => 'form-control ']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('address', trans('user.lb-address'), ['class' => 'col-md-4 col-form-label']) !!}
                    {!! Form::text('address', '', ['class' => 'form-control ']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('phone', trans('user.lb-phone'), ['class' => 'col-md-4 col-form-label']) !!}
                    {!! Form::text('phone', '', ['class' => 'form-control ']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit(trans('auth.register'), ['class' => 'btn btn-primary btn-lg1 btn-block']) !!}
                </div>
                <p>@lang('auth.linklogin') <a href="{{route('login.index')}}" title='@lang('auth.login')' >@lang('auth.login')</a></p>
                {!! Form::close() !!}
            </div>
        </div>
@endsection
