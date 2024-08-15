<?php require_once('database.php');?>


   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <link rel="stylesheet" href="css/dashbord.css"> 
    
    
    <style>
      .div1{
    position: relative;
    width: 270px;
    height: 1200px;
    border: 1px solid rgb(11, 12, 12);
    background-color: black;
    box-shadow: 0 5px 15px rgba(0,0,0,.5);
   
}
.div2{
    position: relative;
    width: 745px;
    height: 405px;
    border: 1px solid rgb(11, 12, 12);
    background:rgba(0, 0, 0, 0.8);
    box-shadow: 0 5px 15px rgba(0,0,0,.5);
   
}
.div3{
    position: relative;
    width: 740px;
    height: 450px;
    border: 1px solid rgb(11, 12, 12);
    background: rgba(63, 63, 65, 0.2);
    box-shadow: 0 5px 15px rgba(0,0,0,.5);
   
}
.div4{
    position: relative;
    width: 328px;
    height: 1200px;
    border: 1px solid rgb(11, 12, 12);
    background:rgba(0, 0, 0, 0.8);
    box-shadow: 0 5px 15px rgba(0,0,0,.5);
   
}
.div5{
    position: relative;
    width: 740px;
    height: 430px;
    border: 1px solid rgb(11, 12, 12);
    background: rgba(8, 8, 8, 0.2);
    box-shadow: 0 5px 15px rgba(0,0,0,.5);}
  

      .div6{
    position: relative;
    width: 675px;
    height: 1950px;
    border: 1px solid rgb(11, 12, 12);
    background:rgba(0, 0, 0, 0.8);
    box-shadow: 0 5px 15px rgba(0,0,0,.5);
   
    }

      .fancybtn{
	display:inline-block;
	position:relative;
	padding:10px 20px;
	border:2px solid #fda;
	color:#fda;
	font-family:'Dancing Script',serif;
	font-style:italic;
	font-size:25px;
	text-decoration:none;
	margin:10px auto;
	transition: color 0.4s

  }
  .fancybtn:after{
	content:" ";
	border:2px solid rgba(0,0,0,0);
	display:inline-block;
	width:100%;
	height:100%;
	position:absolute;
	top:0;
	left:0;
	right:0;
	bottom:0;
	margin:auto;
	transition:all 0.4s;
  }
  .fancybtn:hover{
	color:#eee
  }
  .fancybtn:hover:after{  
	border:2px solid #fda;
	width: calc(100% - 10px);
	height: calc(100% + 10px); 
  }
  .T1{
  border-collapse: collapse;
  color: #802020;
  font-family:'Times New Roman', Times, serif;
  font-size: 17px;
  border-color: #030303;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  text-align:center;
  box-shadow:0 0 20px rgba(255, 255, 255, 0.15);
}


 .T1 th
  {
background-color: #290202;
color: rgb(252, 245, 245);
text-transform: uppercase;
  }
  .T1 tr:nth-child(even){
background-color: rgb(245, 163, 163);
  }
  .T2{
  border-collapse: collapse;
  color: #cc3e13;
  font-family:'Times New Roman', Times, serif;
  font-size: 17px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  border-color: #030303;
  text-align:center;
  box-shadow:0 0 20px rgba(255, 255, 255, 0.15);
}


 .T2 th
  {
background-color: #4b0b00;
color: rgb(252, 245, 245);
text-transform: uppercase;
  }
  .T2 tr:nth-child(even){
background-color: rgb(235, 191, 134);
  }



    </style>
