$('#myModal1').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id_user = button.data('id_user')
    var email = button.data('email')
    var name = button.data('name')
    var phone = button.data('phone')
    var address = button.data('address')
    var password = button.data('password')
    var modal = $(this)

    modal.find('.modal-body #id_user').val(id_user);
    modal.find('.modal-body #email').val(email);
    modal.find('.modal-body #name').val(name);
    modal.find('.modal-body #address').val(address);
    modal.find('.modal-body #phone').val(phone);
    modal.find('.modal-body #password').val(password);

});

$('#myModalPublisher').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id_publisher = button.data('id_publisher')
    var name = button.data('name')
    var description = button.data('description')
    var modal = $(this)

    modal.find('.modal-body #id_publisher').val(id_publisher);
    modal.find('.modal-body #description').val(description);
    modal.find('.modal-body #name').val(name);

});

$('#myModalAuthor').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id_author = button.data('id_author')
    var name = button.data('name')
    var modal = $(this)

    modal.find('.modal-body #id_author').val(id_author);
    modal.find('.modal-body #name').val(name);

});
