function checkLogin() {

const usernameEl = document.getElementById("username").value;
const passwordEl = document.getElementById("parola").value;

if(usernameEl == 'admin' && passwordEl== 'admin'){
    document.location.href='user.php';
}
else {
    alert('Username sau parola gresite');
    document.location.href='login.php';


}

  }