</head>
<body> 
    <i>Dashbord Analytics</i><br><br><br>
    <center><table border ="0" width="100%" hight="2000px">
        <tr >
            <td rowspan="3">
                <div class="div1"><center><br>
                   <img src="../image/admin.png" width="100px" height="100px"><br>
                   <div class="select" tabindex="1">
                    <input class="selectopt" name="test" type="radio" id="opt1" checked>
                    <label for="opt1" class="option">Admin</label>
                    <input class="selectopt" name="test" type="radio" id="opt2">
                    <label for="opt2" class="option">Help/Support</label>
                    <input class="selectopt" name="test" type="radio" id="opt3">
                    <label for="opt3" class="option">Setting</label>
                    <input class="selectopt" name="test" type="radio" id="opt4">
                    <label for="opt4" class="option">Privacy</label>
                    <input class="selectopt" name="test" type="radio" id="opt5">
                    <label for="opt5" class="option">Logout</label>
                  </div><br><br><br><br><br><br><br><br><br>
                    
                 
                
                <a href="www.google.com" class="fancybtn">OUR ADMINS </a><br>
                <a href="www.google.com" class="fancybtn">FEEDBACK </a><br>
                <a href="../php/Payment.php" class="fancybtn">PAYMENT</a><br>
                <a href="../php/music page.php" class="fancybtn">MUSIC</a><br>
                <a href="../php/My Profile.php" class="fancybtn">USERS </a><br>
                <a href="www.google.com" class="fancybtn">HOME </a><br>
                <a href="../php/video page.php" class="fancybtn">VIDEO </a><br>
                <a href="../php/About.php" class="fancybtn">ABOTUS </a><br>
                <a href="www.google.com" class="fancybtn">CATEGORY </a><br>
                <a href="../php/ContactUs.php" class="fancybtn">CONTACTUS </a><br>
                
             
                                  
                     
                </center> </div>
            </td>
            <td colspan="2">
                <div class="div2">
                  <body>
                    <div class="container">
                        <div class="card">
                            <div class="face face1">
                                <div class="content">
                                    <img src="image/music.png">
                                    <h3>MUSIC</h3>
                                </div>
                            </div>
                            <div class="face face2">
                                <div class="content">
                                  <p><center>_WELCOME ZIKMUSIC_<br> we are pleased to anounce that the following number of songs have been uploaded to our website so far</center></p>
                                  <center> <br><h1>
                                  <?php
                                      $querym = "SELECT * FROM music ";
                                      $result_setm = mysqli_query($conn,$querym);
                                      if($result_setm){
                                        echo mysqli_num_rows($result_setm);
                                      }
                                        ?>
                                   </h1> </center>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="face face1">
                                <div class="content">
                                    <img src="image/video.png">
                                    <h3>VIDEO</h3>
                                </div>
                            </div>
                            <div class="face face2">
                                <div class="content">
                                  <p><center>_WELCOME ZIKMUSIC_<br> we are pleased to anounce that the following number of videos have been uploaded to our website so far</center></p>
                                  <center>
                                  <br><h1>
                                  <?php
                                      $queryv = "SELECT * FROM videos ";
                                      $result_setv = mysqli_query($conn,$queryv);
                                      if($result_setv){
                                        echo mysqli_num_rows($result_setv);
                                      }
                                        ?>
                                   </h1>
                                </center>
                                </div>
                            </div>
                        </div>
                        
                    </div>
            
                 </div>
                <div class="div3">

<?php
$query = "SELECT * FROM contact  ";
$result_set = mysqli_query($conn,$query);
if($result_set){
    
 
    $table = '<table class="T1">';
    $table.='<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Subject</th>
    <th>Message</th>
    </tr>';

    while ($records = mysqli_fetch_assoc($result_set)) {
        $table .= '<tr>';
        $table.='<td>' . $records['id'].'</td>';
        $table.='<td>' . $records['name'].'</td>';
        $table.='<td>' . $records['email'].'</td>';
        $table.='<td>' . $records['phone'].'</td>';
        $table.='<td>' . $records['subject'].'</td>';
        $table.='<td>' . $records['message'].'</td>';
        $table.='<tr>';
   
    }
$table.='</table>';
}
?>
                    <center><div class="title">FEEDBACKS AND MESSAGERS </div></center>
                <center>  <?php echo $table ; ?><center> 
            </div>
        </td>
            <td rowspan="2">
                <div class="div4">
                  <div class="containerr">

                    <div class="box">
                      <div class="containerr-3">
                        <span class="icon"><i class="fa fa-search"></i></span>
                        <input type="search" id="search" placeholder="Search..." />
                      </div>
                    </div>
                  
                    <div class="leftbox">
                      <nav>
                        <a id="dashboard"><i class="fas fa-tachometer-alt"></i></a>
                        <a id="profile"> <i class="fas fa-user"></i> </a>
                        <a id="settings"> <i class="fas fa-cog"></i> </a>
                        <a id="messages"> <i class="fas fa-comments"></i> </a>
                        <a id="notification"> <i class="fas fa-bell"></i> </a>
                      </nav>
                    </div>
                    <div class="rightbox">
                      <div class="rb-containerr">
                        <ul class="rb">
                          <li class="rb-item" ng-repeat="itembx">
                            <div class="timestamp">
                              30 may 2021<br> 23:00 PM
                            </div>
                            <div class="item-title">Chris Serrano uploard a video on website.</div>
                  
                          </li>
                          <li class="rb-item" ng-repeat="itembx">
                            <div class="timestamp">
                              30 may 2021<br> 23:40 PM
                            </div>
                            <div class="item-title">Mia Redwood uploard a music on website.</div>
                  
                          </li>
                  
                          <li class="rb-item" ng-repeat="itembx">
                            <div class="timestamp">
                              31st may 2021<br> 5:00 AM
                            </div>
                            <div class="item-title">Lucas McAlister uploard a music on website.</div>
                  
                          </li>
                          <li class="rb-item" ng-repeat="itembx">
                            <div class="timestamp">
                              31st may 2021<br> 7:00 AM
                            </div>
                            <div class="item-title">Ashraya subashs uploard a music on website.</div>
                  
                          </li>
                          <li class="rb-item" ng-repeat="itembx">
                            <div class="timestamp">
                              31st may 2021<br> 11:00 AM
                            </div>
                            <div class="item-title">Mina Franando uploard a video on website..</div>
                  
                          </li>
                          <li class="rb-item" ng-repeat="itembx">
                            <div class="timestamp">
                              31st may 2021<br> 2:00 PM
                            </div>
                            <div class="item-title">Rishrd wilhelm uploard a music on website..</div>
                  
                          </li>
                          <li class="rb-item" ng-repeat="itembx">
                            <div class="timestamp">
                              31st may 2021<br> 5:00 PM
                            </div>
                            <div class="item-title">Shanazh Alledh uploard a video on website.</div>
                  
                          </li>
                  </ul>
                      </div>
                    </div>
                  </div>   
            </div>
        </td>

        </tr>
        <tr>
            <td><div class="div5">
            <?php
