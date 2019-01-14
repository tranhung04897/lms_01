<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">@lang('publisher.modal-title-add')</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                {!! Form::open(['method' => 'POST', 'route' => 'publisher.store']) !!}

                    <div class="form-group">
                        {!! Form::label('name', trans('publisher.lb-name'), ['class' => 'col-md-4 col-form-label']) !!}
                        {!! Form::text('name', '', ['class' => 'form-control ']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('description', trans('publisher.lb-description'), ['class' => 'col-md-4 col-form-label']) !!}
                        {!! Form::text('description', '', ['class' => 'form-control ']) !!}
                    </div>

                    {!! Form::submit(trans('publisher.btn-add'), ['class' => 'btn btn-success btn-md ']) !!}
                {!! Form::close() !!}
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('admin.btn-close')</button>
            </div>

        </div>
    </div>
</div>
