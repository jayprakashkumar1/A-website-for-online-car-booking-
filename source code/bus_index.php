<html>

<head>
<title> TU CAR SERVICES HOME PAGE </title>
<link rel="stylesheet" href="css/animate.css">

<script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
    </script>


<script>

function check_for_same()
{
 var source=document.getElementById("search_form").elements[0].value;
 var destination=document.getElementById("search_form").elements[1].value;
 var check="select";

 // document.write(destination);
 //  document.write(check);

 if(source==check)
 {  alert("SELECT A VALID SOURCE ! ");
   return false;
  } else if(destination==check)
 {  alert("SELECT A VALID DESTINATION ! ");
    return false;
   } 
  else
 {


   if(source==destination)
  {  alert("source and destination must be different ");
     return false;
    }
   else
  {  //lert("ha ha not same  ");
     var message= "Wait, SEARCHING...";
     
     var colored_message=message.fontcolor("black");
     colored_message=colored_message.bold();
   //  document.write(colored_message);
   //   setTimeout('window.location="search_bushes.php";', 2000);
     return true;
   }
 }

}


</script>


<link rel="stylesheet" type="text/css" href="bus_index.css"> 
</head>

<body>

<div id="upper_home_page">                       

<ul>
     <li>
          <div id="upper_home_page_left">
 <center> <img src="logo.jpg"/></center>

          </div>
</li>

<li>
       <div id="upper_home_page_middle1" class="wow zoomIn">

<center><p> <font size='4pt' color=white > T.U CAR SERVICE.  </font></p> </center>

          
        </div>     
</li>

<li>
       <div id="upper_home_page_middle2">

<center><a href='route_detail_timing.php'>  <font size='3pt' color=white >  Route & Time Table  </font> </a> </center>

          
        </div>     
</li>

<li>
          <div id="upper_home_page_middle3">

<center><a href='news_notification.php'>  <font size='3pt' color=white > News & Notification </font> </a> </center>


         </div>
</li>

<li>
          <div id="upper_home_page_middle4">

<center><a href='help.php'>  <font size='3pt' color=white >  Help </font> </a> </center>


          </div>
</li>


<li>
          <div id="upper_home_page_right">

<center><a href='admin_login_form_new.php'>  <font size='3pt' color=white > Admin Login </font> </a> </center>


          </div>
</li>

</ul>

</div>

<div id="below_home_page">
<ul>
     <li>
         <div id="sign_up_left" class="wow fadeInRight">
        <?php echo " <font  color=white size='4pt' face= 'verdena'> <center> NEW USERS </center> <br> <center><a href='user_registration.php'>  <font size='5pt' color=yellow >  SIGN UP </font> </a> </center>  </ font>  "; ?>
  
         </div>
    </li>

     <li>
          <div id="bus_slider_outer">

                <div id="bus_slider_inner">

                   <img src="bus_slider_images/car5.jpg"/>
                     <img src="bus_slider_images/car6.jpg"/>
                        <img src="bus_slider_images/car8.jpg">
                          <img src="bus_slider_images/car4.jpg">


                </div>

         </div>
    </li>
    
      <li>
         <div id="login_right" class="wow fadeInLeft">
       <?php echo " <font  color=white size='4pt' face= 'verdena'> <center> EXISTING USERS </center> <br> <center><a href='user_login_form.php'> <font size='5pt' color=yellow > LOGIN  </font> </a> </center>  </ font>  "; ?>
  
         </div>
    </li>
    

  </ul>
  
</div>


<div id="below_slider">


<form action="search_bushes.php" method="POST" name="search_form" id="search_form" onsubmit= "return check_for_same()">                        


<ul>
     <li>
          <div id="source" class="wow fadeInLeft">
<?php echo "<font  color=black size='4pt' face= 'verdana'>SOURCE : </font>"; ?>  
<select name="source">
<option class="input_area"  value="select">SELECT*</option>
<option class="input_area"  value="Tezpur University">TEZPUR UNIVERSITY </option>
<option class="input_area"  value="Tezpur">TEZPUR</option>
</select> <br>

          </div>
</li>

<li>
       <div id="destination" class="wow fadeInDown">

<?php echo "<font  color=black size='4pt' face= 'verdana'>DESTINATION : </font>"; ?>   
<select name="destination" >
<option class="input_area"  value="select">SELECT*</option>
<option class="input_area" value="Tezpur">TEZPUR </option>
<option class="input_area" value="Tezpur University">TEZPUR UNIVERSITY</option>
</select> <br>
          
        </div>     
</li>

<li>
          <div id="date" class="wow fadeInRight">
<?php echo "<font  color=black size='4pt' face= 'verdana'>DATE : </font>"; ?>   
<input class="input_area" id="date_area" type="date" name='date' required> <br> <br>


          </div>
</li>

<li>
          <div id="search" class="wow zoomIn">   
          
<input id="search_button"type='submit'  name="submit" value="SEARCH"required> <br> <br>


          </div>
</li>

</ul>


</form>


</div>
       

  <?php
    
  //  $source=$_POST[source];
  //  $destination=$_POST[destination];
  //  $date=$_POST[date];
    
   // echo " <font color=red> kumar".$source."jay </font>";
   //  echo "source=".$source;
    //  echo " <font color=red>date= </font>".$date;
      
   //   if($_POST[submit])
   //  {
       //  if($source==$destination)
      //   echo " <br> <br><font color=red> hello  source  and destination must be different !!  </font>";
    //   else  
   //  {  // header('Refresh:4; search_bushes.php');
   //       echo " <br><font color=red> <br>SEARCHING....... </font>";
   //    }
   //  }

  ?>





<div id="below_part">                       


<ul>
     <li>
          <div id="below_left" class="wow fadeInUp">
 <center><p> CONTACT US :</p> </center>
<center><p> XXXX,India </p> </center> 
<center><p> 99999999XX</p> </center>
<center><p> XYZ@gmail.com</p> </center> 
          </div>
</li>

<li>
       <div id="below_middle" class="wow fadeInDown">

<center><p>Jay.</p> </center>
<center><p> Copy Right 2018 .</p> </center>
<center><p> All Right Reserved .</p> </center> 

          
        </div>     
</li>

<li>
          <div id="below_right" class="wow fadeInRight">
<center><p> Media Connect : </p> </center>
<center><p>Follow us on :<a href="#"> Facebook. </a></p> </center>
<center><p>Follow us on :<a href="#"> Twitter. </a></p> </center>
<center><p>Follow us on :<a href="#"> Instragram. </a></p> </center>

          </div>
</li>

</ul>
</div>
</body>
</html>
