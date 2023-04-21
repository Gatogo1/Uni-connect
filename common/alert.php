

<style>
 



.content-slider {
  width: 100%;
  height: 100hv;
}

.slider {

  margin: 10px auto 0;
  overflow: visible;
  position: relative;
}

.mask {
  overflow: hidden;
  height: 300px;
}

.slider ul {
  margin: 0;
  padding: 0;
  position: relative;
}

.slider li {
  width: 100hv;
  text-align:center;

  position: absolute;
 
  list-style: none;
}

.slider .quote {
  font-size: 20px;

}

.slider .source {
  font-size: 20px;

}

.slider li.anim1 {
  animation: cycle 20s linear infinite;
}

.slider li.anim2 {
  animation: cycle2 20s linear infinite;
}

.slider li.anim3 {
  animation: cycle3 20s linear infinite;
}

.slider li.anim4 {
  animation: cycle4 20s linear infinite;
}

.slider li.anim5 {
  animation: cycle5 20s linear infinite;
}

.slider:hover li {
  animation-play-state: paused;
}

@keyframes cycle {
  0% {
    top: 0px;
  }
  4% {
    top: 0px;
  }
  16% {
    top: 0px;
    opacity: 1;
    z-index: 0;
  }
  20% {
    top: 325px;
    opacity: 0;
    z-index: 0;
  }
  21% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
  50% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
  92% {
    top: -325px;
    opacity: 0;
    z-index: 0;
  }
  96% {
    top: -325px;
    opacity: 0;
  }
  100% {
    top: 0px;
    opacity: 1;
  }
}

@keyframes cycle2 {
  0% {
    top: -325px;
    opacity: 0;
  }
  16% {
    top: -325px;
    opacity: 0;
  }
  20% {
    top: 0px;
    opacity: 1;
  }
  24% {
    top: 0px;
    opacity: 1;
  }
  36% {
    top: 0px;
    opacity: 1;
    z-index: 0;
  }
  40% {
    top: 325px;
    opacity: 0;
    z-index: 0;
  }
  41% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
  100% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
}

@keyframes cycle3 {
  0% {
    top: -325px;
    opacity: 0;
  }
  36% {
    top: -325px;
    opacity: 0;
  }
  40% {
    top: 0px;
    opacity: 1;
  }
  44% {
    top: 0px;
    opacity: 1;
  }
  56% {
    top: 0px;
    opacity: 1;
    z-index: 0;
  }
  60% {
    top: 325px;
    opacity: 0;
    z-index: 0;
  }
  61% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
  100% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
}

@keyframes cycle4 {
  0% {
    top: -325px;
    opacity: 0;
  }
  56% {
    top: -325px;
    opacity: 0;
  }
  60% {
    top: 0px;
    opacity: 1;
  }
  64% {
    top: 0px;
    opacity: 1;
  }
  76% {
    top: 0px;
    opacity: 1;
    z-index: 0;
  }
  80% {
    top: 325px;
    opacity: 0;
    z-index: 0;
  }
  81% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
  100% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
}

@keyframes cycle5 {
  0% {
    top: -325px;
    opacity: 0;
  }
  76% {
    top: -325px;
    opacity: 0;
  }
  80% {
    top: 0px;
    opacity: 1;
  }
  84% {
    top: 0px;
    opacity: 1;
  }
  96% {
    top: 0px;
    opacity: 1;
    z-index: 0;
  }
  100% {
    top: 325px;
    opacity: 0;
    z-index: 0;
  }
}



.carousel{
  margin-top: 50px;
}
.carousel-inner{
  height: 200px;
}
.carousel-caption{
  color: #fff;
  top: 50%;
}
</style>


<div class="content-slider">
    <h4 class="text-warning text-center">Notice!!!</h4>
  <div class="slider">
    <div class="mask">
      <ul>
        <li class="anim1">
          <div class="quote text-white"> <b>Hello! <?php echo  $_SESSION['sname']?></b>, You are Welcome To ATU Student connect App. <br> The purpose of this app is to facilitate studies, connect students and make life on campus easier.</div>
          <div class="source">By Developer </div>
        </li>
        <li class="anim2">
          <div class="quote text-white">This app is under , this is just a try version</div>
          <div class="source">By Developer</div>
        </li>
        <li class="anim3">
          <div class="quote text-white">Lorem ipsum dolor sit amet consectetur 
            adipisicing elit. Accusantium pariatur enim dolorem quisquam debitis repellendus numquam sapiente aut sit totam tempore ab hic blanditiis quas, ut cum possimus in expedita</div>
          <div class="source">- Animal</div>
        </li>
        <li class="anim4">
          <div class="quote text-white">Lorem ipsum dolor sit amet consectetur 
            adipisicing elit. Accusantium pariatur enim dolorem quisquam debitis repellendus numquam sapiente aut sit totam tempore ab hic blanditiis quas, ut cum possimus in expedita</div>
          <div class="source">- Plant</div>
        </li>
        <li class="anim5">
          <div class="quote">Lorem ipsum dolor sit amet consectetur 
            adipisicing elit. Accusantium pariatur enim dolorem quisquam debitis repellendus numquam sapiente aut sit totam tempore ab hic blanditiis quas, ut cum possimus in expedita</div>
          <div class="source">- Cassidy</div>
        </li>
      </ul>
    </div>
  </div>
</div>
<!---
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="carousel-caption">
        <h3>Boyd W.</h3>
        <p>TEXT</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-caption">
        <h3>Diane L</h3>
        <p>TEXT</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-caption">
        <h3>Randall L</h3>
        <p>TEXT</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-caption">
        <h3>John D.</h3>
        <p>TEXT</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-caption">
        <h3>Jody B.</h3>
        <p>TEXT</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>---->