<?php
    require APPROOT . '/views/includes/header.php';
?>


<div class="container-login">
    <div class="wrapper-login">
        <h2>Sign in</h2>

        <form action="<?php echo URLROOT; ?>/users/login" method ="POST">
            <input type="text" placeholder="Username *" name="username">

            <input type="password" placeholder="Password *" name="password">

            <button id="submit" type="submit" value="submit">Submit</button>

            <p class="options">Not registered yet? <a href="<?php echo URLROOT; ?>/users/register">Create an account!</a></p>
        </form>
    </div>
</div>

<?php
   require APPROOT . '/views/includes/footer.php';
?>
