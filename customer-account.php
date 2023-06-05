<?php
  session_start();
 include("includes/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Account</title>

    <style type="text/css">
        body {
                margin:0 auto;
                height: 100%;
                width: 100%;
                background: url(pictures/ForBackground.jpg) no-repeat fixed;
                background-size: cover;
         }

        .ART {
          text-indent: -99px;
          margin-top: 15px;
          font-size: 40px;
          font-family: "Roboto";
          color: #F1F6F9;
          text-align: center;
          position: absolute;
          left: 50px;
          top: -10px;
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
        .image{
            position: absolute;
            top: -1px;
            right: 5px;
            width: 80px;
            height: 80px;
        }

        .ul {

          background-color: #134f5c;
          box-shadow: 1px 1.732px 2px 0px rgb( 55, 52, 52 );
          position: absolute;
          left: -10px;
          top: -15px;
          width: 1890px;
          height: 65px;
          z-index: 2;
        }

        .li {
          float: left;
          position: relative;
          margin-left: 50px;
          overflow: auto;
          padding: 5px ;
          text-align: center;
        }

        .li .a2 {
          display: block;
          color: white;
          font-size: 14px;
          font-family: "Roboto";
          margin:18px 100px 0px 100px;
          text-decoration: none;
         }

        .li .a2:hover:not(.logo) {
          border-bottom: 1.5px solid #2d70d5;
        }

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
          position: relative;
          margin-left: 50px;
          top: -18px;
          left:1600px;
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
          font-family: "Roboto";
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

      /*Explore Hover Dropdown*/
        .dpbtn {
          font-family: "Roboto";
          left:50px;
   border-radius: 10px;
          background-color: #2d70d5;
    color: white;
    padding: 8px;
    font-size: 13px;
    border: none;
    cursor: pointer;
}

.dpdown {
  font-family: "Roboto";
    position: absolute;
      top: 16px;
      left: 400px;
    display: inline-block;
    z-index: 30;
}

.dpdown-content {
  font-family: "Roboto";
    display: none;
    position: absolute;
    right: 0;
    background-color: #f9f9f9;
    font-size: 13px;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dpdown-content a {
  font-family: "Roboto";
    color: black;
    padding: 10px 10px;
    text-decoration: none;
    display: block;
}

.dpdown-content a:hover {background-color: #f1f1f1}

.dpdown:hover .dpdown-content {
    display: block;
}

.dpdown:hover .dpbtn {
    background-color: grey;
}
    </style>
</head>
<body>

    <div class="dpdown">
  <button class="dpbtn">Explore </button>
  <div class="dpdown-content" style="left:0;">
                   <a href="artworks.php">Artworks</a>
                    <a href="artist.php">Artists</a>
                     ------------------------------<br>
                    <a href="about_us.php"> About VIT Gallery</a>
  </div>
</div>

     <?php
$id = $_SESSION['USER_ID'];
      $query_category="SELECT user_fname,user_mname,user_lname FROM user WHERE user_id = '$id'";
        $result_category = mysqli_query($conn,$query_category);

        while($row=mysqli_fetch_array($result_category)){
//<a href= "pictures/arts/'.$row[0].'">
            echo
                 '<div class="dropdown">'.
                    '<button onclick="myFunction()" class="dropbtn">' .$row['user_fname'].' '.$row['user_mname'].' '.$row['user_lname']. ''.''. '&#9660;'. '</button>'.'
                       <div id="myDropdown" class="dropdown-content">
                        <a href="customer-account.php">My VIT Gallery</a>
                         <a href="profile.php">Account Profile</a>
                            <a href="logout.php">Log Out</a>

                       </div>
                  </div>';
} ?>

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
  <ul class="ul" >

                <p class="li">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



              <li class="li"><a class="a2" href="orders(planb).php">MY ORDERS</a></li>



              <li class="li"> <a class="a2" href="my_collection.php">MY COLLECTIONS</a></li>
              </p>

         </ul>

            <h1 class="ART">VIT ART Gallery</h1>
          
</body>
</html>