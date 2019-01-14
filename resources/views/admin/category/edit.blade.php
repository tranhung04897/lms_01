<div class="modal fade" id="myModalCat">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">@lang('user.modal-title-add')</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                {!! Form::open(['method' => 'POST', 'route' => 'cat.edit']) !!}
                    {!! Form::hidden('cat_id', '', ['id' => 'id_cat']) !!}

                    <div class="form-group">
                        {!! Form::label('name', trans('user.lb-name'), ['class' => 'col-md-4 col-form-label']) !!}
                        {!! Form::text('name', '', ['class' => 'form-control ']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('parent_id', 'Parent Cat', ['class' => 'col-md-4 col-form-label']) !!}
                        {!! Form::select('parent_id', $allCategories->pluck('name', 'id'), null, ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::submit(trans('user.btn-edit'), ['class' => 'btn btn-success btn-md ']) !!}
                {!! Form::close() !!}
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('user.btn-close')</button>
            </div>

        </div>
    </div>
</div>
