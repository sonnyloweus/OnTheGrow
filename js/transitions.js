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
    if(currentGreen){
        goingGreenPage.style.display = "none";
        currentGreen = false;
    }
    home.style.display = "block";
    activityButtons.style.display = "block";
    submitForm.style.display = "none";
    homeButton.style.visibility = "hidden";
    homeButton.style.opacity = "0";
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

//#################### Home Page ####################

let activityButtons = document.getElementById("activityButtons");
let carpoolButton = document.getElementById("carpool");
let busButton = document.getElementById("bus");
let bikeButton = document.getElementById("bike");
let trainButton = document.getElementById("train");
let activityType = document.getElementById("activityType");
let submitForm = document.getElementById("submitForm");
let homeForm = document.getElementById("homeForm");

//homeForm.action = window.location.href;

carpoolButton.onclick = function(){
    activityButtons.style.display = "none";
    submitForm.style.display = "block";
    activityType.innerHTML = "Carpool";
    homeButton.style.visibility = "visible";
    homeButton.style.opacity = "1";  
}
busButton.onclick = function(){
    activityButtons.style.display = "none";
    submitForm.style.display = "block";
    activityType.innerHTML = "Bus";
    homeButton.style.visibility = "visible";
    homeButton.style.opacity = "1";  
}
trainButton.onclick = function(){
    activityButtons.style.display = "none";
    submitForm.style.display = "block";
    activityType.innerHTML = "Train";
    homeButton.style.visibility = "visible";
    homeButton.style.opacity = "1";  
}
bikeButton.onclick = function(){
    activityButtons.style.display = "none";
    submitForm.style.display = "block";
    activityType.innerHTML = "Bike";
    homeButton.style.visibility = "visible";
    homeButton.style.opacity = "1";  
}

let submitButton = document.getElementById("accountabilitySubmit");
let accountability = document.getElementById("accountability");
let userImage = document.getElementById("userImage");

submitButton.onclick = function(){
    let image = accountability.value;
    console.log(image);
    userImage.src = image;
}

// #################### Leaderboard Page ####################
let leaderBoardButton = document.getElementById("leaderBoardButton");
let leaderboard = document.getElementById("leaderboard")

leaderBoardButton.onclick = function(){
    leaderboard.style.display = "block";
}

    