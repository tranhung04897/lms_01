<div class="modal fade" id="myModalAuthor">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">@lang('user.modal-title-edit')</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                {!! Form::open(['method' => 'POST', 'route' => 'author.edit']) !!}
                    {!! Form::hidden('author_id', '', ['id' => 'id_author']) !!}

                    <div class="form-group">
                        {!! Form::label('name', trans('author.lb-name'), ['class' => 'col-md-4 col-form-label']) !!}
                        {!! Form::text('name', '', ['class' => 'form-control ']) !!}
                    </div>

                    {!! Form::submit(trans('authors.btn-edit'), ['class' => 'btn btn-success btn-md ']) !!}
                {!! Form::close() !!}
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('admin.btn-close')</button>
            </div>

        </div>
    </div>
</div>
