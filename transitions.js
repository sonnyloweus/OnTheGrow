let currentLogin = false;
let currentAbout = false;
//#################### Login Page ######################
let loginProfile = document.getElementById("loginProfile");
let loginSystem = document.getElementById("loginSystem");
let profile = document.getElementById("profile");

loginProfile.onclick = function(){
    currentLogin = true;
    if(currentAbout){
        aboutUs.style.display = "none";
        currentAbout = false;
    }
    if(loggedIn == false){
        loginSystem.style.display="block";
    }else{
        profile.style.display="block";
    }

    homeButton.style.visibility = "visible";
    homeButton.style.opacity = "1"; 
}

//#################### Back Button ####################
let homeButton = document.getElementById("homeButton");
homeButton.onclick = function(){
    if(currentAbout){
        aboutUs.style.display = "none";
        currentAbout = false;
    }
    if(currentLogin){
        if(loggedIn == false){
            loginSystem.style.display = "none";
        }else{
            profile.style.display = "none";
        }
        currentLogin = false;
    }
}

//#################### About Us ####################
let aboutUsButton = document.getElementById("aboutUs");
let aboutUs = document.getElementById("us");

aboutUsButton.onclick = function(){
    currentAbout = true;
    if(currentLogin){
        if(loggedIn == false){
            loginSystem.style.display = "none";
        }else{
            profile.style.display = "none";
        }
        currentLogin = false;
    }
    aboutUs.style.display = "block";

    homeButton.style.visibility = "visible";
    homeButton.style.opacity = "1";   
    
}