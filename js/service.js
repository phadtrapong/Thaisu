$(document).ready(function(){
    getDataFromServer();
    getServiceContentFromServer();
});

function getDataFromServer(){
    $.ajax({
        type: "GET",
        url: "api/serviceImg.php",
        dataType: "json",
        success: function (data) {
            if(data && data > 0 ){
                $('img#banner-img').attr('src',  'imageView.php?image_id='+data);
            }
            else{
                $('img#banner-img').attr('src', 'http://placehold.it/1200x300');
            }
        }
    });
}

function getServiceContentFromServer(){
    $.ajax({
        type: "GET",
        url: "api/serviceContent.php",
        dataType: "json",
        success: function (data) {
            if(data){
                $('#service-one').html(data[0].detail);
                $('#header-service').text(data[0].header);
            }
            else{
            }
        }
    });
}