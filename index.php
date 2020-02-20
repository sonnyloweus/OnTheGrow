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

        $sql = "SELECT * FROM members WHERE username = '$username'";
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
    <?php include('templates/header.php'); ?>
    <!-- ##################### content ################ -->
    
    <?php include('templates/menu.php'); ?>

    <!-- ##################### Pages ################# -->
    <?php
        if (!$loggedIn){
            include('templates/loginSystem.php'); 
        }else{
            include('templates/profile.php');
        }
    ?>

    
    <!-- ##################### python ################ -->
    <?php 
        // $python = `index.py`;
        // echo $python;    
    ?>

    <!-- ##################### content ################ -->
    <?php include('templates/footer.php') ?>
    
    <!-- ##################### Js ################ -->
    <script type="text/javascript">
        let loggedIn = "<?php echo "$loggedIn"?>"
    </script>
    <script src="index.js"></script>
</html>


hi there