<?php 


?>

<div id="home" class="home">
    <h1 id="mainTitle">ON THE GROW</h1>
    <h1 id="plusSign">+</h1>
    <div id = "activityButtons" class="activityButtons">
        <button id="carpool"></button>
        <img id="carpoolIcon" src="images/car.png">

        <button id="bus"></button>
        <img id="busIcon" src="images/bus.png">

        <button id="bike"></button>
        <img id="bikeIcon" src="images/bike.png">

        <button id="train"></button>
        <img id="trainIcon" src="images/train.png">
    </div>


    <div id="busSubmit" style="display:none">
        <h1 id="activityType"></h1>
        <h1 id="verified" style="color: #06b690">VERIFICATION ✔</h1>
        <form id="verify"  autocomplete="off">
            <label>Company Name* :</label> <br>
            <input type="Company Name" name="Company Name" placeholder="Muni" required> <br>
            <label>Start Station* :</label> <br>
            <input type="Start Station" name="Start Station" placeholder="Hyde St." required> <br>
            <label>End Station* :</label> <br>
            <input type="End Station" name="End Station" placeholder="McAllister St." required> <br>
            <button type="reset" onclick="verifyButton('bus')" id="accountabilitySubmit">Verify</button>
        </form>
    </div>

    <div id="carSubmit" style="display:none">
        <h1 id="activityType"></h1>
        <h1 id="verified" style="color: #06b690">VERIFICATION ✔</h1>
        <form id="verify"  autocomplete="off">
            <label>Start Location* :</label> <br>
            <input type="Start Location" name="Start Location" required> <br>
            <label>End Location* :</label> <br>
            <input type="text" name="End Location" required> <br>
            <label>Time Traveled (min)* :</label> <br>
            <input type="text" name="Time Traveled (min)" placeholder="70 mins" required> <br>
            <label>Electric* :</label> <br>
            <input type="checkbox" name="Electric/Nonelectric" value type="Electric" required> <br>
            <button type="reset" onclick="verifyButton('car')" id="accountabilitySubmit">Verify</button>
        </form>
    </div>

    <div id="trainSubmit" style="display:none">
        <h1 id="activityType"></h1>
        <h1 id="verified" style="color: #06b690">VERIFICATION ✔</h1>
        <form id="verify"  autocomplete="off">
            <label>Which Train* :</label> <br>
            <input type="Which Train" name="Which Train" placeholder="Caltrain" required> <br>
            <label>Start Station* :</label> <br>
            <input type="Start Station" name="Start Station" placeholder="Richmond" required> <br>
            <label>End Station* :</label> <br>
            <input type="End Station" name="End Station" placeholder="RockBridge" required> <br>
            <button type="reset" onclick="verifyButton('tra')" id="accountabilitySubmit">Verify</button>
        </form>
    </div>

    <div id="bikeSubmit" style="display:none">
        <h1 id="activityType"></h1>
        <h1 id="verified" style="color: #06b690">VERIFICATION ✔</h1>
        <form id="verify"  autocomplete="off">
            <label>Start Location* :</label> <br>
            <input type="Start Location" name="Start Location" required> <br>
            <label>End Location* :</label> <br>
            <input type="End Location" name="End Location" required> <br>
            <label>Time of Travel (mins)* :</label> <br>
            <input type="Time of Travel (min)" name="Time of Travel (min)" placeholder="30 mins" required> <br>
            <button type="reset" onclick="verifyButton('bik')" id="accountabilitySubmit">Verify</button>
        </form>
    </div>

    <h1 id="verificationSent">Verification Sent!</h1>

</div>