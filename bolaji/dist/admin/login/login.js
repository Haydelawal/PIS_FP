function validate(){

var username = document.getElementById("username").value;
var password = document.getElementById("password").value;


if(username == "admin@admin.com" && password == "password"){


    location.replace('http://localhost/bolaji/admin/master/index.php');
 alert("LOG IN SUCCESSFUL");

 return false;



} else{
    alert("INCORRECT CREDENTIALS")
}




}

