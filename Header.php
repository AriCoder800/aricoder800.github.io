<?php echo '

<style>
 
 /* MAINHEADER DETAIL */

.mainHeader {
height: 75px;
width:100vw;
background-color:rgba(20,20,20,.8);
display:flex;
justify-content:space-around;
align-items:center;
position:fixed;
top:0;
left:0;
z-index:100;
color:white;
font-size:20px;
border-bottom-right-radius:100% 50%;
border-bottom:1px solid rgba(220,220,220,.1);
box-shadow: 0 1px 5px rgba(220,220,220,.1);
}



.headClick {
height:auto;
margin: 0 30px;
font-weight:700;
color:rgba(220,220,220,.9);

}

.headClickImg {
height:50px;
width: 50px;

display:flex;
}

.headClickImg img {
height:100%;
width:100%;
object-fit:cover;

}

.headClickTitle {
font-weight:900;
margin-left:5px;
height:20px;
}

.headClickBlock {
display:flex;
align-items:center;
}

.headClickImge {
height:40px;
width:10px;

}

.headClickImge img {
height:100%;
}


.dropDown {
width:200px;
height: 0;
overflow:hidden;
background-color:rgba(220,220,220,.9);
position:fixed;
top:0;
right:0;
z-index:200;
border-bottom-left-radius:10% 10%;
color:black;
transition:.5s;
}

.menuItem {
width:100%;
padding:20px;
border-top:1px solid rgba(220,220,220,.9);
}

.closeMenu {
width:100%;
padding:20px;
}

.clo {
height:20px;
width:20px;
}

.clo img {
height:100%;
}

.invisible {
display:none;
}
 </style>
 
 
	    <!-- HEADER.PHP -->
<div class="mainHeader">
    
    <div class="headClickBlock">
      <a href="https://changefloridatoday.com">  <div class="headClickImg"><img src="800orange2.png" alt=""></div></a>
<a href="https://changefloridatoday.com">    <div class="headClickTitle">changefloridatoday.com</div></a>
    </div>
    
    <div class="headClick"></div>
    <div class="headClick"></div>
    
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
