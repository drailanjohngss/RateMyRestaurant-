jQuery(document).ready(function($){

$(".btnrating").on('click',(function(e) {
    var previous_value = $("#selected_rating").val();
    var selected_value = $(this).attr("data-attr");
    var res_id = $("#restaurantId").val();
    console.log(res_id);
       var endpoint = `/ratings/add`;
        $.ajax({
            type: 'POST',
            url: endpoint,
            data: {"ratings": selected_value, "restaurant_id": res_id },
            success: onDataSuccess,
            error: onDataFailure,
            beforeSend: function(xhr){
               xhr.setRequestHeader('X-CSRF-Token', csrfToken);
            }
        }).fail(function($xhr) {

            console.log($xhr);
        });

        function onDataSuccess(e) {
            console.log('Success!');
            console.log(e);

        }
        function onDataFailure(e) {
            console.log('Error' + e);
            console.log(e);
        }


    $("#selected_rating").val(selected_value);

    $(".selected-rating").empty();
    $(".selected-rating").html(selected_value);

    for (i = 1; i <= selected_value; ++i) {
    $("#rating-star-"+i).toggleClass('btn-warning');
    $("#rating-star-"+i).toggleClass('btn-default');
    }

    for (ix = 1; ix <= previous_value; ++ix) {
    $("#rating-star-"+ix).toggleClass('btn-warning');
    $("#rating-star-"+ix).toggleClass('btn-default');
    }

    }));

});
