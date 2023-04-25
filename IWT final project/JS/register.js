function cheackpassword(){
    if (document.getElementById("password").value != document.getElementById ("confirm").value){
        alert("Password mismatch");

    }
    else{
        alert ("Sucess!");
    }
    cheackpassword();
}