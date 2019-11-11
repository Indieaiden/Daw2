<?php

if (strlen("qwertyu")==7) {
  echo 'strlen("qwertyu")==7 es true';//si true
}else{
  echo 'strlen("qwertyu")==7 es false';//si false
}
if (strlen("qwertyu")=="7") {
  echo "12<br>";//si true
}else{
  echo "02<br>";//si false
}
if (strlen("qwertyu")===7) {
  echo "13<br>";//si true
}else{
  echo "03<br>";//si false
}
if (strlen("qwertyu")==="7") {
  echo "14<br>";//si true
}else{
  echo "04<br>";//si false
}


 ?>
