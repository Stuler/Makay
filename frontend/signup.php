<?php 
    include 'partials/header.php'; 
    $inputsize = 30;
?>

<main class="container">

    <div class="signupform" id="signupform">
        <p>Start by creating your account. Already have one? Sign in 
            <a href="login.php">here</a>.</p>
        <fieldset>
            <form action="signup.php" method="post">
                <p class="formline">
                    <article>Username </br></article>
                    <input type="text" name="username" size=<?php echo $inputsize ?> maxlength="30"/>
                </p>

                <p class="formline">
                    <article>Email </br></article>
                    <input type="email" name="email" size=<?php echo $inputsize ?>/>
                </p>

                <p class="formline">
                    <article>Password </br></article>
                    <input type="password" name="password" size=<?php echo $inputsize ?> maxlength="30"/>
                </p>

                <p><input type="submit" class="submit-btn" name="submit" value="Create Account"/></p>
            </form>
        </fieldset>
        <p>By submitting this form you accept our 
            <a href="terms_of_use.php">Terms of Use</a>.</p>
    </div>

</main>

<?php include 'partials/footer.php'; ?>