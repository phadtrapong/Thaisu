$(document).ready(function(){
	$("#uploadImage").change(function(){
		$("#reviewImage").css("display","block");
    	readURL(this);
	});
    $('#submit-btn').on('click', function(){
        $('.save-msg').css('display', 'block');
    });
});

function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#reviewImage').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}