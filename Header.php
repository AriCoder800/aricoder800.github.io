<?php echo '

<style>
 

 </style>
 
 
	    <!-- HEADER.PHP -->
<div class="mainHeader">
    
    <div class="headClickBlock">
      <a href="https://changefloridatoday.com">  <div class="headClickImg"><img src="800orange2.png" alt=""></div></a>
<a href="https://changefloridatoday.com">    <div class="headClickTitle">changefloridatoday.com</div></a>
    </div>
    
    <div class="menuHold">
        
       <a href="petitionList.php"> <div class="headClck"> Petitions</div></a>
  <a href="links.php">  <div class="headClck">FL Facts</div></a>
    <div class="headClck">Our Mission</div>    
        <div class="headClck">Supporters</div> 
        
           </div><!-- menuHold -->
           
           
    <div class="headClickImge" onclick="openMenu()">•••</div> 
    
    
</div>
<!-- HEADER.PHP  -->

<!-- DROPDOWN MENU -->

<div class="dropDown" id="dropDown">
    
    
    <div class="closeMenu" onclick="closeMenu()"><div class="clo"><img src="close.png" alt=""></div></div>
    
    <br/>
    <a href="petitionList.php"><div class="menuItem">Petitions</div></a>
    
    <a href="links.php"><div class="menuItem">Links</div></a>
    
    <div class="menuItem"></div>
    <br/>
    
    <!-- DROPDOWN MENU -->
    
</div><!-- DROPDOWN END -->




<script>
    
    m = document.getElementById("dropDown");
    
    function openMenu() {
    
    m.style.height="250px";
 
    }
    
    
    function closeMenu() {
    
    m.style.height=0;
    }
    
    </script>

	';
	?>
