@if($presentStatus == config('setting.status_1'))
    <label class="switch switch-3d switch-success mr-3" id="active{{$id}}">
        <a onclick="return ajaxToggleActiveBook({{$id}}, 0)"><img src="/assets/images/deactive.gif" />Reject display</a>
    </label>
@else
    <label class="switch switch-3d switch-success mr-3" id="active{{$id}}">
        <a onclick="return ajaxToggleActiveBook({{$id}}, 1)"><img src="/assets/images/active.gif" />Accept display</a>
    </label>
@endif
