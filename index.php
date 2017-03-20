
<?php include("header.php") ?>	 
</div>
<section>
  <!--
  <div class="flexslider">
	<ul class="slides">
	     <li clearfix>
			<div class="col-sm-6"><img src="images/.png" alt=""/></div>
			<div class="col-sm-6 slider_left">
			  <div class="col-sm-12 slider_caption1">
				<h3></h3>
				<h4></h4>
			  </div>
			</div>
		</li>
		
	</ul>
  </div>
  <div class="clearfix"> </div>                   -->

  <style>
    /* Prevent the slideshow from flashing on load */
    #slides {
      display: none
    }

    /* Center the slideshow */
    .container {
      margin: 0 auto
    }

    /* Show active item in the pagination */
    .slidesjs-pagination .active {
      color:red;
    }

    /* Media quires for a responsive layout */

    /* For tablets & smart phones */
    @media (max-width: 767px) {
      body {
        padding-left: 10px;
        padding-right: 10px;
      }
      .container {
        width: auto
      }
    }

    /* For smartphones */
    @media (max-width: 480px) {
      .container {
        width: auto
      }
    }

    /* For smaller displays like laptops */
    @media (min-width: 768px) and (max-width: 979px) {
      .container {
        width: 724px
      }
    }

    /* For larger displays */
    @media (min-width: 1200px) {
      .container {
        width: 1170px
      }
    }
  </style>
  <!-- SlidesJS Required: -->
</head>
<body>

  <!-- SlidesJS Required: Start Slides -->
  <!-- The container is used to define the width of the slideshow -->
  <div class="container">
    <div id="slides">
      <img src="images/banner_2.jpg" alt="Banner">
      <img src="images/header.png" alt="Banner">
      <img src="images/banner_2.jpg" alt="Banner">
      <img src="images/header.png" alt="Banner">
    </div>
  </div>
  <!-- End SlidesJS Required: Start Slides -->

  <!-- SlidesJS Required: Link to jQuery -->
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <!-- End SlidesJS Required -->

  <!-- SlidesJS Required: Link to jquery.slides.js -->
  <script src="js/jquery.slides.min.js"></script>
  <!-- End SlidesJS Required -->

  <!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
  <script>
    $(function() {
      $('#slides').slidesjs({
        width: 940,
        height: 528
      });
    });
  </script>




</section>

<div class="box_2">
  <div class="container">
	  <div class="course_demo">
        <ul id="flexiselDemo3">	
		  <li><a href="http://www.autodesk.com/autocad"><img src="images/l1.png" class="img-responsive" alt=""/></a></li>
		  <li><img src="images/l5.png" class="img-responsive" alt=""/></li> 
		  <li><img src="images/l3.png" class="img-responsive" alt=""/></li> 
		  <li><img src="images/l4.png" class="img-responsive" alt=""/></li> 
		  <li><img src="images/l2.png" class="img-responsive" alt=""/></li>
		  <li><img src="images/l6.png" class="img-responsive" alt=""/></li>
		 </ul>
		<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo3").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,    		
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
			    	responsiveBreakpoints: { 
			    		portrait: { 
			    			changePoint:480,
			    			visibleItems: 1
			    		}, 
			    		landscape: { 
			    			changePoint:640,
			    			visibleItems: 2
			    		},
			    		tablet: { 
			    			changePoint:768,
			    			visibleItems: 2
			    		}
			    	}
			    });
			    
			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
   </div>
  </div>
</div>
<div class="box_3 clearfix">
  <div class="container">
	<div class="heading_1 col-lg-3 col-md-3 col-sm-12 col-xs-12">
       <div class="heading column heading-v1 separator_align_right">
         <div class="heading-inner">
             <small class="subheading"> Welcome To</small>
             <h2>ITVS</h2>
             <h2></h2>
         </div>   
      </div>   
    </div>  
<div class="col-md-9 row-inner">
<div class="col-md-12 row-inner_1">
	<div class="col-md-6 col-inner">
		<ul class="classi_1"><a href="index_detail.html">
			<li class="classi_1-left"><img src="images/pic1.jpg" class="img-responsive" alt=""/></li>
			<li class="classi_1-right">
				<h3><a href="index_detail.html">EDUCATION</a></h3>
				<p>Welcome to ITVS's Technology World</p>
			</li></a>
			<div class="clearfix"> </div>
		</ul>
		<ul class="classi_1"><a href="price.html">
			<li class="classi_1-left"><img src="images/pic2.jpg" class="img-responsive" alt=""/></li>
			<li class="classi_1-right">
				<h3><a href="price.html">BUY NOW</a></h3>
				<p>Take Your course and be a member of ITVS</p>

			</li>
			<a/>
			<div class="clearfix"> </div>
		</ul>
		
	</div>
	<div class="col-md-6 col-inner_1">
		<ul class="classi_1"><a href="price.html">
			<li class="classi_1-left"><img src="images/pic3.jpg" class="img-responsive" alt=""/></li>
			<li class="classi_1-right middle">
				<h3><a href="price.html">PRODUCTS</a></h3>
				<p>Know more about our products</p>
			</li><a/>
			<div class="clearfix"> </div>
		</ul>
		<ul class="classi_1">
			<li class="classi_1-left"><img src="images/pic4.jpg" class="img-responsive" alt=""/></li>
			<li class="classi_1-right middle">
				<h3><a href="index_detail.html">BUSINESS</a></h3>
				<p>A Wide opportunity of business is waiting for you.</p>
			</li>
			<div class="clearfix"> </div>
		</ul>
		
			<div class="clearfix"> </div>
		</ul>
	   </div>
	 </div>
   </div>
 </div>
</div>

    
<?php include("footer.php") ?>
