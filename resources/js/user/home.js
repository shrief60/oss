window.$ = window.jQuery = require('jquery');

$(document).on('click', '#request-order', function() {
    let results = [];
    let items = document.querySelectorAll('input[type=checkbox]');
    items.forEach(function(item) {
        if (item.checked) {
            results.push(item.value);
        }
    });
    let address = $('#address').val();
    let note = $('#note').val();
    let date2 = document.getElementById('date').value;

    swal({
            title: "Are you sure?",
            text: "Are you sure that you want to Order these items ?",
            icon: "info",
        })
        .then(willDelete => {
            if (willDelete) {
                let data = {
                    'results': results,
                    'address': address,
                    'note': note,
                    'date': date2
                };
                axios.post(`/orders`, data)
                    .then(function(response) {
                        if (response.data.status == "created") {
                            window.location.reload();
                        }
                    })
                    .catch(function(error) {
                        // handle error
                        console.log(error);
                    });

            }
        });
});