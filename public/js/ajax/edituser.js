$('#myModal1').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id_user = button.data('id_user')
    var email = button.data('email')
    var name = button.data('name')
    var phone = button.data('phone')
    var address = button.data('address')
    var modal = $(this)

    modal.find('.modal-body #id_user').val(id_user);
    modal.find('.modal-body #email').val(email);
    modal.find('.modal-body #name').val(name);
    modal.find('.modal-body #address').val(address);
    modal.find('.modal-body #phone').val(phone);

})
