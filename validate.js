function validatelogin(){
    var userName = document.getElementById('user-name').value;
    var password = document.getElementById('password').value;
    if(userName.trim() == ''){
        alert('no empty');
        return false;
    }
    if(password == ''){
        alert('invalid');
        return false;
    }

    document.getElementById('login-form').submit();
}