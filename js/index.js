//Start ########################## Login System ####################################
let regButton = document.getElementById("RegisterButton");
let logButton = document.getElementById("LoginButton");
let register = document.getElementById("register");
let login = document.getElementById("login");
let showHide = document.getElementById("showHide");
let registerPass = document.getElementById("registerPass");
let loginPass = document.getElementById("loginPass");
let signOut = document.getElementById("signOut");
let regOrLog = 0;


if(!loggedIn){
    regButton.onclick = function(){
        showHide.style.display = "block";
        login.style.height = "0px";
        register.style.height = "300px";
        regButton.style.display = "none";
        logButton.style.display = "block";
        logButton.style.top = "67%";
        showHide.style.top = "46%";
        regOrLog = 1;
    }

    logButton.onclick = function(){
        showHide.style.display = "block";
        register.style.height = "0px";
        login.style.height = "180px";
        regButton.style.display = "block";
        logButton.style.display = "none";
        regButton.style.top = "35%";
        showHide.style.top = "62%";
        regOrLog = 2;
    }

    showHide.onclick = function(){
        if(regOrLog == 1){
            if(registerPass.type == 'password'){
                registerPass.type = 'text';
            }else{
                registerPass.type = 'password';
            }
        }else if(regOrLog == 2){
            if(loginPass.type == 'password'){
                loginPass.type = 'text';
            }else{
                loginPass.type = 'password';
            }
        }
    }
}

if(loggedIn){
    signOut.onclick = function(){
        window.location.href = "index.php";
    }
}
// ########################## Login System ####################################