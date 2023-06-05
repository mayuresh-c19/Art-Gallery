<?php
session_start();
include("includes/connection.php"); ?>

<!DOCTYPE html>
 <html>
 <head>
  <title>Home</title>

  <style>
         body {
                margin:0 auto;
                height: 100%;
                width: 100%;
                background: url(pictures/bkg.jpg) no-repeat fixed;
                background-size: cover;
         }

        .ART {
          text-indent: -99px;
          margin-top: 15px;
          font-size: 35px;
          font-family: "Roboto";
          color: #F1F6F9;
          text-align: center;
          position: absolute;
          left: 50px;
          top: 0px;
          width: 350px;
          height: 35px;
          z-index: 19;
        }

        ._BAY {
          text-indent: 120px;
          margin-top: 15px;
          font-size: 35px;
          font-family: "Roboto";
          color: rgb( 20, 20, 20);
          text-align: center;
          position: absolute;
          left: 0px;
          top: -15px;
          width: 215px;
          height: 35px;
          z-index: 19;
        }

        .Albay_ {

          margin-top: 97px;
          font-size: 13px;
          font-family: "MingLiU_HKSCS-ExtB";
          color: #f5f5f5;
          text-align: left;
          position: absolute;
          left: 78px;
          top: -55px;
          width: 215px;
          height: 35px;
           z-index: 3;
        }

        .Original_ {

          margin-top: 97px;
          font-size: 13px;
         font-family: "MingLiU_HKSCS-ExtB";
          color: #f5f5f5;
          text-align: left;
          position: absolute;
          left: 120px;
          top: -55px;
          width: 215px;
          height: 35px;
           z-index: 3;
        }

        .Artworks_ {

          margin-top: 97px;
          font-size: 13px;
          color: #f5f5f5;
          text-align: left;
          position: absolute;
          left: 180px;
          top: -55px;
          width: 215px;
          height: 35px;
          z-index: 3;
        }

        #ul {
          font-family: "Roboto";
          background-color: #134f5c;
          box-shadow: 1px 1.732px 2px 0px rgb( 55, 52, 52 );
          position: absolute;
          left: -10px;
          top: -15px;
          width: 1890px;
          height: 65px;
          z-index: 2;
        }

        #li {
          font-family: "Roboto";
          margin-left: 70px;
          float: left;
          overflow: auto;
          padding: 5px ;
        }

        #li #a2 {
          font-family: "Roboto";
          display: block;
          color: white;
          font-size: 14px;
          margin:18px 15px 0px 5px;
          text-decoration: none;
         }

        #li #a2:hover:not(.logo) {
          font-family: "Roboto";
          border-bottom: 1.5px solid #2d70d5;
        }

        .img{
          cursor: pointer;
           position: absolute;
           top:1.5px;
          left: 3px;
          width:70px;
          height: 60px;
          z-index: 1;
        }

         /*Style the Dropwdown Button*/
         .Welcome{
            font-family: "Roboto";
            color:white;
            position: absolute;
            top: -10px;
            right: -820px;
        }
        .Don{
            font-family: "Roboto";
            color:white;
            position: absolute;
            top: -10px;
            left:1000px;
            z-index: 30;
        }
         /*Username Clickable Dropdown*/
        .dropbtn {
          position: relative;
          border-radius: 10px;
          background-color: #2d70d5;
          color: white;
          padding: 8px;
          font-size: 16px;
          border: none;
          cursor: pointer;
        }

        .dropbtn:hover, .dropbtn:focus {
          background-color: grey;
        }
        .dropdown {
          position: absolute;
          margin: left 50px;
          left: 1600px;
          top: 16px;
          display: inline-block;
          z-index: 30;
        }

         .dropdown-content {
          font-family: "Roboto";
           display: none;
           position: absolute;
           background-color: #f9f9f9;
           font-size: 13px;
           min-width: 160px;
          overflow: auto;
           box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
         }
        .dropdown-content a {
           color: black;
           padding: 10px 10px;
           text-decoration: none;
           display: block;
        }
         .dropdown a:hover {
          background-color: #f1f1f1;

        }
         .show {
          display:block;
        }

      /*Explore Hover Dropdown-Art Guide*/


