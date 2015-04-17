$(document).ready(function(){
    $("#search").keyup(function(){
        if($("#search").val().length>3){
            $.ajax({
                type: "post",
                //url: "http://localhost/technicalkeeda/index.php/employee",
                url: "http://127.0.0.1/creating/m7tech/clients/getBusinessNames",

                cache: false,
                data:'search='+$("#search").val(),
                success: function(response){
                    $('#finalResult').html("");
                    var obj = JSON.parse(response);
                    if(obj.length>0){
                        try{
                            var items=[];
                            $.each(obj, function(i,val){
                                //items.push($('<li/>').text(val.FIRST_NAME + " " + val.LAST_NAME));
                                items.push($('<li/>').text(val.businessName));
                            });
                            $('#finalResult').append.apply($('#finalResult'), items);
                        }catch(e) {
                            alert('Exception while request..');
                        }
                    }else{
                        //$('#finalResult').html($('<li/>').text("No Data Found"));
                        $('#finalResult').html($('<li/>').text("No Data Found"));
                    }

                },
                error: function(){
                    alert('Error while request..');
                }
            });
        }
        return false;
    });
});