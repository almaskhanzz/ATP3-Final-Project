$(document).ready(function(){

    $('#department').change(function(){
        var cid = $(this).val();
        if(cid){
            $.ajax({
                type:"get",
                url:"addDoctorSchedule/"+cid,
                success:function(res)
                {       
                    console.log(res);
                    if(res)
                    {
                        $("#doctor").empty();
                        $("#doctor").append('<option disabled="true" selected="ture">---Select Doctor---</option>');
                        $.each(res,function(key,value){
                            $("#doctor").append('<option value="'+value+'">'+value+'</option>');
                        });
                    }
                }
            
            });
        }
    });
    
});