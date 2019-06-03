<?php

echo "<script>document.title = '"."About"."';</script>"; //Navbar was setting the wrong title so this changes the webpage title


require "nav.html";  //Separate navbar from each webpage so it is easier to modify

require "about.html";
?>