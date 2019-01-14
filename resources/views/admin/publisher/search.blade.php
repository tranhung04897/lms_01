@extends('layout.adlayout')

@section('content')
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="table-responsive">
                    <div class="row">
                        <div class="col-sm-6">
                            <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal">
                                @lang('publisher.btn-add')
                            </button>
                            @include('errors.error')
                            @include('admin.publisher.add')
                        </div>
                        <div class="col-sm-6" >
                            {!! Form::open(['method' => 'POST', 'route' =>'search.store']) !!}
                                {!! Form::text('search', '', ['class' => 'form-control input-sm', 'placeholder' => trans('admin.txt-search')]) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>

                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>@lang('publisher.th-id')</th>
                            <th>@lang('publisher.th-name')</th>
                            <th>@lang('publisher.lb-description')</th>
                            <th>@lang('publisher.th-function')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($getSearch as $publisher)
                            @php
                                $id = $publisher->id;
                                $description = $publisher->description;
                                $name = $publisher->name;
                            @endphp

                            <tr class="gradeX">
                                <td>{!! $loop->index !!}</td>
                                <td>{!! $name !!}</td>
                                <td>{!! $description !!}</td>
                                <td class="center">
                                    <button type="button" class="btn btn-primary" data-id_publisher="{!! $id !!}" data-name="{!! $name !!}" data-description="{!! $description !!}" data-toggle="modal" data-target="#myModal1">
                                        <i class="fa fa-edit "></i>@lang('publisher.btn-edit')
                                    </button>
                                    @include('admin.publisher.edit')
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['publisher.destroy', $id]]) !!}
                                        {!! Form::submit(trans('publisher.btn-del'), ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}

                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    <div>
                        <a href="{{route('publisher.create')}}" class="btn btn-success" >
                            @lang('publisher.export-to-excel')
                        </a>
                    </div>
                    <div>
                        {{ $getSearch->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
