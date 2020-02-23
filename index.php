<!-- ##################### PHP ################ -->
<?php

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
                echo 'Successfully logged in as ' . $username;
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

    <?php include('templates/leaderboard.php') ?>

    <?php 
        if(!$loggedIn){
            $points = 0;
        }else{
            if(isset($_GET['verify'])){
                include('templates/connect_db.php');
                $newScore = $member['points'] + 10;
                $sql = "UPDATE members SET points='$newScore' WHERE username='$username'";
                if (mysqli_query($conn, $sql)) {
                    $theHREF =  $_SERVER['REQUEST_URI'];
                    $length = strlen($theHREF);
                    $newHREF = substr($theHREF, 0, $length-11);
                    echo $theHREF;
                    echo $newScore;
                    header("Location: ".$newScore);
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
        }
    ?> 

    <h5> Points: <?php echo $points ?> </h5>
    
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
