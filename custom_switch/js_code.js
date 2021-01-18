function sub_category_active_status(id) {
    $.ajax({
        processData: false,
        contentType: false,
        type: 'GET',
        url: 'sub_category_active_status_update/' + id,
        success: function(data) {


        }
    })
}