  <?php
include __DIR__.'/../menu.php';
?>
<div class="wrapper fadeInDown d-flex flex-row justify-content-center align-items-center my-flex-container">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first mt-4">
      <img src="asset/img/logo.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Votre identifiant">
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="Mot de passe">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="Home.php">Retourner à l'accueil</a>
    </div>

  </div>
</div>

<?php
  include __DIR__.'/../footer.php';
  ?>
