function getAdresses() {
    $.ajax({
        type: 'GET',
        url: urlToRestApi,
        dataType: "json",
        success:
                function (adresses) {
                    var adresseTable = $('#adresseData');
                    adresseTable.empty();
                    var count = 1;
                    $.each(adresses.data, function (key, value)
                    {
                        var editDeleteButtons = '</td><td>' +
   
                        adresseTable.append('<tr><td>' + count + '</td><td>' + value.ville + '</td><td>' + editDeleteButtons);
                        count++;
                    });

                }
    });
}


/* Function takes a jquery form
 and converts it to a JSON dictionary */
 function convertFormToJSON(form) {
    var array = $(form).serializeArray();
    var json = {};

    $.each(array, function () {
        json[this.name] = this.value || '';
    });

    return json;
}

function adresseAction(type, id) {
    id = (typeof id == "undefined") ? '' : id;
    var statusArr = {add: "added", edit: "updated", delete: "deleted"};
    var requestType = '';
    var adresseData = '';
    var ajaxUrl = urlToRestApi;
    if (type == 'add') {
        requestType = 'POST';
        adresseData = convertFormToJSON($("#addForm").find('.form'));
    } else if (type == 'edit') {
        requestType = 'PUT';
        adresseData = convertFormToJSON($("#editForm").find('.form'));
    } else {
        requestType = 'DELETE';
        ajaxUrl = ajaxUrl + "/" + id;
    }
    $.ajax({
        type: requestType,
        headers: {
            'X-CSRF-Token': $('[name="_csrfToken"]').val()
        },
        url: ajaxUrl,
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: JSON.stringify(adresseData),
        success: function (msg) {
            if (msg) {
                alert('Adresse data has been ' + statusArr[type] + ' successfully.');
                getAdresses();
                $('.form')[0].reset();
                $('.formData').slideUp();
            } else {
                alert('Some problem occurred, please try again.');
            }
        }
    });
}


function editAdresses(id) {
    $.ajax({
        type: 'GET',
        dataType: 'JSON',
        url: 'adresseAction.php',
        data: 'action_type=data&id=' + id,
        success: function (data) {
            $('#idEdit').val(data.id);
            $('#villeEdit').val(data.ville);
            $('#streetEdit').val(data.street);
			$('#numberEdit').val(data.number);
            $('#zipEdit').val(data.zip);

            $('#editForm').slideDown();
        }
    });
}
