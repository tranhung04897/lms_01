@if($presentStatus == config('setting.status_1'))
<label class="switch switch-3d switch-success mr-3" id="active{{$id}}">
    <a onclick="return ajaxToggleActiveStatus({{$id}},0)"><img src="/assets/images/deactive.gif" />Borrow is rejected</a>
</label>
@else
<label class="switch switch-3d switch-success mr-3" id="active{{$id}}">
    <a onclick="return ajaxToggleActiveStatus({{$id}},1)"><img src="/assets/images/active.gif" />Borrow is accepted</a>
</label>
@endif
