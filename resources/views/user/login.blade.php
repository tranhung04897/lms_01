@extends('layout.publiclayout')
@section('content')
    <div class="container product_section_container">
        <div class="row">
            <div class="container">
                {!! Form::open(['method' => 'post', 'route' => 'login.store', 'class' => 'login']) !!}
                <p class="lead">@lang('auth.title')</p>
                @include('errors.error')
                <div class="form-group">
                    {!! Form::text('log_username', '', ['class' =>'required form-control', 'placeholder' => trans('auth.username')]) !!}
                </div>
                <div class="form-group">
                    {!! Form::password('log_password', ['class' =>'password required form-control', 'placeholder' => trans('auth.password')]) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit(trans('auth.login'), ['class' => 'btn btn-primary btn-lg1 btn-block']) !!}
                </div>
                <p>@lang('auth.linkregister') <a href="{{route('register.index')}}" title='@lang('auth.register')' >@lang('auth.register')</a></p>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
