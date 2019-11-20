window.$ = window.jQuery = require('jquery');

$(document).on('click', '.delete-icon', function() {
    let id = $(this).data('id');
    swal({
            title: "Are you sure?",
            text: "Are you sure that you want to delete this item?",
            icon: "warning",
            dangerMode: true,
        })
        .then(willDelete => {
            if (willDelete) {
                axios.delete(`/items/${id}`)
                    .then(function(response) {
                        if (response.data.status == true) {
                            $(`#item-${id}`).remove();
                            swal("Deleted!", "Your imaginary file has been deleted!", "success");
                        }
                    })
                    .catch(function(error) {
                        // handle error
                        console.log(error);
                    });

            }
        });

});