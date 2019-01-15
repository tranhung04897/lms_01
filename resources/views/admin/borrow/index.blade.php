@extends('layout.adlayout')

@section('content')
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="table-responsive">
                    <div class="row">
                        <div class="col-sm-6">
                            @include('errors.error')
                        </div>
                    </div>

                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>@lang('admin.th-id')</th>
                            <th>@lang('admin.name-user')</th>
                            <th>@lang('admin.th-book')</th>
                            <th>@lang('admin.th-day-borrow')</th>
                            <th>@lang('admin.th-end-day')</th>
                            <th>@lang('admin.th-status')</th>
                            <th>@lang('user.th-function')</th>
                        </tr>
                        </thead>
                        <tbody>
                            <meta name="csrf-token" content="{{ csrf_token() }}" />

                            @foreach($borrows as $borrow)

                            <tr class="gradeX">
                                <td>{!! $loop->index !!}</td>
                                <td>{!! $borrow->name !!}</td>
                                <td>{!! $borrow->title !!}</td>
                                <td>{!! $borrow->day_borrow !!}</td>
                                <td>{!! $borrow->end_day_borrow !!}</td>
                                <td>
                                    <label class="switch switch-3d switch-success mr-3" id="active{{$borrow->id}}">
                                        @if($borrow->status == config('setting.status_1'))
                                            <a onclick="return ajaxToggleActiveStatus({{$borrow->id}},1)"><img src="/assets/images/active.gif" />Borrow is accepted</a>
                                        @else
                                            <a onclick="return ajaxToggleActiveStatus({{$borrow->id}},0)"><img src="/assets/images/deactive.gif" />Borrow is rejected</a>
                                        @endif

                                    </label>
                                </td>
                                <td class="center">
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['borrow.destroy', $borrow->id]]) !!}
                                        {!! Form::submit(trans('user.btn-del'), ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                    <div>
                        {{ $borrows->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
