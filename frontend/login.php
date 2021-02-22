<?php 

    include 'partials/header.php'; 
    $inputsize = 30;
?>

<main class="container">

    <div class="loginform" id="loginform">
        <p>
            Start by signing in.
        </p>
        <fieldset>
            <form action="login.php" method="post">
                <p class="formline">
                    <article>Username </br></article>
                    <input type="text" name="username" size=<?php echo $inputsize ?> maxlength="30"/>
                </p>

                <p class="formline">
                    <article>Password </br></article>
                    <input type="password" name="password" size=<?php echo $inputsize ?> maxlength="30"/>
                </p>

                <p><input type="submit" class="submit-btn" name="submit" value="SIGN IN"/></p>
            </form>
        </fieldset>
        <p>Not registered yet?  
            <a href="signup.php">Create an account.</a>.</p>
    </div>

</main>

<?php include 'partials/footer.php'; ?>