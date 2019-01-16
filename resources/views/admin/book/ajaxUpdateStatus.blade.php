@if($presentStatus == config('setting.status_1'))
    <label class="switch switch-3d switch-success mr-3" id="active{{$id}}">
        <a onclick="return ajaxToggleActiveBook({{$id}}, {{ config('setting.status_0') }})"><img src="/assets/images/deactive.gif" />@lang('comment.status-reject')</a>
    </label>
@else
    <label class="switch switch-3d switch-success mr-3" id="active{{$id}}">
        <a onclick="return ajaxToggleActiveBook({{$id}}, {{ config('setting.status_1') }})"><img src="/assets/images/active.gif" />@lang('comment.status-accept')</a>
    </label>
@endif
