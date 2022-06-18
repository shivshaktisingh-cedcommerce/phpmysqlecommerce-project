
$(document).ready(function(){

 
   
    $("#id").on("click","#purchase",function(){
      
        var pid = $(this).attr("id_dedo");
        var proname = $(this).attr("name");
        var prosp = $(this).attr("prosp");
        var prolp = $(this).attr("prolp");
        $.ajax({
            url:"purchase.php",
            method:"POST",
            data:{
                proname:proname,
                pid:pid,
                prosp:prosp,
                prolp:prolp
            },
            success:function(data){
               
                $("#quant").text(data);
               
            }
        });
    });

    $('#productafterdeletion').on("click",".remove",function(){
       
        var rowtodelete = $(this).attr('id');
        $.ajax({
            type : 'POST',
            url : 'deleteitem.php',
            data :{ rowtodelete : rowtodelete
            },
            success : function(data){
                $('#productafterdeletion').html(data);
                window.location.href='cart.php';
            }
        })
    });
});
  
// function aja(){
//     var pid = $(this).attr("id_dedo");
//     var proname = $(this).attr("name");
//     var prosp = $(this).attr("prosp");
//     var prolp = $(this).attr("prolp");
//     $.ajax({
//         url:"purchase.php",
//         method:"POST",
//         data:{
           
//         },
//         success:function(data){
//             $("#quant").text(data);
//             // alert(data);
//             if(data=="")
//             {$("#quant").text("0");
//         }
           
//         }
//     });
// };



function validateForm(){
    // at least one number, one lowercase and one uppercase letter
   // at least six characters
   var passwordValidationExpression = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
   var emailValidationExpression = /\S+@\S+\.\S+/;
   var nameValidationExpression = /^[a-zA-Z]+$/;
   var name = document.getElementById("name").value;
   var email = document.getElementById("email").value;
   var contact = document.getElementById("contact").value;
   var password = document.getElementById("password").value;
   var confirm_password = document.getElementById("confirm_password").value;
   
  
  
   if((name=="") || (password=="") || (confirm_password=="") || (contact=="") || (email=="") || (address=="")){
         return false;
     }
   if(!(name.match(nameValidationExpression))){
       return false;
   }
   if(!(password.match(passwordValidationExpression))){
        return false;
   }
   if (confirm_password!=password){
       return false;
   }
   if((isNaN(contact)) || (!(contact.length==10))){
       return false;
   }
   if(!(email.match(emailValidationExpression))){ 
       return false;
   }
   return true;
  
};


$('#productafterdeletion').on('click','#deleterow',function(){


    var pro_id_to_delete=$(this).attr("delid");
    alert(pro_id_to_delete);
    $.ajax({
       url:"deleteitem.php",
       method:"POST",
       data:{
            deleteproduct:pro_id_to_delete,
       },
       success:function(data){
           alert("shakti");
        $("#productafterdeletion").html(data);
        // alert(data);
       
    }

    })
});

function Delete(deleteproductid,table){
    alert(deleteproductid);
    // console.log(deleteproductid);
    $.ajax({
        url:"adminpanel.php",
        method:"POST",
        data:{
             deleteproductid:deleteproductid,
             table:table,
        },
        success:function(data){
        console.log(data);
     }
 
     })

};

function EditAdmin(editorderid){
    console.log(editproductid);
    alert("shiv");
    $.ajax({
        url:"editorderdetailsql.php",
        method:"POST",
        data:{
             editorderid:editorderid,
        },
        success:function(data){
            alert(data[0]);
            alert(data[1]);
            alert(data[2]);
            alert(data[3]);
        
     }
 
     })
}
    
 

