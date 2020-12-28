<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MY Project</title>
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
</head>
<body>
	<header>
		<a href="#"class="logo">Coffee<span>.</span></a>
		<div class="menuToggle" onclick="toggleMenu();"></div>
		<ul class="navigation">
			<li><a href="#banner" onclick="toggleMenu();">Home</a></li>
			<li><a href="#about" onclick="toggleMenu();">About</a></li>
			<li><a href="#menu" onclick="toggleMenu();">Menu</a></li>
			<li><a href="#chef" onclick="toggleMenu();">Chef</a></li>
			<li><a href="#testimonials" onclick="toggleMenu();">Testimonials</a></li>
			<li><a href="#contact" onclick="toggleMenu();">Contact</a></li>
			<li><a href="{{ url('/all_contact_data') }}" target="_blank">Admin</a></li>
		</ul>
	</header>
	<section class="banner" id="banner">
		<div class="content">
			<h2>Coffee House</h2>
			<p>A place for everybody for refreshment.</p>
			<a href="#" class="btn">Menu</a>
		</div>	
	</section>

    <section class="about" id="about">
    	<div class="row">
    		<div class="col50">
    			<h2 class="titleText"><span>A</span>bout</h2>
    			<p>Lorem epsum dolor sit amet, consectetor adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosturd. exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>Lorem epsum dolor sit amet, consectetor adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosturd. exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in  reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem epsum dolor sit amet, consectetor adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosturd. exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
    			</div>   			
    			<div class="col50">
    				<div class="imgBx">
    						<img src="{{ asset('public/assets/about1.jpg') }}">
    				</div>
    			</div>
    		</div>
    </section>


    <section class="menu" id="menu">
    	<div class="title">
    		<h2 class="titleText"><span>M</span>enu</h2>
    		<p>Lorem epsum dolor sit amet, consectetor adipisicing elit.</p>
    	</div>
    	<div class="content">
    		<div class="box">
    			<div class="imgBx">
    				<img src="{{ asset('public/assets/coffee1.jpg') }}">
    			</div>
    			<div class="text">
    				<h3>Special Coffee</h3>
    			</div>
    		</div>
    		<div class="box">
    			<div class="imgBx">
    				<img src="{{ asset('public/assets/coffee2.jpg') }}">
    			</div>
    			<div class="text">
    				<h3>Hot Cocoa</h3>
    			</div>
    		</div>
    		<div class="box">
    			<div class="imgBx">
    				<img src="{{ asset('public/assets/coffee3.jpg') }}">
    			</div>
    			<div class="text">
    				<h3>Classic Gold Chocolate</h3>
    			</div>
    		</div>
    		<div class="box">
    			<div class="imgBx">
    				<img src="{{ asset('public/assets/desert1.jpg') }}">
    			</div>
    			<div class="text">
    				<h3>Fruit Pastry</h3>
    			</div>
    		</div>
    		<div class="box">
    			<div class="imgBx">
    				<img src="{{ asset('public/assets/desert2.jpg') }}">
    			</div>
    			<div class="text">
    				<h3>French Pastry</h3>
    			</div>
    		</div>
    		<div class="box">
    			<div class="imgBx">
    				<img src="{{ asset('public/assets/desert3.jpg') }}">
    			</div>
    			<div class="text">
    				<h3>Cake Pops</h3>
    			</div>
    		</div>
    	</div>
    	<div class="title">
    		<a href="#" class="btn">More</a>
    	</div>
    </section>

    <section class="chef" id="chef">
    	<div class="title">
    	<h2 class="titleText">Our <span>C</span>hefs</h2>
    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> 
        </div>
        <div class="content">
        	<div class="box">
        		<div class="imgBx">
        			<img src="{{ asset('public/assets/chef1.png') }}">
        		</div>
        		<div class="text">
        			<h3>Nairobi Kenya</h3>
        		</div>
        	</div>
        	<div class="box">
        		<div class="imgBx">
        			<img src="{{ asset('public/assets/chef2.jpg') }}">
        		</div>
        		<div class="text">
        			<h3>San Diego</h3>
        		</div>
        	</div>
        	<div class="box">
        		<div class="imgBx">
        			<img src="{{ asset('public/assets/chef3.jpg') }}">
        		</div>
        		<div class="text">
        			<h3>Someone Famous</h3>
        		</div>
        	</div>
        	<div class="box">
        		<div class="imgBx">
        			<img src="{{ asset('public/assets/chef4.png') }}">
        		</div>
        		<div class="text">
        			<h3>Matt Farman</h3>
        		</div>
        	</div>
        </div>
    </section>


    
    <section class="testimonials" id="testimonials">
    	<div class="title white">
    	<h2 class="titleText">They <span>S</span>aid About Us</h2>
    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> 
        </div>
        <div class="content">
        	<div class="box">
        		<div class="imgBx">
        			<img src="{{ asset('public/assets/review1.jpg') }}">
        		</div>
        		<div class="text">
        			<p>Lorem epsum dolor sit amet, consectetor adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosturd. exercitation ullamco laboris nisi ut aliquip ex ea.</p>
        			<h3>Leah Kelle</h3>
        		</div>
        	</div>
        	<div class="box">
        		<div class="imgBx">
        			<img src="{{ asset('public/assets/review2.jpg') }}">
        	<div class="box">
        		<div class="imgBx">
        			<img src="{{ asset('public/assets/review1.jpg') }}">
        		</div>
        		<div class="text">
        			<p>Lorem epsum dolor sit amet, consectetor adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosturd. exercitation ullamco laboris nisi ut aliquip ex ea.</p>
        			<h3>Someone famous</h3>
        		</div>
        	</div>
        		</div>
        		<div class="text">
        			<p>Lorem epsum dolor sit amet, consectetor adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosturd. exercitation ullamco laboris nisi ut aliquip ex ea.</p>
        			<h3>John Wilton</h3>
        		</div>
        	</div>
        	<div class="box">
        		<div class="imgBx">
        			<img src="{{ asset('public/assets/review3.jpg') }}">
        		</div>
        		<div class="text">
        			<p>Lorem epsum dolor sit amet, consectetor adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosturd. exercitation ullamco laboris nisi ut aliquip ex ea.</p>
        			<h3>Polina Tankilevitch</h3>
        		</div>
        	</div>
        </div>
    </section>

    <section class="contact" id="contact">
    	<div class="title">
    	<h2 class="titleText"><span>C</span>ontact</h2>
    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> 
        </div>
        <div class="contactForm">
		<form action="{{ url('add_contact') }}" method="post" enctype="multipart/form-data">
		@csrf
        	<h3>Send Message</h3>
        	<div class="inputBox">
        		<input type="text" name="name" placeholder="Name">
        	</div>
        	<div class="inputBox">
        		<input type="text" name="email" placeholder="Email">
        	</div>
        	<div class="inputBox">
        		<textarea placeholder="Address" name="address"></textarea>
        	</div>
        	<div class="inputBox">
        		<input type="submit" value="Send">
        	</div>
			</form>
        </div>
    </section>


    <div class="copyrightText">
    	<p>Copyright 2020 <a href="#">My Project</a>. All right reserved.</p>
    </div>


	<script type="text/javascript">
		window.addEventListener('scroll',function(){
			const header = document.querySelector('header');
			header.classList.toggle("sticky", window.scrollY > 0);
		});



		function toggleMenu(){
			const menuToggle = document.querySelector('.menuToggle');
			const navigation = document.querySelector('.navigation');
			menuToggle.classList.toggle('active');
			navigation.classList.toggle('active');
		}
	</script>
</body>
</html>