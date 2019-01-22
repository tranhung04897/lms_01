@if(Session::has('success'))
        <script> alert('{{ Session::get('success')}}')</script>
@endif

@if(Session::has('fail'))
    <script> alert('{{ Session::get('fail')}}')</script>
@endif

@if (count($errors) > config('setting.default'))
    <div class="alert alert-danger alert-dismissible show col col-8" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li class="text-danger"> {{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
