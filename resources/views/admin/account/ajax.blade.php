<script>
    $("#title").change(function() {
        element = $(this).val();
        $("button[type=submit]").prop('disable', true);

        // console.log(element);
        $.ajax({
            url: "{{route('getSlug')}}",
            type: "get",
            data: {
                title: element
            },
            dataType: 'json',
            success: function(response) {
                $("button[type=submit]").prop('disable', false);

                if (response['status'] == true) {
                    $('#slug').val(response['slug']);
                } else {}
            },
            error: function(jqHR, exception) {
                console.log('something went wrong.');
            }
        });
    });





    	$("#productForm").submit(function(e) {
		e.preventDefault();
		$("button[type=submit]").prop('disable',true);

		$.ajax({
			url: "{{route('proucts.store')}}",
			type: "POST",
			data: new FormData(this),
			dataType: 'json',
			contentType: false,
			cache: false,
			processData: false,
			success: function(response) {
				var errors = response['message'];
				$("button[type=submit]").prop('disable',false);

				if (response['status'] == true) {

					window.location.href="{{route('proucts.index')}}";



					// $('#title').removeClass('is-invalid');
					// $('#title').siblings('p').removeClass('.invalid-feedback text-danger').html("");
					// $('#slug').removeClass('is-invalid');
					// $('#slug').siblings('p').removeClass('.invalid-feedback text-danger').html("");
					// $('#image').removeClass('is-invalid');
					// $('#image').siblings('p').removeClass('.invalid-feedback text-danger').html("");



				} else {

                    var errors = response['message'];

                    $(".error").removeClass('invalid-feedback').html('');

                    $("input[type='text'],select").removeClass('is-invalid');
                    $.each(errors,function(key,value){
// dd(error);
// console.log(errors);
// console.log([value][0]);
                        $(`#${key}`).addClass('is-invalid').siblings('p').addClass('invalid-feedback').html(value);
                    });



					// if (errors['title']) {
					// 	$('#title').addClass('is-invalid');
					// 	$('#title').siblings('p').addClass('.invalid-feedback text-danger').html(errors['title']);

					// } else {
					// 	$('#title').removeClass('is-invalid');
					// 	$('#title').siblings('p').removeClass('.invalid-feedback text-danger').html("");
					// }
					// if (errors['slug']) {
					// 	$('#slug').addClass('is-invalid');
					// 	$('#slug').siblings('p').addClass('.invalid-feedback text-danger').html(errors['slug']);

					// } else {
					// 	$('#slug').removeClass('is-invalid');
					// 	$('#slug').siblings('p').removeClass('.invalid-feedback text-danger').html("");
					// }
					// if (errors['image']) {
					// 	$('#image').addClass('is-invalid');
					// 	$('#image').siblings('p').addClass('.invalid-feedback text-danger').html(errors['image']);

					// } else {
					// 	$('#image').removeClass('is-invalid');
					// 	$('#image').siblings('p').removeClass('.invalid-feedback text-danger').html("");
					// }

				}


			},
			error: function(jqHR, exception) {
				console.log('something went wrong.');
			}
		});

	});



    $("#category").change(function() {
        var category_id = $(this).val();
        $.ajax({
            url: "{{route('productSubcategory')}}",
            type: "get",
            data: {
                category_id: category_id
            },
            dataType: 'json',
            success: function(response) {
                console.log(response);


                $("#sub_category").find("option").not(":first").remove();
                $.each(response["subcategory"], function(key, item) {
                    $("#sub_category").append(`<option value='${item.id}'>${item.name}</option>`)
                });

            },
            error: function(jqHR, exception) {
                console.log('something went wrong.');
            }
        });
    });
</script>