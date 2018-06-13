setInterval(function(){
    $.ajax({
        method: 'GET',
        url: base_url + '/api/get-counter',
        success: function(response){
            $('#m1').html(response.mc1);
            $('#m2').html(response.mc2);
            $('#m3').html(response.mc3);
            $('#m4').html(response.mc4);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(JSON.stringify(jqXHR));
            console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
        }
    })},1000);
