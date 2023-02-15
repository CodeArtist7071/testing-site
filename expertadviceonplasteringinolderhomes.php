<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	<meta name="viewport" content="width=devide-width, initial-scale=1.0">
		
	<link rel="stylesheet" type="text/css" href="./vendors/css/grid.css">
	<link rel="stylesheet" type="text/css" href="./vendors/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="./resources/css/stylesheet12.css">
	<link rel="stylesheet" type="text/css" href="./resources/css/mediaqueries.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-193749357-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-193749357-1');
    </script>
    <!-- End Global site tag  -->
    

    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2858308207727380');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=2858308207727380&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
    
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@0,100;0,300;0,400;1,300%26Roboto:wght@0,100;0,300;0,400;1,300%26display=swap" rel="stylesheet">
	<title> BuildonClick Blogs</title>
	
	</head>
	<body>
	    
	 <!--Whatsapp-->    
    <div class="chat_icon">
        <a href="https://wa.me/917061882678" target="_blank"><ion-icon name="logo-whatsapp"></ion-icon></a>
    </div>

    
    <!--Whatsapp end-->
    
		<header>
		<nav>
			<input id="nav-toggle" type="checkbox">
			<a href="index.php">   
			<img src="resources/css/img/buildonclick.jpg" alt="buildonclick" class="logo">
			</a> 
            
            <ul class="links">
                <li><a href="index.php">Home</a></li>  
				<li><a href="services.php">Services</a></li> 
				<li><a href="blogs.php">Blogs</a></li>
				<li><a href="aboutus.php">About Us</a></li> 
				<li><a href="contact.php">Contact</a></li> 
				
                <?php
				if(isset($_SESSION['login_user']))
                { ?>
                <div class="dropdown">
                    <button class="dropbtn" onclick="myFunction()">My Profile
                    <!--<ion-icon name="caret-down-outline" size="small"></ion-icon>-->
                    </button>
                    <div class="dropdown-content" id="myDropdown">
                    <?php
				    if($_SESSION['login_type']=='customer'){  ?>
				        
                    <a href="myposts.php">MY POSTS</a>
                    <?php
                    } else {
                    ?>    
                        <a href="posts.php">POSTS</a>
                        <a href="bidding.php">MY BIDS</a>
                    <?php    
                        } 
                    ?>
                    
                    <?php
				    if($_SESSION['login_type']=='customer'){  ?>
                    <a href="myprofile.php">MY ACCOUNT</a>
                    <?php
                    } else {
                    ?>
                        <a href="profile.php">MY ACCOUNT</a>
                    <?php    
                        } 
                    ?>
                    <a href="logout.php">LOGOUT</a>
                   </div>
              </div> 
              <?php } ?>
            </ul>
            <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>    
            <div class="line"></div> 
            <div class="line"></div> 
            </label>
		</nav>	
		</header>
		
		<section  class="otherpages">
		<div class="headline1">
		<h2><center>Blogs</center></h2>	
		</div>	
		</section>
    <section>
      <div class="row">
        <div class="col span-3-of-5">
          <section class="bpost_section">
          <h4 class="bpost_heading">13 great ways to save on construction costs.</h4>
          <p class="bpost_date_created"></p>
   <p class="bpost_paragraph"></p>
   <ol class="bpost_ul">
    <li class="bpost_li">Set a budget from the beginning</li>
    <p class="bpost_paragraph">Determine your budget as soon as possible and communicate this to your architect or designer. Designers should have years of experience designing and building projects within budget. Take advantage of this and include it early in the design process.</p>
    <li class="bpost_li">Choose a simple design</li>
    <p class="bpost_paragraph">Create a simple shape. The more complex the building, the more expensive it is to build and operate.</p>
    <p class="bpost_paragraph">Each time you insert a corner into an exterior wall, it slows down the building process. Each valley or ridge you introduce increases the cost of the truss and increases labor hours.</p>
    <p class="bpost_paragraph">Avoid overly complex shapes if you want to save construction costs.</p>
    <li class="bpost_li">Stick to the plan</li>
    <p class="bpost_paragraph">The build isn't foolproof, but good design with integrity saves both time and money. What you specify is important for cost and delivery. If you change your mind along the way, you will need to consider additional costs.</p>
    <li class="bpost_li">Do It Yourself where you can</li>
    <p class="bpost_paragraph">Do small tasks if possible. One way to save money is to ask handymen for the tracking and other work required to save them on these low-skill jobs. They usually appreciate this very much and will walk you through the necessary steps before your next site visit. That way, they can immediately start working on what they've been trained to do.</p>
    <p class="bpost_paragraph">Cleaning up the site after replacement is another way to save on construction costs.</p>
    <li class="bpost_li">Get creative with cheap materials</li>
    <p class="bpost_paragraph">Think creatively about cheap materials. Can plywood, OSB (Oriented Strand Board) or coarsely sawn softwood be used instead of expensive hardwood? Are there materials that can be recycled or upcycled, or are they available for free?</p>
    <li class="bpost_li">Charge labor cost separately to save construction cost</li>
    <p class="bpost_paragraph">Consider the price of each element of the project separately. For example, after researching the price of roofing tiles, a certified he asks three roofing companies for a suitable price. This route saves you more than 20%</p>
    <p class="bpost_paragraph">The more packages you procure, the more you save, but be mindful of the work involved and how best to coordinate each incoming transaction.</p>
    <li class="bpost_li">Don't be afraid to hire a volume surveyor</li>
    <p class="bpost_paragraph">Don't assume that architects always know how much it will cost to build. It's up to you to research the various costs, add them all up, and then determine how the changes will affect your final construction budget.</p>
    <p class="bpost_paragraph">If this is a concern for you (it probably is!), hire a packaging company or bulk surveyor to work with you on your project.</p>
    <li class="bpost_li">Learn new skills</li>
    <p class="bpost_paragraph">DIY is a great way to reduce construction costs. Some of our customers have accepted building a house and have gone to extreme lengths to get the home they want.</p>
    <p class="bpost_paragraph">The customer wanted a metal standing roof, but could not afford it. So he took a certified installer course (free if you purchased his tools for installation) and, being a certified installer, installed a metal roof that came with a 20 year warranty.</p>
    <li class="bpost_li">Adopt Build Best Practices</li>
    <p class="bpost_paragraph">Do not use materials or techniques that the builder is not yet familiar with. Not only does this increase the time builders spend on site, but it also increases the number of waste and defects that need to be addressed at the end of the process, potentially reducing the quality of the final product.</p>
    <li class="bpost_li">Waste less</li>
    <p class="bpost_paragraph">Designing your home to maximize the efficiency of your chosen building system is the first and easiest way to save money.</p>
    <p class="bpost_paragraph">Using the example of SIP (Structural Insulated Panels) ,the panel is 1.2 m long. So if you lay out your house on a 1.2m grid, you don't need to cut the edges of the panels. All factory processes are costly, so try to avoid waste and unnecessary cuts.</p>
    <li class="bpost_li">Please investigate</li>
    <p class="bpost_paragraph">Making significant changes after construction has begun will inevitably increase costs, so it's worth doing some research before you start on-site.</p>
    <li class="bpost_li">Choose off-the-shelf over customization.</li>
    <p class="bpost_paragraph">Choosing bespoke details can quickly increase construction costs at any stage of construction. Try to stick to standard sizes whenever possible. This reduces lead times and construction costs.</p>
    <p class="bpost_paragraph">For example, if you're designing your home to include standard door widths, you can choose off-the-shelf joinery. This is much cheaper than hiring custom work. </p>
    <li class="bpost_li">Smart shopping</li>
    <p class="bpost_paragraph">It's much easier to go to a builder's merchant, but for the cost of a few phone calls, it's amazing how much savings you can achieve by shopping for the best prices. Ask about and check material costs. Merchants can raise their prices and lower them because their prices are higher than their competitors.</p>
    <p class="bpost_paragraph">Also, think about shipping costs.</p>
    <p class="bpost_paragraph">Small builder merchants often offer free shipping, saving you time fetching materials.</p>
   </ol>
          </section>
        </div>
        <div class="col span-2-of-5">
          <?php include ('popularpost.php')?>
        </div>
      </div>
    </section>

          
         

    <?php include ('footer.php')?>
		<script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
        }
        
        // Close the dropdown if the user clicks outside of it
        window.onclick = function(e) {
          if (!e.target.matches('.dropbtn')) {
          var myDropdown = document.getElementById("myDropdown");
            if (myDropdown.classList.contains('show')) {
              myDropdown.classList.remove('show');
            }
          }
        }
        </script>
	    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
	</body>



</html>