.dpdown {
    position: inherit;

      left: 255px;
      font-family: "Roboto";
      color: #f2f2f2;
      font-size: 14.5px;
    display: inline-block;
    z-index: 100;
}

.dpdown-content {
    display: none;
    position: absolute;
    left: 1000px;
    background-color: #f9f9f9;
    font-size: 13px;
    min-width: 160px;
    z-index: 100;
}

.dpdown-content a {
    color: black;
    padding: 10px 10px;
    text-decoration: none;
    display: block;
}

.dpdown-content a:hover {background-color: #f1f1f1}

.dpdown:hover .dpdown-content {
    display: block;
}

.dpdown:hover{
   border-bottom: 1.5px solid #2d70d5;
}
.success{
  position: absolute;
  top:100px
  left:100px;
  font-family: "Roboto Light";
  font-size: 20px;
  z-index: 50;
}

/*Explore Hover Dropdown-Artworks*/


.dpdown2 {
    position: inherit;

      left: 675px;
      font-family: "Roboto";
      color: #f2f2f2;
      font-size: 14.5px;
    display: inline-block;
    z-index: 100;
}

.dpdown-content2 {
    display: none;
    position: absolute;
    left: 780px;
    background-color: #f9f9f9;
    font-size: 13px;
    min-width: 160px;
    z-index: 100;
}

.dpdown-content2 a {
    color: black;
    padding: 10px 10px;
    text-decoration: none;
    display: block;
}

.dpdown-content2 a:hover {background-color: #f1f1f1}

.dpdown2:hover .dpdown-content2 {
    display: block;
}

.dpdown2:hover{
   border-bottom: 1.5px solid #2d70d5;
}

  </style>
</head>
    <script>
        function myFunction() {
           document.getElementById("myDropdown") .classList.toggle("show");
        }
         window.onclick = function(event) {

           if(!event.target.matches('.dropbtn')){

             var dropdowns = document .getElementsByClassName ("dropdown-content");
             var i; for(i=0; i < dropdowns.length; i++) {

               var openDropdown = dropdowns[i];
                 if (openDropdown.classList.contains ('show')) {

                  openDropdown.classList.remove('show');
                 }
             }
           }
         }

      </script>

<body >

  <h1 class="ART">VIT Art Gallery</h1>
  

  <ul id="ul">
      <li id="li">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      <li id="li"><a id="a2" href="home.php">HOME</a></li></li>

      <li id="li">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <li id="li" > <br>
            <div class="dpdown2">
                <span>ARTWORKS</span>
                      <div class="dpdown-content2">
                          <a href="artworks.php">Available Artworks</a>
                          <a href="artworks(sold).php">Sold Artworks</a>
                      </div>
            </div>
      </li></li>

      <li id="li">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li id="li"><a id="a2" href="artist.php">ARTISTS </a></li></li>

      

      <li id="li">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li id="li"><a id="a2" href="about_us.php">ABOUT US</a></li></li>


<?php if(isset($_SESSION['USER_ID'])){
    $id = $_SESSION['USER_ID'];
            $query_category="SELECT user_fname,user_mname,user_lname FROM user WHERE user_id = '$id'";
            $result_category = mysqli_query($conn,$query_category);

            while($row=mysqli_fetch_array($result_category)){
              //<a href= "pictures/arts/'.$row[0].'">
              echo
                 '<div class="dropdown">'.
                    '<button onclick="myFunction()" class="dropbtn">' .$row['user_fname'].' '.$row['user_mname'].' '.$row['user_lname']. ''.''. '&#9660;'. '</button>'.'
                       <div id="myDropdown" class="dropdown-content">
                        <a href="account_home.php">My VIT Gallery</a>
                         <a href="profile.php">Account Profile</a>
                            <a href="logout.php">Log Out</a>

                       </div>
                  </div>';
            }


}
else{
 include("portal.php");

}
?>

</ul>

<?php

include("includes/footer.php");
?>
