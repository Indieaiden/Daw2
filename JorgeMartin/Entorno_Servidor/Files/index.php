<?php include_once("header.php"); ?>

<?php if (isset($_POST["submit"])){
    print_r ($_FILES["fichero"]);
  ?>
</br>
    <a href="<?php echo $_SERVER['PHP_SELF']; ?>\.."> Volver al formulario </a>
  <?php } else { ?>


<form class="subidafichero" action= "<?php echo $_SERVER['PHP_SELF']; ?>" method="post"
  enctype="multipart/form-data">
  <!-- Lo que se pone en el max_file_size son bytes -->
    <input type="hidden" name="max_file_size" value="102400">
    <input type="file" name="fichero" value="fichero">
    <input type="submit" name="submit" value="Enviar">
</form>

<?php } ?>


<?php include_once("footer.php"); ?>
