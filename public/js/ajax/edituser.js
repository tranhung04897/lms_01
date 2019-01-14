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

$('#myModalCat').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id_cat = button.data('id_cat')
    var name = button.data('name')
    var parent_id = button.data('parent_id')
    var modal = $(this)

    modal.find('.modal-body #id_cat').val(id_cat);
    modal.find('.modal-body #parent_id').val(parent_id);
    modal.find('.modal-body #name').val(name);

})

$('#myModalCatadd').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var parent_id = button.data('parent_id')
    var modal = $(this)

    modal.find('.modal-body #parent_id').val(parent_id);

})

$('#myModalBook').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id_book = button.data('id_book')
    var publisher_id = button.data('publisher_id')
    var author_id = button.data('author_id')
    var title = button.data('title')
    var preview = button.data('preview')
    var picture = button.data('picture')
    var page = button.data('page')
    var modal = $(this)

    modal.find('.modal-body #id_book').val(id_book);
    modal.find('.modal-body #publisher_id').val(publisher_id);
    modal.find('.modal-body #author_id').val(author_id);
    modal.find('.modal-body #title').val(title);
    modal.find('.modal-body #preview').val(preview);
    modal.find('.modal-body #picture').val(picture)
    modal.find('.modal-body #page').val(page);

});
