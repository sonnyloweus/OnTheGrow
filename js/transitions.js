let currentLogin = false;
let currentAbout = false;
let currentGreen = false;
let currentInbox = false;
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
    if(currentInbox) {
        inboxPage.style.display = "none";
        currentInbox = false;
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
    if(currentInbox) {
        inboxPage.style.display = "none";
        currentInbox = false;
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

    if(currentInbox) {
        inboxPage.style.display = "none";
        currentInbox = false;
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
    if(currentInbox){
        inboxPage.style.display = "none";
        currentInbox = false;
    }

    goingGreenPage.style.display = "block";

    homeButton.style.visibility = "visible";
    homeButton.style.opacity = "1";  
}

//#################### Inbox ####################
let inboxButton = document.getElementById("inbox");
let inboxPage = document.getElementById("inboxPage");

inboxButton.onclick = function() {
    home.style.display = "none";
    currentInbox = true;
    if(currentLogin) {
        if(loggedIn == false) {
            loginSystem.style.display = "none";
        } else{
            profile.style.display = "none";
        }
        currentLogin = false;
    }
    if(currentAbout){
        aboutUs.style.display = "none";
        currentAbout = false;
    }

    if(currentGreen){
        goingGreenPage.style.display = "none";
        currentGreen = false;
    }

    inboxPage.style.display = "block";

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
    setTimeout(function(){window.location = window.location.href + '&verify=verified';}, 1000);
}

// #################### Leaderboard Page ####################
let leaderBoardButton = document.getElementById("leaderBoardButton");
let leaderboard = document.getElementById("leaderboard")
let leaderboardPage = document.getElementById("leaderboardPage");

leaderBoardButton.onclick = function(){
    leaderboard.style.display = "block";
    leaderboardPage.style.visibility = "visible";
    leaderboardPage.style.opacity = "1";
}

let homeButton2 = document.getElementById("homeButton2");

homeButton2.onclick = function(){
    location.reload();
}

let addCompetitionsButton = document.getElementById("addCompetitionsButton")
let ViewCompetitionsButton = document.getElementById("ViewCompetitionsButton");
let createAnother = document.getElementById("createAnother")
let myCompetitions = document.getElementById("myCompetitions");

addCompetitionsButton.onclick = function() {
    createAnother.style.display="block";
    myCompetitions.style.display = "none";
}


ViewCompetitionsButton.onclick = function(){
    myCompetitions.style.display = "block";
    createAnother.style.display="none";
}


//######################### Create Competition ##################
let addingSubmit = document.getElementById("addingSubmit");

let adding = document.getElementById("adding");
let created = document.getElementById("created");
let anotherOne = document.getElementById("anotherOne");

function createCompetition(type){
    let competitionName = document.getElementById("competitionName").value;
    let peopleCompetition = document.getElementById("peopleCompetition").value;
    adding.style.display = "none";
    created.style.display="block";
    anotherOne.style.display="block";
    adding.reset();
    setTimeout(function(){window.location = window.location.href + '&created=' + competitionName + ":" + peopleCompetition;}, 2000);
}

anotherOne.onclick = function(){
    adding.style.display = "block";
    created.style.display="none";
    anotherOne.style.display="none";
}

//################################## My Forest Page #######################################################
let myForestButton = document.getElementById("treeIconButton");
let myForest = document.getElementById("myForest")
let myForestPage = document.getElementById("myForestPage");

myForestButton.onclick = function(){
    myForest.style.display = "block";
    myForestPage.style.visibility = "visible";
    myForestPage.style.opacity = "1";
}

let homeButton3 = document.getElementById("homeButton3");

homeButton3.onclick = function(){
    location.reload();
}