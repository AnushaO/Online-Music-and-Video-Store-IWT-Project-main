<!DOCTYPE html>
<html>

<head>
    
    <title>
        Video page
    </title>
      
    <!-- linking the stylesheet(CSS) -->
    

  

      
    <!-- input tag -->
    <input id="searchbar" onkeyup="search_()" type="text"
        name="search" placeholder="Search ..">
        <li id="search-bar" class="pull-right">
            ...
        </li>
   
      
    <!-- linking javscript -->
    <script src="./animals.js"></script>
    

<style>
  
   body {
  background-image: url("image/vbg.jpg")

}

h1 {text-align: center;}
h2 {text-align: center;}
h1 {
  color: rgb(19, 0, 128);
}



body {
  background-color: lightblue;
}
p.one{
border-style: solid;
  border-color: red;
}

div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}
.btn{
    background-color:yellow;
    height:40px
}
@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}
.title{
  width: 75%;
  height: 70px;
  color: black;
  font-size:3.5em;
  text-align: center;
  position: relative;
        border: 1px solid rgb(11, 12, 12);
        border-top-left-radius: 10px;
        background: rgba(103, 103, 104, 0.2);
        box-shadow: 0 5px 15px rgba(0,0,0,.5);
        border-bottom-right-radius: 10px;
  
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>

<body >
<?php include('php/navigation.php');?>
<br><br><br><br><br><br><br>

<b>
  <div class="Albumsbg">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="Albumstitlepage">
                  <center><div class="title">VIDEO</div></center>
                  <br>
                  </div>
              </div>
          </div>
      </div>

  </div>
  <?php
           include 'database.php';
               
           $q = "SELECT * FROM videos";
           $query = mysqli_query($conn,$q);
           $check_details= mysqli_num_rows($query)> 0;
           
           if($check_details)
           {
               while($row=mysqli_fetch_assoc($query))
           {
           
       ?>
<div class="responsive">
  <div class="gallery">
    <a href=<?php echo $row['vname']?>> <img src="image/videos.png" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc"><b><?php echo $row['title']?></b></div>
    
    
    <span><h2><?php echo $row['price']?></h2></span>

  <center><a href="../php/BUY.php?t_name='video'&id=<?php echo $row['vid']?>&title=<?php echo $row['title']?>&price=<?php echo $row['price']?>&discription=<?php echo $row['discription']?>&discount=<?php echo $row['discount']?>">
  <button class="btn">Add to cart  <i class="fa fa-cart-plus" title="Edit"></i></button></a>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<a href="../php/BUY.php?t_name='video'&id=<?php echo $row['vid']?>&title=<?php echo $row['title']?>&price=<?php echo $row['price']?>&discription=<?php echo $row['discription']?>&discount=<?php echo $row['discount']?>">
<button type="button"  class="btn btn-block btn-express-buynow"><i class="cart-icon-white m-r-sm v-middle"></i>Buy Now</button>
</a></center>

</div>
</div>
<?php
                }
            }
            else
            {
                echo"no";
            }
            ?>

<div class="clearfix"></div>
<div style="padding:6px;">
  <center><p> <b>"Music is an essential part of human existence. Listening to music leaves a major impact on each one of us.
    It can boost your mood, reduce stress and improve your health and overall well".</b></p></center>

    <div class="col-6">
        <button class="w3-button w3-round-xxlarge">Show More</button>
    </div>
  
</div>
</body>
</html>
<?php include('php/footer.php');?>
