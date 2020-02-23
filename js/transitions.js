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
    plusSign.style.display = "block";
    mainTitle.style.display = "block"; 
    home.style.display = "block";
    activityButtons.style.display = "block";
    carSubmit.style.display = "none";
    busSubmit.style.display = "none";
    trainSubmit.style.display = "none";
    bikeSubmit.style.display = "none";
    verificationSent.style.display = "none";
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
let carSubmit = document.getElementById("carSubmit");
let busSubmit = document.getElementById("busSubmit");
let trainSubmit = document.getElementById("trainSubmit");
let bikeSubmit = document.getElementById("bikeSubmit");
let homeForm = document.getElementById("homeForm");
let mainTitle = document.getElementById("mainTitle");
let plusSign = document.getElementById("plusSign");
let verificationSent = document.getElementById("verificationSent");

//homeForm.action = window.location.href;

carpoolButton.onclick = function(){
    activityButtons.style.display = "none";
    carSubmit.style.display = "block";
    activityType.innerHTML = "Carpool";
    homeButton.style.visibility = "visible";
    homeButton.style.opacity = "1";  
    plusSign.style.display = "none";
    mainTitle.style.display = "none";
}
busButton.onclick = function(){
    activityButtons.style.display = "none";
    busSubmit.style.display = "block";
    activityType.innerHTML = "Bus";
    homeButton.style.visibility = "visible";
    homeButton.style.opacity = "1";  
    plusSign.style.display = "none";
    mainTitle.style.display = "none";
}
trainButton.onclick = function(){
    activityButtons.style.display = "none";
    trainSubmit.style.display = "block";
    activityType.innerHTML = "Train";
    homeButton.style.visibility = "visible";
    homeButton.style.opacity = "1";  
    plusSign.style.display = "none";
    mainTitle.style.display = "none";
}
bikeButton.onclick = function(){
    activityButtons.style.display = "none";
    bikeSubmit.style.display = "block";
    activityType.innerHTML = "Bike";
    homeButton.style.visibility = "visible";
    homeButton.style.opacity = "1"; 
    plusSign.style.display = "none";
    mainTitle.style.display = "none"; 
}

let submitButton = document.getElementById("accountabilitySubmit");
let accountability = document.getElementById("accountability");
let userImage = document.getElementById("userImage");
let forms = document.getElementById("verify");

function verifyButton(type){
    carSubmit.style.display = "none";
    busSubmit.style.display = "none";
    trainSubmit.style.display = "none";
    bikeSubmit.style.display = "none";
    verificationSent.style.display = "block";
    forms.reset();
    let activity = type;
    setTimeout(function(){window.location = window.location.href + '&verify=' + activity;}, 1000);
}

// #################### Leaderboard Page ####################
let leaderBoardButton = document.getElementById("leaderBoardButton");
let leaderboard = document.getElementById("leaderboard")

leaderBoardButton.onclick = function(){
    leaderboard.style.display = "block";
    leaderboard.style.width = "100px";
    leaderboard.style.height = "100px";
}

    