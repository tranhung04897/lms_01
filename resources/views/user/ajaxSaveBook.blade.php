@if(array_key_exists($book_id, $followBook))
    <span id="word{{$book_id}}" >
        <div class="favorite favorite_left" onclick="return ajaxToggleWordRemember({{$book_id}})"></div>
    </span>
@else
    <span id="word{{$book_id}}" >
        <div class="favorite favorite_left active" onclick="return ajaxToggleWordRemember({{$book_id}})"></div>
    </span>
@endif
