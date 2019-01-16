function ajaxToggleActiveStatus(id, presentStatus){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: "/admin/borrow/update-status",
        type: 'POST',
        cache: false,
        data: {id:id, presentStatus:presentStatus},
        success: function(data){
            $( '#active'+id ).replaceWith( data );
        },
        error: function (){
            alert('có lỗi xảy ra');
        }
    });
}

function ajaxToggleActiveBook(id, presentStatus){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: "/admin/book/update-status",
        type: 'POST',
        cache: false,
        data: {id:id, presentStatus:presentStatus},
        success: function(data){
            $( '#active'+id ).replaceWith( data );
        },
        error: function (){
            alert('có lỗi xảy ra');
        }
    });
}

function ajaxToggleActiveComment(id, presentStatus){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: "/admin/comment/update-status",
        type: 'POST',
        cache: false,
        data: {id:id, presentStatus:presentStatus},
        success: function(data){
            $( '#active'+id ).replaceWith( data );
        },
        error: function (){
            alert('có lỗi xảy ra');
        }
    });
}
