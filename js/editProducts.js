$(document).ready(function(){
    getDataFromServer($('#productKey').val());
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

function getDataFromServer(id){
    $.ajax({
        type: "GET",
        url: "api/edit.php?id="+id,
        dataType: "json",
        success: function (data) {
            if(data && data.isSuccess){
                populateData(data);
            }
        }
    });
}

function populateData(data){
    $('#name').val(data.name);
    $('#category').val(data.category);

}