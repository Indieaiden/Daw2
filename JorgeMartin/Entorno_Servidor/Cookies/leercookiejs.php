<?php include_once("header.php"); ?>

<?php
 ?>

<script type="text/javascript">
function leerCookie(nombre) {
  if (document.cookie.lenght==0) return null;
  var trozo1 = new RegExp("; ", "g");
  var trozo2 = new RegExp("=", "g");
  var listaCookie=document.cookie.split(trozo1);

  for (var i=0; i<listaCookie.length; i++) {
    var cookie = listaCookie[i].split(trozo2);

      if(cookie[0] == nombre){
        return cookie[1];
      }
      else return null;
  }
}


document.write(leerCookie("cookie1"));
</script>
<?php include_once("footer.php"); ?>
