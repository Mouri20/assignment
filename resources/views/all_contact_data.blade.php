<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MY Project</title>
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
</head>
<body>


    <section class="menu" id="menu">
    	<div class="title">
    		<h2 class="titleText"><span>Contact Form</span> User Data</h2>
            <table id="customers">
                    <thead>
                    <tr>
                      <th>ID</th>  
                      <th>Name</th>
                      <th>Email</th>
                      <th>Address</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($viewAllData as $viewAllDatas)
                    <tr>
                      <td>{{ $viewAllDatas->id }}</td>
                    <td>{{ $viewAllDatas->name }}</td>
                    <td>{{ $viewAllDatas->email }}</td>
                    <td>{{ $viewAllDatas->address }}</td>
                    </tr>
                    @endforeach

                    </tbody>
                  </table>
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