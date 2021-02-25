$(document).ready(function (){
    $('#exampleInputEmail').on("keypress blur",
    function(){
        var stunemail=$('#exampleInputEmail').val();
    $.ajax({
        url:"addstudent.php",
        method:"POST",
        data  : {
            checkemail:"checkemail",
            
            stunemail :stunemail,
            
        },
       
        success:function(data){
            
            console.log(data);
            if(data !=0 ){
                $("#stuemails").html('<small style="color:red;">Email ID Already Used !</small>');
             $("#singup").attr("disabled",true);
        }else if(data == 0){
            $("#stuemails").html('<small style="color:blue;">Email To Go !</small>');
         $("#singup").attr("enabled",false);
    }
    

    },
});

});

});

var singups = document.getElementById("singup");
singups.addEventListener('click',addstuhh);

function addstuhh(){
    var stunname=$('#exampleInputName').val();
    var stunemail=$('#exampleInputEmail').val();
    var stunpasswrd=$('#exampleInputPassword').val();
console.log(stunname);
console.log(stunemail);
console.log(stunpasswrd);
//checking verifn


 if(stunname.trim()==""){
    $("#stunamess").html('<small style="color:red;">Please Enter Name !</small>');
    $("#exampleInputName").focus();
    return false;
} else if(stunemail.trim()==""){
    $("#stuemails").html('<small style="color:red;">Please Enter Email !</small>');
    $("#exampleInputEmail").focus();
    return false;
}else if(stunpasswrd.trim()==""){
    $("#stupsswrds").html('<small style="color:red;">Please Enter Password !</small>');
    $("#exampleInputPassword").focus();
    return false;
}else{

    $.ajax({
        url:"addstudent.php",
        method:"POST",
        dataType:"json",
        data  : {
            studignup:"studignup",
            stunnames : stunname,
            stunemail :stunemail,
            stunpasswrd:stunpasswrd,
        },
       
        success:function(data){
            
            console.log(data);

            },
        
            
    }); 
    delform();
}

}
    


 function delform(){
     $("#myform").trigger("reset");
     $("#stunamess").html("");
     $("#stuemails").html("");
     $("#stupsswrds").html("");
    
 }

 var loingups = document.getElementById("loginup");
 loingups.addEventListener('click',cheaklogin);

 
 function cheaklogin(){
     var logemail=$("#logInputEmail").val();
     var logpasswrd=$("#logInputPassword").val();
     $.ajax({
        url:"addstudent.php",
        method:"POST",
      
        data  : {
            stuemails:"studignupemail",
            logemail : logemail,
            logpasswrd :logpasswrd,
            
        },
       
        success:function(data){
            console.log(data);
            if(data == 0){
           $("#loginform").html('<small class="alert alert-danger">Invalid Password !</small>');

            }
            else if(data == 1){
                $("#loginform").html('<small class="alert alert-success roller">Login Success Full !</small>');
            }
             setTimeout( ()=>{
                 window.location.href="index.php";
             },1000)
        },
            
    }); 
 }
