<!DOCTYPE html>
<html>
<head>
	<title>Brow Salon</title>
	<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/style.css">-->


</head>
<style type="text/css">
	
	 body .package {

    width: 100%;
    padding: 5%;
    background-color: white opacity:0.5%;
    height: 1800px;
    display: block;
    position: relative;

  }
  .package .col-sm-11{

display: inline-block;
  width: 90%;
  height: auto;
  float: left;
  clear: right;
  border: 1px solid white;
  border-radius: 5px;
  box-shadow: 1px 5px 11px 3px black;
  background-color: white;
  margin-left:5%;
  margin-top: 3%;
  text-align: center;
  padding:0px; 
  margin-bottom: 5%;



}
.package .col-sm-11 .services {
    width: 80%;
    height: auto;
    border: 3px solid gold;
    margin: 0 auto;
        margin-bottom: 0px;
    margin-bottom: 5%;
    background: black;
    font: white;
}
.package .col-sm-11:hover{

   -webkit-transition: all 1s;
    -moz-transition: all 1s;
    transition: all 1s;
  -o-transition: all 1s ease-in-out;
  -ms-transition: all 1s ease-in-out;
    -webkit-box-shadow: 15px 15px 40px 15px #aaa;
    -moz-box-shadow: 15px 15px 40px 15px #aaa;
    box-shadow: 15px 15px 40px 15px gold;
}
.w3l_header {
    font-size: 3em;
    color: gold;
    letter-spacing: 1px;
    position: relative;
    font-weight: 600;
    text-align: center;
}
.w3l_header span {
    color: gold;
    font-weight: 600;
}
.w3l_header:after {
    border-top: 2px solid GOLD;
    display: block;
    width: 300px;
    content: "*";
    margin: 8px auto 0;
}

#borderimg { 
  border: 20px solid transparent;
  padding: 15px;
  border-image: url(border.png) 30 round;
}
.packages .col-sm-11 .service .colm {width: 50%;

box-sizing: border-box;
background-color: gray;
height: 10px;

}

.wthree_head_section p {
    width: 100%;
    text-align: center;
    font-size: 2em;
}
.wthree_head_section{
	margin-bottom:4em;
}
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
    width: 80%;
    margin: 0 auto;
    border-top: 5px double orange;
    border-bottom:  5px outset orange;
  margin-bottom: 5%;

}
#customers td {
    font-weight: 900;
    letter-spacing: 1px;
    word-spacing: 3px;
    font-style: italic;
    font-family: unset;
}

 #customers td,  #customers th {
  /*border: 1px solid #ddd;*/
  padding: 8px;
  font-size: 15px;
  text-align: center;
  color: goldenrod;
}

 tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover 
{
  background-color: #ddd;
  border-bottom: 5px double black;

}


 #customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: transparent;
  color: goldenrod;
  font-weight: 900;
  font-size: 25px;
  border-bottom: 5px double orange;

}


</style>

<body>
<div class="package">
  <div class="col-sm-11">
				  <div class="container">
						    <div class="wthree_head_section">
						      <h3 class="w3l_header">Our <span>Services</span></h3>
						      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
						    </div>  
				     </div>
             <div class="services">
                  <h3 id="borderimg" class="w3l_header"> <span>THREADING</span></h3>
             
<table id="customers">
  <tr>
    <th>SERVICE NAME</th>
    <th>PRICE</th>
    
  </tr>
  <tr>
    <td>Eyebrows</td>
    <td>$23</td>
    
  </tr>
  <tr>
    <td>Upperlip</td>
    <td>$15</td>
    
  </tr>
  <tr>
    <td>Chin</td>
    <td>$15</td>
    
  </tr>
  <tr>
    <td>sideburns</td>
    <td>$17</td>
    
  </tr>
  <tr>
    <td>Neck</td>
    <td>$15</td>
    
  </tr>
  <tr>
    <td>Forehead</td>
    <td>$15</td>
    
  </tr>
  <tr>
    <td>Eyebrow $ Upperlip</td>
    <td>$32</td>
    
  </tr>
  <tr>
    <td>Upperlip & Chin</td>
    <td>$26</td>
    
  </tr>
  <tr>
    <td>Full Face Threading</td>
    <td>$60</td>
    
  </tr>
  </table>



<h3 id="borderimg" class="w3l_header"> <span>TINTING</span></h3>
             
<table id="customers">
  <tr>
    <th>SERVICE NAME</th>
    <th>PRICE</th>
    
  </tr>
  <tr>
    <td>Eyebrows</td>
    <td>$15</td>
    
  </tr>
  <tr>
    <td>Eyelashes</td>
    <td>$20</td>
    
  </tr>
  
</table>




<h3 id="borderimg" class="w3l_header"> <span>HENNA BROWS</span></h3>
             
<table id="customers">
  <tr>
    <th>SERVICE NAME</th>
    <th>PRICE</th>
    
  </tr>
  <tr>
    <td>Brow Henna</td>
    <td>$40</td>
    
  </tr>
  <tr>
    <td>Brow Threading and Brow Hemma</td>
    <td>$40</td>
    
  </tr>
  
</table>





<h3 id="borderimg" class="w3l_header"> <span>EYELASH EXTENSIONS</span></h3>
             
<table id="customers">
  <tr>
    <th>SERVICE NAME</th>
    <th>PRICE</th>
    
  </tr>
  <tr>
    <td>Classique Set<code>(30Lashes)</code></td>
    <td>$90</td>
    
  </tr>
  <tr>
    <td>Glamour  Set<code>(60Lashes)</code></td>
    <td>$165</td>
  </tr>
  <tr>
    <td>Ultimate Set<code>(100Lashes)</code></td>
    <td>$210</td>
  </tr>
  <tr>
    <td>Refills Set<code>(2 Week)</code></td>
    <td>$60</td>
  </tr>
  <tr><td>Refills<code>(3 Week)</code></td>
    <td>$70</td>
  </tr>
  <tr>
    <td>Removal</td>
    <td>$25</td>
    
  </tr>
  </table>


<h3 id="borderimg" class="w3l_header"> <span>LASH LIFTING</span></h3>
             
<table id="customers">
  <tr>
    <th>SERVICE NAME</th>
    <th>PRICE</th>
    
  </tr>
  <tr>
    <td>Lash Lift</td>
    <td>$70</td>
    
  </tr>
  <tr>
    <td>Lash Lift and Lash Tint</td>
    <td>$80</td>
    
  </tr>
  
</table>



<h3 id="borderimg" class="w3l_header"> <span>PACKAGES</span></h3>
             
<table id="customers">
  <tr>
    <th>SERVICE NAME</th>
    <th>PRICE</th>
    
  </tr>
  
  <tr>
    <span><td colspan="2" style="text-align: left;">Signature Brows</td></span>
    
    
  </tr>

  <tr>
    <td>-   Brow Threading + Brow Tint</td>
    <td>$35</td>
    
  </tr>
  <tr>
    <td>-   Brow Threading + Lash Tint</td>
    <td>$40</td>
    
  </tr>
  <tr>
    <span><td colspan="2" style="text-align: left;">Brow Make Over</td></span>
    
    
  </tr>
  <tr>
    <td>-   Brow Threading + Brow and Lash Tint</td>
    <td>$52</td>
    
  </tr>
  
</table>






              </div>


        

		
 </div>
</div>



</body>
</html>
