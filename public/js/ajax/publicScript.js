
function ajaxToggleWordRemember(bookid){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: "/home/follow-book",
        type: 'POST',
        cache: false,
        data: {bookid:bookid},
        success: function(data){
            $('#word'+bookid).replaceWith(data);
            // console.log(data);
        },
        error: function (){
            alert('error');
        }
    });

}

$('.saveBook').on('click', function (e) {
    if (confirm($(this).data('confirm'))) {
        top.location.href = '/login';
    }
    else {
        return false;
    }
});