$query = "SELECT * FROM profile  ";
$result_set = mysqli_query($conn,$query);
if($result_set){
    
 
    $table = '<table class="T1">';
    $table.='<tr>
    <th>Id</th>
    <th>F.NAME</th>
    <th>L.NAME</th>
    <th>GENDER</th>
    <th>DOB</th>
    <th>Email</th>
    <th>Phone</th>
   </tr>';

    while ($records = mysqli_fetch_assoc($result_set)) {
        $table .= '<tr>';
        $table.='<td>' . $records['fid'].'</td>';
        $table.='<td>' . $records['fname'].'</td>';
        $table.='<td>' . $records['lname'].'</td>';
        $table.='<td>' . $records['gender'].'</td>';
        $table.='<td>' . $records['dob'].'</td>';
        $table.='<td>' . $records['email'].'</td>';
        $table.='<td>' . $records['pno'].'</td>';
       
        $table.='<tr>';
   
    }
$table.='</table>';
}
?><center><div class="title">ADMINS</div></center>
<BR>
 <center>  <?php echo $table ; ?><center> 
            </div></td>
        </tr>
    </table>
    <center><table border ="0" width="100%" hight="1000px">
      <tr>
        <td><div class="div6"><?php
$query = "SELECT * FROM music  ";
$result_set = mysqli_query($conn,$query);
if($result_set){
    
 
    $table = '<table class="T2">';
    $table.='<tr>
    <th>Id</th>
    <th>TITLE</th>
    <th>DISCRIPTION</th>
    <th>PRICE</th>
    <th>DISCOUNT</th>
    
    </tr>';

    while ($records = mysqli_fetch_assoc($result_set)) {
        $table .= '<tr>';
        $table.='<td>' . $records['mid'].'</td>';
        $table.='<td>' . $records['title'].'</td>';
        $table.='<td>' . $records['discription'].'</td>';
        $table.='<td>' . $records['price'].'</td>';
        $table.='<td>' . $records['discount'].'</td>';
       
        $table.='<tr>';
   
    }
$table.='</table>';
}
?><br><center><div class="title">MUSIC </div></center>
 <center>  <?php echo $table ; ?><center> </td>
        <td><div class="div6"><?php
$query = "SELECT * FROM video  ";
$result_set = mysqli_query($conn,$query);
if($result_set){
     $row= mysqli_num_rows($result_set) ;
 
    $table = '<table class="T2">';
    $table.='<tr>
    <th>Id</th>
    <th>TITLE</th>
    <th>DISCRIPTION</th>
    <th>PRICE</th>
    <th>DISCOUNT</th>
    </tr>';

    while ($records = mysqli_fetch_assoc($result_set)) {
        $table .= '<tr>';
        $table.='<td>' . $records['vid'].'</td>';
        $table.='<td>' . $records['title'].'</td>';
        $table.='<td>' . $records['discription'].'</td>';
        $table.='<td>' . $records['price'].'</td>';
        $table.='<td>' . $records['discount'].'</td>';
       $table.='<tr>';
   
    }
$table.='</table>';
}
?> <br><center><div class="title">VIDEO</div></center>
<center>  <?php echo $table ; ?><center> </td>
      </tr>
</table></center>
</body>
</html>

<?php mysqli_close($conn); ?>
