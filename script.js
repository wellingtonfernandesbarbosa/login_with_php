user.focus();

function limpar(){
    var user = form.user;
    var password = form.password;
    user.value = '';
    password.value = '';
    user.focus();    
}

function validar() {
    var user = form.user;
    
    if (user.value == ""){
        alert("Usuário não informado!")
        user.focus();
    } else {
        documento.getElementByID('form').innerHTML("<form method='post' id='form' action='home.php'>")
    }
}