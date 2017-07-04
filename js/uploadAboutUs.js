$(document).ready(function(){
	$("#imageaboutus").change(function(){
		$("#reviewImage").css("display","block");
    	readURL(this);
	});

    $("#outer-upload").on('click', function(){
        $("#imageaboutus").click();
    });

    $("#header").keypress(throttle(function(e){
        $("#previewHeader").text(e.target.value);
    }));
});

function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#reviewImage,#previewImg,#previewImg2').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

function throttle(f, delay){
    var timer = null;
    return function(){
        var context = this, args = arguments;
        clearTimeout(timer);
        timer = window.setTimeout(function(){
            f.apply(context, args);
        },
        delay || 300);
    };
}