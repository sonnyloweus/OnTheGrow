<!-- ##################### PHP ################ -->
<?php
    include('templates/connect_db.php');
    $sql = "TRUNCATE TABLE currentUser";
    if (mysqli_query($conn, $sql)) {
    } else {
    }

    include('templates/connect_db.php');

    $loggedIn = false;
    if(isset($_GET['submitRegister'])){
        //getting data ready for import
        $username = mysqli_real_escape_string($conn, $_GET['username']);
        $password = mysqli_real_escape_string($conn, $_GET['password']);
        $email = mysqli_real_escape_string($conn, $_GET['email']);
        $location = mysqli_real_escape_string($conn, $_GET['location']);

        $testUser = strtolower($username);

        $sql = "SELECT * FROM members WHERE username = '$testUser'";
        //make query + result
        $result = mysqli_query($conn, $sql);
        //fetch array from result
        $member = mysqli_fetch_assoc($result);
        if($member){
            echo 'Username is taken';
        }else{
            //create sql
            $sql = "INSERT INTO members(username, password, email, location) VALUES('$username', '$password', '$email', '$location')";

            //save to db
            if(mysqli_query($conn, $sql)){
                //creat sql
                $sql = "SELECT * FROM members WHERE username = '$username'";
                //make query + result
                $result = mysqli_query($conn, $sql);
                //fetch array from result
                $member = mysqli_fetch_assoc($result);
                $loggedIn = true;

                $pointCount = $member['points'];
                $sql = "INSERT INTO $location(username, points) VALUES('$username', '$pointCount')";
                if(mysqli_query($conn, $sql)){
                }else{
                }

            }else{
                echo 'query error';
            }

        }
    }

    if(isset($_GET['submitLogin'])){
        $username = mysqli_real_escape_string($conn, $_GET['username']);
        $password = mysqli_real_escape_string($conn, $_GET['password']);

        //creat sql
        $sql = "SELECT * FROM members WHERE username = '$username'";
        //make query + result
        $result = mysqli_query($conn, $sql);
        //fetch array from result
        $member = mysqli_fetch_assoc($result);

        if(!$member){
            echo 'Your password or username is incorrect';
        }else{
            if($member['password'] == $password){
                $loggedIn = true;
                //echo 'Successfully logged in as ' . $username;
            }else{
                echo 'Your password or username is incorrect';
            }
        }
        //free memery of result
        mysqli_free_result($result);
    }


    // write query for all members
    //$sql = 'SELECT username, password, email FROM members';
    //make query and get results
    //$result = mysqli_query($conn, $sql);
    // fetch the resulting records to an array
    //$members = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    //free memery of result
    //mysqli_free_result($result);
    //closes connection
    mysqli_close($conn);

    //print_r($members);
?>


<!-- ##################### html ################ -->
<!DOCTYPES html>
<html>


    <!-- ##################### content ################ -->
    <?php include('templates/menu.php'); ?>
    <?php include('templates/header.php'); ?>
    

    <!-- ##################### Pages ################# -->
    <?php
        if (!$loggedIn){
            include('templates/loginSystem.php'); 
        }else{
            include('templates/profile.php');
        }
    ?>

    <?php include('templates/aboutUs.php') ?>

    <?php include('templates/home.php') ?>

    <?php include('templates/goingGreen.php') ?>

    <?php include('templates/inbox.php') ?>

    <?php include('templates/myForest.php') ?>

    <?php 
        if(!$loggedIn){
            include('templates/connect_db.php');
            $sql = "TRUNCATE TABLE currentUser";
            if (mysqli_query($conn, $sql)) {
            } else {
            }
            $points = 0;
        }else{
            include('templates/connect_db.php');
            $sql = "INSERT INTO currentUser(username) VALUES('$username')";
            if(mysqli_query($conn, $sql)){
            }else{
            }
            if(isset($_GET['verify'])){
                include('templates/connect_db.php');
                $newScore = $member['points'] + 10;
                $sql = "UPDATE members SET points='$newScore' WHERE username='$username'";
                if (mysqli_query($conn, $sql)) {
                    $theHREF =  $_SERVER['REQUEST_URI'];
                    $length = strlen($theHREF);
                    $newHREF = substr($theHREF, 0, $length-11);
                    echo "<script> window.location = '$newHREF ';</script>";
                } else {
                    echo "Error updating record: " . mysqli_error($conn);
                }

            }

            include('templates/connect_db.php');
            $sql = "SELECT * FROM members WHERE username = '$username'";
            //make query + result
            $result = mysqli_query($conn, $sql);
            //fetch array from result
            $member = mysqli_fetch_assoc($result);

            $points = $member['points']; 


            $python =  `publicCompetition.py`;
        }


        if(isset($_GET['created'])){
    
            $theHREF =  $_SERVER['REQUEST_URI'];
            $counter = 0;
            $index = 0;
            for ($i = 0; $i < strlen($theHREF); $i++){
                if($theHREF[$i] == "&"){
                    $counter++;
                }
                if($counter == 1){
                    $index = $i;
                    break;
                }
            }
            $index = $index-26;
            $theName = substr($theHREF, 26, $index);

            $doneName = "";

            for ($i = 0; $i < strlen($theName); $i++){
                if($theName[$i] == "+"){
                    $doneName = $doneName . " ";
                }else{
                    $doneName = $doneName . $theName[$i];
                }
            }
            

            include('templates/connect_db.php');
            $competition = mysqli_real_escape_string($conn, $_GET['created']);

            $sql = "UPDATE members SET newSubmition='$competition' WHERE username='$doneName'";
            if (mysqli_query($conn, $sql)) {
                $theHREF =  $_SERVER['REQUEST_URI'];
                $counter = 0;
                $index = 0;
                for ($i = 0; $i < strlen($theHREF); $i++){
                    if($theHREF[$i] == "&"){
                        $counter++;
                    }
                    if($counter == 3){
                        $index = $i;
                        break;
                    }
                }

                $newHREF = substr($theHREF, 0, $index);
                echo "<script> window.location = '$newHREF ';</script>";
            } else {
            }

            //######################################

            // if(isset($_GET['created'])){
            //     // $python = `publicCompetition.py`;
            //     echo 
            // }
        }


        
    ?> 

    <?php include('templates/leaderboard.php') ?>


    <!-- <h5> Points:</h5> -->
    
    <!-- ##################### python ################ -->
    <?php 
        // $python = `index.py`;
        // echo $python;    
    ?>

    <!-- ##################### content ################ -->
    <button id="homeButton">🏡</button>
    <?php include('templates/footer.php') ?>
    
    <!-- ##################### Js ################ -->

    <script>
        let loggedIn = "<?php echo "$loggedIn"?>";
    </script>

    <script src="js/index.js"></script>
    <script src="js/transitions.js"></script>
</html>