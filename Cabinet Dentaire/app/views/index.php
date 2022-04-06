<?php
   require APPROOT . '/views/includes/header.php';
?>

<main role="main" id="hero">
  <div id="signin-Container" class="position-absolute top-50 start-50 translate-middle" data-aos="zoom-in" data-aos-delay="100">
    <h1>Authentification</h1>
    <form method="POST" class="column g-3" action="signin">
      <div class="col-12 txt_field">
        <input type="text" name= "Reference" id="Reference" required>
        <span></span>
        <label for="Reference">Referance ID</label>
      </div>

      <input type="submit" value="Login"><br><br>

      <div class="col-12">
        Don't have an account?<a href="signup">Signup here!</a>
      </div>
    </form>
  </div>
</main>



<?php
   require APPROOT . '/views/includes/footer.php';
?>
