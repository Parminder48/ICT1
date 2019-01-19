
<!DOCTYPE html>
<html>
<head>
  <title>Brow Salon</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

</head>
<style type="text/css">
  
   body .package {

    width: 100%;
    padding: 5%;
    background-color: white opacity:0.5%;
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
  box-shadow: 1px 5px 11px 3px lightblue;
  background-color: white;
  margin-left:5%;
  margin-top: 3%;
  text-align: center;
  padding:0px; 



}

.package .col-sm-11:hover{

   -webkit-transition: all 1s;
    -moz-transition: all 1s;
    transition: all 1s;
  -o-transition: all 1s ease-in-out;
  -ms-transition: all 1s ease-in-out;
    -webkit-box-shadow: 15px 15px 40px 15px #aaa;
    -moz-box-shadow: 15px 15px 40px 15px #aaa;
    box-shadow: 15px 15px 40px 15px lightblue;
}
.w3l_header {
    font-size: 3em;
    color: #262c38;
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
    border-top: 2px solid blue;
    display: block;
    width: 300px;
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
  
    padding: 9em;
    background: #ffe5e5;
    margin-top: 4em;
    height: auto;
    width: 100%;
    border-radius: 35px 0px 35px 0px;
    border: 5px double deeppink;

}
.box1 span i {
    color: #212121;
    font-size: 14px;
    text-transform: uppercase;
    font-style: normal;
    width: 9%;
    margin: .8em 82px 20px;
}
.box1 input[type="text"],.box1 input[type="date"],.box1 input[type="password"],.box1 input[type="email"],.box1 textarea,select ,option{
 
    outline: none;
    width: 50%;
    background: #fff;
    color: black;
    padding: 10px;
    font-size: 25px;
    border: 4px solid #E7E7E7;
}
.box1 input[type="text"]:hover,.box1 input[type="date"]:hover,.box1 input[type="password"]:hover,.box1 input[type="email"]:hover,.box1 textarea:hover,.box1 select:hover,.box1 option:hover{

  background-color: #ffe5e5;
  box-shadow: 3px 3px 3px 3px black;
  transition: 1s;
  outline: 1px solid black; opacity:0.5;

}
::-webkit-input-placeholder{
  color:#212121 !important;
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
    width: 25%;
    background: #ba4659;
    color: #fff;
    padding: 10px 0;
    font-size: 14px;
    text-transform: uppercase;
    border: none;
    margin:.5em 0 0 18em;
}
.box1 input[type="submit"]:hover{
    background:#fcb316;
    color: #fff;
  box-shadow: 3px 3px 3px 3px black;
  transition: 1s;
  outline: 1px solid black; opacity:0.5;
}
.contact-w3-agile {
    padding: 5em 0;
}
.box1 .link{

  display: inline-block;
  
   text-decoration: none;
   font-size: 1.5em;
   text-align: center;
    color: white;  
   outline: none;
    width: 25%;
    background: #ba4659; 
    padding: 10px 0;
    font-size: 14px;
    text-transform: uppercase;
    border: none;
}
.box1 .link:hover{
    background:#fcb316;
    color: #fff;
  box-shadow: 3px 3px 3px 3px black;
  transition: 1s;
  outline: 1px solid black; opacity:0.5;
}
/*-- //mail --*/




</style>

<body>
<div class="package">
  <div class="col-sm-11">
          <div class="container">
                <div class="wthree_head_section">
                  <h3 class="w3l_header">Log In <span>Here</span></h3>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                </div>  
             </div>


          
      <div class="contact-w3-agile col-md-11" style="margin-top: -5%; margin-left: 5%;">
     
      
          <div class="box1">
            <form method="post" action="<?php echo base_url();?>index.php/Welcome/isLoginUser">
              <span>
                <i>User Email</i>
                <input type="text" name="uname" placeholder=" " required="">
              </span>
             
             <span>
                <i>Password</i>
                <input type="password" name="password" placeholder=" " required="">
              </span>
             
             
              <input type="submit"  name="login" value="LOG IN">
              <a href="<?php echo base_url();?>index.php/Welcome/loadSignup" class="link">SIGN UP HERE</a>

            </form>

          </div>
        </div>

  
 </div>
</div>



</body>

</html>




<!-- 
$qry = mysql_query("insert into user_register (`user_name`, `user_bdate`,`user_address`,`user_gender`,`user_contactNo`,`user_email`,`user_password`) values ('".$_POST['uname']."','".$_POST['birthdate']."','".$_POST['address']."','".$_POST['gender']."','".$_POST['contactno']."','".$_POST['email']."','".$_POST['password']."')"); -->