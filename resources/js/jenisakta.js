$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "/akta",
        cache: false,
        columns: [{
            data: 'DT_RowIndex',
            name: 'DT_RowIndex'
        },
        {
            data: 'name',
            name: 'name'
        },
        {
            data: 'action',
            name: 'action',
            orderable: false,
            searchable: false
        },
        ],
    });

    $('#createNew').click(function () {
        $('#btnSimpan').val("create");
        $('#id').val('');
        $('#dataForm').trigger("reset");
        $('#modelHeading').html("# Create Data");
        $('#ajaxModel').modal('show');
    });

    $('body').on('click', '.edit', function () {
        var id = $(this).data('id');
        $.get("/akta" + '/' + id + '/edit', function (data) {
            $('#modelHeading').html("# Edit Data");
            $('#btnSimpan').val("edit-data");
            $('#ajaxModel').modal('show');
            $('#id').val(data.id);
            $('#name').val(data.name);
        })
    });

    $('#btnSimpan').click(function (e) {
        e.preventDefault();
        // $(this).html('Sending..');
        $.ajax({
            data: $('#dataForm').serialize(),
            url: "/akta",
            type: "POST",
            dataType: 'json',
            success: function (data) {
                $('#dataForm').trigger("reset");
                $('#ajaxModel').modal('hide');
                table.draw()
            },
            error: function (data) {
                console.log('Error:', data);
                $('#btnSimpan').html('Save Changes');
            }
        });
    });

    $(document).on('click', '.delete', function () {
        data_id = $(this).data('id');
        console.log(data_id);
        $('#hapusdata').modal('show');
    });

    $('#btn_hapus').click(function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'DELETE',
            url: "/akta" + '/' + data_id,
        });
        $.ajax({
            beforeSend: function () {
                $('#btn_hapus').text('Deleting...');
            },
            success: function (data) {
                setTimeout(function () {
                    $('.data-table').DataTable().ajax.reload();
                    $('#hapusdata').modal('hide');
                }, 1000);
            }
        });
    });
});
