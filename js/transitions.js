let currentLogin = false;
let currentAbout = false;
let currentGreen = false;
//#################### Home Page ######################
let home = document.getElementById("home");

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
    home.style.display = "block";
}

//#################### Login Page ######################
let loginProfile = document.getElementById("loginProfile");
let loginSystem = document.getElementById("loginSystem");
let profile = document.getElementById("profile");

loginProfile.onclick = function(){
    home.style.display = "none";
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
    if(currentGreen){
        goingGreenPage.style.display = "none";
        currentGreen = false;
    }

    homeButton.style.visibility = "visible";
    homeButton.style.opacity = "1"; 
}

//#################### About Us ####################
let aboutUsButton = document.getElementById("aboutUs");
let aboutUs = document.getElementById("us");

aboutUsButton.onclick = function(){
    home.style.display = "none";
    currentAbout = true;
    if(currentLogin){
        if(loggedIn == false){
            loginSystem.style.display = "none";
        }else{
            profile.style.display = "none";
        }
        currentLogin = false;
    }
    if(currentGreen){
        goingGreenPage.style.display = "none";
        currentGreen = false;
    }
    aboutUs.style.display = "block";

    homeButton.style.visibility = "visible";
    homeButton.style.opacity = "1";   
    
}

//#################### Going Green ####################
let goingGreenButton = document.getElementById("goingGreen");
let goingGreenPage = document.getElementById("goingGreenPage");

goingGreenButton.onclick = function(){
    home.style.display = "none";
    currentGreen = true;
    if(currentLogin){
        if(loggedIn == false){
            loginSystem.style.display = "none";
        }else{
            profile.style.display = "none";
        }
        currentLogin = false;
    }
    if(currentAbout){
        aboutUs.style.display = "none";
        currentAbout = false;
    }

    goingGreenPage.style.display = "block";

    homeButton.style.visibility = "visible";
    homeButton.style.opacity = "1";   
}