@extends('layout.adlayout')

@section('content')
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="table-responsive">
                    <div class="row">
                        <div class="col-sm-6">
                            <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-parent_id="{!! config('setting.default') !!}" data-target="#myModalCatadd">
                                @lang('user.btn-add')
                            </button>
                            @include('errors.error')
                            @include('admin.category.add')
                        </div>
                    </div>

                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>@lang('user.th-name')</th>
                            <th>@lang('user.th-function')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)

                            <tr class="gradeX">
                                <td>{!! $loop->index !!}</td>
                                <td>
                                    @if($category->childs->count() >0)
                                        <li>
                                            <a>{{$category->name}}</a>
                                            <ul>
                                                @foreach($category->childs as $menu)
                                                    <li >
                                                        <a> {!! $menu->name !!} </a>
                                                        @include('errors.childItems')
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        @else
                                            <li>{{$category->name}}</li>
                                        @endif
                                </td>
                                <td class="center">
                                    <button type="button" class="btn btn-primary" data-id_cat="{!! $category->id !!}" data-name="{!! $category->name !!}" data-parent_id="{!! $category->parent_id !!}"  data-toggle="modal" data-target="#myModalCat">
                                        <i class="fa fa-edit "></i>@lang('user.btn-edit')
                                    </button>
                                    @include('admin.category.edit')
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['cat.destroy', $category->id]]) !!}
                                        {!! Form::submit(trans('user.btn-del'), ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}

                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
