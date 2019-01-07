@extends('layout.adlayout')

@section('content')
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="table-responsive">
                    <div class="row">
                        <div class="col-sm-6">
                            <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal">
                                @lang('user.btn-add')
                            </button>
                            @include('errors.error')
                            @include('admin.authors.add')
                        </div>
                        <div class="col-sm-6" >
                            {!! Form::open(['method' => 'POST', 'route' =>'searchauth.store']) !!}
                                {!! Form::text('search', old('search'), ['class' => 'form-control input-sm', 'placeholder' => trans('admin.txt-search')]) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>

                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>@lang('authors.th-id')</th>
                            <th>@lang('authors.th-name')</th>
                            <th>@lang('authors.th-follow')</th>
                            <th>@lang('user.th-function')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($authors as $author)
                            @php
                                $id = $author->id;
                                $follow = $author->num_follow;
                                $name = $author->name;

                            @endphp

                            <tr class="gradeX">
                                <td>{!! $loop->index !!}</td>
                                <td>{!! $name !!}</td>
                                <td>{!! $follow !!}</td>
                                <td class="center">
                                    <button type="button" class="btn btn-primary" data-id_author="{!! $id !!}" data-name="{!! $name!!}" data-toggle="modal" data-target="#myModal1">
                                        <i class="fa fa-edit "></i>@lang('user.btn-edit')
                                    </button>
                                    @include('admin.authors.edit')
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['author.destroy', $id]]) !!}
                                        {!! Form::submit(trans('user.btn-del'), ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}

                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    <div>
                        <a href="{{route('author.create')}}" class="btn btn-success" >
                            @lang('user.export-to-excel')
                        </a>
                    </div>
                    <div>
                        {{ $authors->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
