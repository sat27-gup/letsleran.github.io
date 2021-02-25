var ajxs=document.getElementById("clickit");
ajxs.addEventListener('click',ajxis);
function ajxis(){
    console.log("Goddk");
    const xhr = new XMLHttpRequest();
    xhr.open('GET','index.php',true);
    xhr.onprogress = function(){
        console.log('On progress');
    }
    xhr.onload=function(){
        if(this.status === 200){
            console.log(this.responseText);
        }
            else{
                console.log('Some error occurred');
            }
        }
        xhr.send();
}
