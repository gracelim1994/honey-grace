<html>
	<head>
		
		<title>Ericka@Grace Shop</title>
		<link rel="stylesheet" type="text/css" href="Stylesheet.css" />
	</head>
	<body>
		<div id="wrapper">
			<div id="banner">
		</div>
		
	<nav id="navigation">
		<ul id='nav'>
				<li><a href='content.php'>Home</a></li>
				<li><a href='product.php'>Product</a></li>
				<li><a href='service.php'>Services</a></li>
				<li><a href='index.php'>Logout</a></li>
		</ul>
	</nav>
		
<div id="content_area">
	<table border = 1>

	<tr>
	<td>

		<center><a href='product.php?image= product/peanutbutter.jpg&description= Peanut Butter Cupcake<br>Price: 15/pc<font color = "blue" size = "3"'>
		<img src=product/peanutbutter.jpg width=100 height=100></a></td>
		<td>

		<a href='product.php?image=product/redvelvet.jpg&description= Red Velvet Cupcake<br>Price: 35/pc<font color = "blue" size = "3"'>
		<img src=product/redvelvet.jpg width=100 height=100></a></td>
		<td>

		<a href='product.php?image=product/snowball.jpg&description= Snow Ball Cupcake<br>Price: 55/pc<font color = "blue" size = "3"'>
		<img src=product/snowball.jpg width=100 height=100></a></td>
		<td>

		<a href='product.php?image=product/StrawberryCupcake.jpg&description=Strawberry Cupcake<br>Price: 25/pc<font color = "blue" size = "3"'>
		<img src=product/StrawberryCupcake.jpg width=100 height=100></a></td>
		<td>

		<a href='product.php?image=product/Toffeecrunch.jpg&description= Toffee Crunch Cupcake<br>Price: 40/pc<font color = "blue" size = "3"'>
		<img src=product/Toffeecrunch.jpg width=100 height=100></a></td>
		<td>

		<a href='product.php?image=product/triplechoco.jpg&description= Triple Choco Cupcake<br>Price: 20/pc<font color = "blue" size = "3"'>
		<img src=product/triplechoco.jpg width=100 height=100></a></td>
		<td>

		<center><a href='product.php?image=product/Applepie.jpg&description=Apple Pie Cupcake<br>Price: 25/pc<font color = "blue" size = "3"'>
		<img src=product/Applepie.jpg width=100 height=100></a></td>
		<td>

		<center><a href='product.php?image=product/BlackandWhite.png&description=Black and White Cupcake<br>Price: 20/pc <font color = "blue" size = "3"'>
		<img src=product/BlackandWhite.png width=100 height=100></a></td>
		<td>

		<center><a href='product.php?image=product/blackberrypie.jpg&description=Blackberry Pie Cupcake<br>Price: 35/pc <font color = "blue" size = "3"'>
		<img src=product/blackberrypie.jpg width=100 height=100></a></td>
		<td>

		<center><a href='product.php?image=product/chococheese.png&description= Choco Chesse Cupcake<br> Price: 45/pc <font color = "blue" size = "3"'>
		<img src=product/chococheese.png width=100 height=100></a></td>


	<tr>
		<?php
			if (isset($_GET['image']))
			{
			$a=$_GET['image'];
			$b=$_GET['description'];
			print "<table border=0 align = 'center'>";
			print "<tr>";
			print "<td>"."<center><img src=$a width=350 height=250>" ."</td>";
			print "<td>"."<center><b><font size = 10 face = 'parchment' color = 'red'>" . $b. "</td>";
			print "<tr>";
			print "</table>";
			}
		?>
		
	</table>
</div>	
	
		<footer>
			CHOCOLATE&nbsp;&nbsp;|&nbsp;&nbsp;
			CARAMEL&nbsp;&nbsp;|&nbsp;&nbsp;
			VANILLA&nbsp;&nbsp;|&nbsp;&nbsp;
			STRAWBERRY&nbsp;&nbsp;|&nbsp;&nbsp;
			RED VELVET&nbsp;&nbsp;&nbsp;&nbsp;
			<br><span>&copy; Honey@Grace Shop</span>
		</footer>		
	</div>		
</body>
</html>


