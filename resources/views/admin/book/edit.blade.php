<div class="modal fade" id="myModalBook">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">@lang('user.modal-title-add')</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                {!! Form::open(['method' => 'POST', 'route' => 'book.edit']) !!}
                    {!! Form::hidden('book_id', '', ['id' => 'id_book']) !!}

                    <div class="form-group">
                        {!! Form::label('publisher_id', 'Publisher', ['class' => 'col-md-4 col-form-label']) !!}
                        {!! Form::select('publisher_id', $publishers->pluck('name', 'id'), null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('author_id', 'Author', ['class' => 'col-md-4 col-form-label']) !!}
                        {!! Form::select('author_id', $authors->pluck('name', 'id'), null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('category_id', 'Category', ['class' => 'col-md-4 col-form-label']) !!}
                        {!! Form::select('category_id', $categorys->pluck('name', 'id'), null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group ">
                        {!! Form::label('title', trans('book.lb-title'), ['class' => 'col-md-4 col-form-label']) !!}
                        {!! Form::text('title', '', ['class' => "form-control ",'required']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('preview', trans('book.lb-preview'), ['class' => 'col-md-4 col-form-label']) !!}
                        {!! Form::textarea('preview', '', ['class'=>'input_review', 'id' => 'preview', 'row' => 4, 'required']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('picture', trans('book.lb-picture')) !!}
                        {!! Form::file('picture', ['class'=>'form-control-file', 'id'=>'exampleFormControlFile1']) !!}
                    </div>
                    <div class="form-group ">
                        {!! Form::label('page', 'Page', ['class' => 'col-md-4 col-form-label']) !!}
                        {!! Form::number('page', '', ['class' => "form-control ",'required']) !!}
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
