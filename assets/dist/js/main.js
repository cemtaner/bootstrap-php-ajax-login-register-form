//Email controller function
function emailController(email){
    var regular = new RegExp(/^[a-z]{1}[\d\w\.-]+@[\d\w-]{3,}\.[\w]{2,3}(\.\w{2})?$/);
    return regular.test(email);
}
//Email controller function use
function email_control(){
    var login = document.getElementById('email');
    if(emailController(login.value))
	login.style.backgroundColor = "white";
    else
	login.style.backgroundColor = "#F0D0D0";
}