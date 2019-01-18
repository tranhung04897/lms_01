$('#myModal1').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id_author = button.data('id_author')
    var name = button.data('name')
    var modal = $(this)

    modal.find('.modal-body #id_author').val(id_author);
    modal.find('.modal-body #name').val(name);

})
