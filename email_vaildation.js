$(document).ready(function(){
    $("#email").change(function() {
    var usr = $("#email").val();
    if(usr.length >= 4){
        $("#status").html('<img style="width:17px;" src="img/loader.gif" align="absmiddle">&nbsp;Checking availability...');
        $.ajax({ 
        type: "POST", 
        url: "check.php", 
        data: "email="+ usr,
        dataType: 'text',
            success: function(msg){
                if(msg == 'OK'){
                 alert ("success");
                    $("#email").removeClass('object_error'); // if necessary
                    $("#email").addClass("object_ok");
                    $("#status").html('&nbsp;<img src="tick.gif" align="absmiddle">');
                } else {
                    alert ("error");
                   $("#email").removeClass('object_ok'); // if necessary
                   $("#email").addClass("object_error");
                   $("#status").html(msg);
               }
            }

        });
    } else {
        $("#status").html('<font color="red">' + 'Enter Valid Email</font>');
        $("#email").removeClass('object_ok'); // if necessary
        $("#email").addClass("object_error");
    }
    });
});