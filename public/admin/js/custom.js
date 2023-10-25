$(document).ready(function(){
    $("#current_pwd").keyup(function(){
        var current_pwd = $("#current_pwd").val();
        // alert(current_pwd);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type : 'post',
            url : 'check_current_password',
            data : {current_pwd : current_pwd},
            success : function(resp){
                if(resp=="false"){
                    $('#verifyCurrentPwd').html("incorrect");
                }
                else if(resp == "true"){
                    $('#verifyCurrentPwd').html("correct")
                }

            },
            error : function(){
                //alert("errror");
            }
        })
    });
});