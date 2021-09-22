$(document).ready(function () {

    updateTableNumeration();

    function updateTableNumeration() {
        $('.tr-list-book').each(function (i) {
            $(this).find('td:first').text(`${++i}.`);
        });
    }

    $(document).on("click", "#addProduct", function (event) {
        event.preventDefault();


        let data = {
            name: $('#itemName').val(),
            author: $('#itemAuthor').val(),
            date: $('#itemDate').val()
        };

        if (data.name == '' || data.author == '' || data.date == '') {
            $("#blockAddEditProduct").html('Заполните все поля').css('background-color', 'red').show();
            $("#blockAddEditProduct").fadeOut(2000).fadeOut('slow');
            return false;
        } else {
            $.ajax({
                type: 'POST',
                async: true,
                url: '/addproduct',
                data: data,
                dataType: 'json',
                success: function (response) {
                    if (response) {
                        $("#book-list tbody").append(response.book_data);
                        $('#itemName, #itemAuthor, #itemDate').val('');
                        $("#blockAddEditProduct").html(response['message']).css('background-color', 'blue').show();
                        $("#blockAddEditProduct").fadeOut(2000).fadeOut('slow');
                        updateTableNumeration();
                    }
                }
            });
        }


    });

    $(document).on("click", "#book-list .deleteBook", function () {
        let parentRow = $(this).parents('.tr-list-book');
        let id = $('td.book_id', parentRow).attr('data-id');

        $.ajax({
            type: 'POST',
            async: true,
            url: '/deleteproduct/' + id,
            data: {
                id: id,
            },
            dataType: 'json',
            success: function (data) {
                if (data['success']) {
                    $(parentRow).remove();
                    $("#blockAddEditProduct").html(data['message']).css('background-color', 'red').show();
                    $("#blockAddEditProduct").fadeOut(2000).fadeOut('slow');
                }
            }
        });

    });


    $(document).on("click", "#book-list .updateBook", function () {

        let parentRow = $(this).parents('.tr-list-book');
        let id = $('td.book_id', parentRow).attr('data-id');

        let itemName = $('#name_' + id).val();

        let itemAuthor = $('#author_' + id).val();
        let itemDate = $('#date_' + id).val();

        let postData = {
            id: id, name: itemName, author: itemAuthor,
            date: itemDate,
        };

        $.ajax({
            type: 'POST',
            async: true,
            url: '/updateproduct/',
            data: postData,
            dataType: 'json',
            success: function (data) {
                if (data['success']) {

                    $("#blockAddEditProduct").html(data['message']).css('background-color', 'green').show();
                    $("#blockAddEditProduct").fadeOut(2000).fadeOut('slow');
                }

            }
        });
    });

    $(document).on("click", "#book-list .showBook", function () {
        let parentRow = $(this).parents('.tr-list-book');
        let id = $('td.book_id', parentRow).attr('data-id');

        let bookPage = "#bookPage_" + id;

        if ($(bookPage).css('display') !== 'table-row') {
            $(bookPage).show();
        } else {
            $(bookPage).hide();
        }
    });
});

$(document).on("click", ".restoreBook", function () {
    let parentRow = $(this).parents('.tr-list-book');
    let id = $('td.book_id', parentRow).attr('data-id');
    $.ajax({
        type: 'POST',
        async: true,
        url: '/restorebook/' + id,
        data: {
            id: id,
        },
        dataType: 'json',
        success: function (data) {
            console.log(data)
            if (data.success) {
                parentRow.hide();
                $("#blockRestoreBook").html(data['message']).css('background-color', 'red').show();
                $("#blockRestoreBook").fadeOut(2000).fadeOut('slow');
            }
        }
    });

});