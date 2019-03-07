$(document).ready(function () {

    setInterval( function () {
        var sendData = {
            _token: token
        };



        $.ajax({
            url:url +'/dashboard/contact-message'  ,
            method: 'POST',
            data: sendData,
            success: function (data) {
                $('#menu1').html(data.nischal);
                if (data.count > 0) {
                    $('.unseen').html(data.count);
                }
                $('#menu1').load(data.nischal);
            }
        });
    },1000);



});