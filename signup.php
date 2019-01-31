
<!DOCTYPE html>
<html>
<head>
  <title>Brow Salon</title>

 
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.css">

</head>
<style type="text/css">
   .slider1{
      display:none;
  }
    
.dropdown .dropbtn{
        display: inline-block;
   
    background: transparent;

 position: absolute;
    top: -38px;
    left:-18px;
  width:25%;
  height:100px;
  padding:1px;
  
}

.dropdown .logo1 {
    width: 84%;
    height: 60px;
    right: 4;
    top: -15px;
    margin-top: 1%;
    display: inline-block;
    position: absolute;
}

   
   body .package {

  width: 100%;  
  height: 1200px;
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
  margin-top: 0%;
  text-align: center;
  padding:0px; 



}

.package .col-sm-11:hover{

   -webkit-transition: all 1s;
    -moz-transition: all 1s;
    transition: all 1s;
  -o-transition: all 1s ease-in-out;
  -ms-transition: all 1s ease-in-out;
    -webkit-box-shadow: 15px 15px 20px 15px #aaa;
    -moz-box-shadow: 15px 15px 20px 15px #aaa;
    box-shadow: 15px 15px 20px 15px gold;
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
    color: #545151; 
    font-weight: 200;
}
.w3l_header:after {
    border-top: 2px solid gold;
    display: block;
    width: 80%;
    content: "*";
    margin: 8px auto 0;
}
.wthree_head_section p {
    width: 100%;
    text-align: center;
    font-size: 2em;
}
.wthree_head_section{
  margin-bottom:.1em;
}



.box1{
  padding:3em;
  background:black;
  margin-top: 4em;
  margin-left:8%;
  height: 980px;
  border:5px double gold;
   border-radius: 35px 0px 35px 0px;
}
.box1 span i {

    color: white;
    font-size: 14px;
    text-transform: uppercase;
    font-style: normal;
    float: left;
    width: 100%;
    margin: 0.8em 20px 4px;
    text-align: left;

}
.box1 input[type="text"],.box1 input[type="date"],.box1 input[type="password"],.box1 input[type="Email"],.box1 textarea,select ,option{
  outline: none;
    width: 94%;
    background: #fff;
    color: #212121;
    padding: 10px;
    font-size: 14px;
    border: 1px solid #E7E7E7;
}
.box1 input[type="text"]:hover,.box1 input[type="date"]:hover,.box1 input[type="password"]:hover,.box1 input[type="email"]:hover,.box1 textarea:hover,.box1 select:hover,.box1 option:hover{

  background-color: gold;
  color:black;

}
::-webkit-input-placeholder{
  color:black !important;
}
.box1 span {
    padding: .5em 0;
    display: block;
}
.box1 textarea{
  min-height:200px;
}
.box1 input[type="submit"]{
  outline: none;
    width: 35%;
    background: goldenrod;;
    color: black;
    padding: 10px 0;
    font-size: 14px;
    text-transform: uppercase;
    border: none;
    margin:.5em 0 0 6.7em;
}
.box1 input[type="submit"]:hover{
    
    color: white;
  
}
.contact-w3-agile {
    padding: 5em 0;
}
/*-- //mail --*/

@media only screen and (min-width: 0px) and (max-width: 450px)  {
    .box1{
  
    padding: 15px;
    background: black;
    
    margin:0%;
    height: auto;
    width: 100%;
    border-radius: 35px 0px 35px 0px;
    border: 5px double gold;

}
   body .package {

    width: 100%;
    margin-top:15%;
    display: block;
    position: relative;

}

    .box1 input[type="text"], .box1 input[type="date"], .box1 input[type="password"], .box1 input[type="email"], .box1 textarea, select, option {
    outline: none;
    width: 100%;
    background: #fff;
    color: black;
    padding: 10px;
    font-size: 15px;
    border: 4px solid #E7E7E7;
}
.box1 .link {
    display: inline-block;
    text-decoration: none;
    font-size: 1.5em;
    text-align: center;
    color: black;
    outline: none;
    width: 50%;
    margin: 5%;
    background: goldenrod;
    padding: 10px 0;
    font-size: 14px;
    text-transform: uppercase;
    border: none;
}
.box1 input[type="submit"] {
    outline: none;
    width: 50%;
    background: goldenrod;
    color: black;
    padding: 10px 0;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    border: none;
    margin: 1.5em -1px 0 0em;
    box-sizing: border-box;
}
}





</style>

<body>
<div class="package">
  <div class="col-sm-11">
          <div class="container">
                <div class="wthree_head_section">
                  <h3 class="w3l_header">sign Up <span>Here</span></h3>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                </div>  
             </div>          
      <div class="contact-w3-agile col-md-11">   
          <div class="box1">
            <form method="post" action="<?php echo base_url();?>index.php/Welcome/addUser">
              <span>
                <i>User Name</i>
                <input type="text" name="uname" placeholder="User Name" required="">
              </span>
              <span>
                <i>Birthdate</i>
                <input type="date" name="birthdate" placeholder="Birth Date" required="">
              </span>
              <span>
                <i>Contact NO</i>
                <input type="text" name="contactno" placeholder="Contact Number" required="">
              </span>
              <span>
                <i>Email Address</i>
                <input type="email" name="email" placeholder="Email Address" required="">
              </span>
              <span>
                <i>Password</i>
                <input type="password" name="password" placeholder="Password" required="">
              </span>
              <span>
                <i>Address</i>
                <textarea name="address" placeholder="Address" required=""></textarea>
              </span>
              <span>
                <i>Gender</i>
                       <select name="gender">
            <option value="">Select Gender</option>
                         <option value="male">Male</option>
                          <option value="Female">Female</option>
                       </select>
              </span>
              <input type="submit"  name="register" value="register">
            </form>
        <h2 style="color:gold;"><?php echo $this->session->flashdata('signup'); ?></h2> 
          </div>
        </div>
 </div>
</div>
</body>
</html>