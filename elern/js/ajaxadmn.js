 var adingups = document.getElementById("adminup");
   adingups.addEventListener('click',admnlogin);

 
 function admnlogin(){
     console.log('Button Click');
      var Admin=$("#adminInputEmail").val();
      var Adminpasss=$("#adminInputPassword").val();
      console.log(Admin);
      console.log(Adminpasss);
       $.ajax({
         url:"admin.php",
         method:"POST",
      
         data  : {
            stuemails:"studignupemail",
            Admin: Admin,
            Adminpasss :Adminpasss,     
         },
       
      success:function(data){
          console.log(data);
          if(data == 0){
         $("#adminform").html('<small class="alert alert-danger">Invalid Email Or Password  !</small>');
         
         }
          else if(data >= 0){
              $("#adminform").html('<small class="alert alert-success roller">Login Success Full !</small>');
              
          }
          setTimeout( ()=>{
            window.location.href="adminDashboard.php";
       },1000);
           
      },
            
  }); 
 }