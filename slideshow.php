<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
  font-weight: 300;
  background: url(pictures/ForBackground.jpg) no-repeat fixed;
}
.css-slideshow{
  position: absolute;
  top:-67px;
  max-width: 1920px;
  max-height: 850px;
  margin: 130px 1000px 0px 0px;
}

.css-slideshow figure{
  margin: 0;
  max-width: 1920px;
  height: 850px;
  background: #000;
  position: absolute;
}
.css-slideshow img{
  box-shadow: 0 0 2px #666;
}

.css-slideshow:hover figure figcaption{
  transition: opacity .5s;
  opacity: 1;
}
.css-slideshow-attr{
  max-width: 1920px;
  text-align: right;
  font-size: .7em;
  font-style: italic;
  margin:0 auto;
}
.css-slideshow-attr a{
  color: #666;
}
.css-slideshow figure{
  opacity:0;
}
figure:nth-child(1) {
  animation: xfade 48s 42s infinite;
}
figure:nth-child(2) {
  animation: xfade 48s 36s infinite;
}
figure:nth-child(3) {
  animation: xfade 48s 30s infinite;
}
figure:nth-child(4) {
  animation: xfade 48s 24s infinite;
}
figure:nth-child(5) {
  animation: xfade 48s 18s infinite;
}
figure:nth-child(6) {
  animation: xfade 48s 12s infinite;
}
figure:nth-child(7) {
  animation: xfade 48s 6s infinite;
}
figure:nth-child(8) {
  animation: xfade 48s 0s infinite;
}

@keyframes xfade{
  0%{
    opacity: 1;
  }
  10.5% {
    opacity: 1;
  }
  12.5%{
    opacity: 0;
  }
  98% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
</style>
</head>
<body>
<div class="css-slideshow">

  <figure>
    <img src="pictures/artwork1.jpg" width="1920" height="830" class="alignnone size-full wp-image-172" />

  </figure>

  <figure>
    <img src="pictures/artwork5.jpg" alt="artwork1" width="1920" height="830" class="alignnone size-large wp-image-178" />

  </figure>

  <figure>
    <img src="pictures/Welcome1.jpg" alt="artists" width="1920" height="830" class="alignnone size-full wp-image-179" />
    
  </figure>

  <figure>
    <img src="pictures/artwork4.jpg" alt="artwork5" width="1920" height="830" class="alignnone size-full wp-image-177" />
    
  </figure>

  <figure>
    <img src="pictures/artwork3.jpg" alt="artwork4" alt="class-header-connectivity" width="1920" height="830" class="alignnone size-large wp-image-176" />
  </figure>

  <figure>
    <img src="pictures/artwork2.jpg" alt="artwork3" alt="class-header-multimedia" width="1920" height="830" class="alignnone size-large wp-image-175" />
    
  </figure>
  <figure>
    <img src="pictures/artwork1.jpg" alt="artwork2"  width="1920" height="830" class="alignnone size-large wp-image-174" />
    
  </figure>

  <figure>
    <img src="pictures/Welcome1.jpg" alt="class-header-performance" width="1920" height="830" class="alignnone size-large wp-image-173" />

  </figure>

</div>


</body>
</html>
