$(document).ready(function(){
	$("#uploadImage").change(function(){
		$("#reviewImage").css("display","block");
    	readURL(this, 'reviewImage');
	});
    $("#uploadImage2").change(function(){
        $("#reviewImage2").css("display","block");
        readURL(this, 'reviewImage2');
    });
    $("#uploadImage3").change(function(){
        $("#reviewImage3").css("display","block");
        readURL(this, 'reviewImage3');
    });
    $('#submit-btn').on('click', function(){
        $('.save-msg').css('display', 'block');
    });
});

function readURL(input, id) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#'+id).attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}