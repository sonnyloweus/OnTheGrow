//####################
let loginProfile = document.getElementById("loginProfile");
let loginSystem = document.getElementById("loginSystem");
let profile = document.getElementById("profile");

loginProfile.onclick = function(){
    if(loggedIn == false){
        loginSystem.style.display = "block";
    }else{
        profile.style.display = "block";
    }
}