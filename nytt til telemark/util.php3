<?php
 
  // Skriver ut et pent formatert telefonnummer, hvis dette er
  // akkurat 8 tegn langt.
 
  function prettyPhone($p) {
    if (strlen($p) == 8) {
      return substr($p, 0, 2)."&nbsp;".substr($p, 2, 2)."&nbsp;"
            .substr($p, 4, 2)."&nbsp;".substr($p, 6, 2);
    }
    else {
      return "";
    }
  }
 
?>