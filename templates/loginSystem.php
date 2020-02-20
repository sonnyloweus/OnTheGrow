<div class="loginSystem">
    <div class="buttons">
        <button id="RegisterButton">Register</button>
        <button id="LoginButton">Login</button>
        <button id="showHide">👁️</button>
    </div>

    <div class="memberSystem">
        <div class="register" id="register">
            <h3 id="registerTitle">Register</h3>

            <form class="registerForm" action="index.php" methond="GET" autocomplete="off">
                <label>Username* :</label> <br>
                <input type="text" name="username" required> <br>
                <label>Password* :</label> <br>
                <input id="registerPass" type="password" name="password" required> <br>
                <label>Email* :</label> <br>
                <input type="text" name="email" required> <br>
                <label>City* :</label> <br>
                <select class="location" type="text" name="location" required>
                    <option value="" disabled selected>--- Choose ---</option>
                    <option value="Cupertino">Cupertino</option>
                    <option value="San_Jose">San Jose</option>
                    <option value="Pleasonton">Pleasanton</option>
                    <option value="San_Francisco">San Francisco</option>
                    <option value="Palo_Alto">Palo Alto</option>
                    <option value="EverGreen">Evergreen</option>
                </select> <br>
                <input id="submit" type="submit" name="submitRegister" value="submit">
            </form>

        </div>

        <div class="login" id="login">
            <h3 id="loginTitle">Log In</h3>

            <form class="registerForm" action="index.php" methond="GET" autocomplete="off">
                <label>Username* :</label> <br>
                <input type="text" name="username" required> <br>
                <label>Password* :</label> <br>
                <input id="loginPass" type="password" name="password" required> <br>
                <input id="submit" type="submit" name="submitLogin" value="submit">
            </form>

        </div>
    </div>
</div>
