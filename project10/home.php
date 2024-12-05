<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		*{
			margin:0;
			padding: 0;
			box-sizing: border-box;
			font-family: sans-serif;
		}

		.container{
			display: grid;
			background-color: mintcream;
			grid-template-columns: 1fr 1fr 1fr;
			text-align: center;
			min-height:100vh;

		}

		header{
			  grid-column-start: 1;
			  grid-column-end: 4;
			  grid-row-start:1;
			  grid-row-end:2;
			  background-color: black;
			  color: wheat;
			  padding: 20px;
			  
			  
		}

		nav{
			  grid-column-start: 1;
			  grid-column-end: 4;
			  grid-row-start:2;
			  grid-row-end:3;
			  background-color:blue;
			  color: wheat;
			  padding:20px;
			  
		}

		main{
			  grid-column-start: 2;
			  grid-column-end: 4;
			  grid-row-start:3;
			  grid-row-end:6;
			  background-color:tomato;
			  color: wheat;
			  padding:20px;
			  
		}

		aside{
			  grid-column-start: 1;
			  grid-column-end: 2;
			  grid-row-start:3;
			  grid-row-end:7;
			  background-color:greenyellow;
			  color: wheat;
			  padding:20px;
			  
		}

		.box1{
			  grid-column-start: 2;
			  grid-column-end: 3;
			  grid-row-start:6;
			  grid-row-end:7;
			  background-color:red;
			  color: wheat;
			  padding:20px;
			  
		}


		.box2{
			  grid-column-start: 3;
			  grid-column-end: 4;
			  grid-row-start:6;
			  grid-row-end:7;
			  background-color:peru;
			  color: wheat;
			  padding:20px;
			  
		}


		footer{
			  grid-column-start: 1;
			  grid-column-end: 4;
			  grid-row-start:7;
			  grid-row-end:9;
			  background-color: black;
			  color: wheat;
			  padding: 20px;
			  
			  
		}

		@media screen and (max-width:460px){

			header{
			  grid-column-start: 1;
			  grid-column-end: 4;
			  grid-row-start:1;
			  grid-row-end:2;
			  background-color: black;
			  color: wheat;
			  padding: 20px;
			  
			  
		}

		nav{
			  grid-column-start: 1;
			  grid-column-end: 4;
			  grid-row-start:2;
			  grid-row-end:3;
			  background-color:blue;
			  color: wheat;
			  padding:20px;
			  
		}

		main{
			  grid-column-start: 1;
			  grid-column-end: 4;
			  grid-row-start:3;
			  grid-row-end:6;
			  background-color:tomato;
			  color: wheat;
			  padding:20px;
			  
		}

		aside{
			  grid-column-start: 1;
			  grid-column-end: 4;
			  grid-row-start:3;
			  grid-row-end:7;
			  background-color:greenyellow;
			  color: wheat;
			  padding:20px;
			  
		}

		.box1{
			  grid-column-start: 1;
			  grid-column-end: 4;
			  grid-row-start:6;
			  grid-row-end:7;
			  background-color:red;
			  color: wheat;
			  padding:20px;
			  
		}


		.box2{
			  grid-column-start: 1;
			  grid-column-end: 4;
			  grid-row-start:6;
			  grid-row-end:7;
			  background-color:peru;
			  color: wheat;
			  padding:20px;
			  
		}


		footer{
			  grid-column-start: 1;
			  grid-column-end: 4;
			  grid-row-start:7;
			  grid-row-end:9;
			  background-color: black;
			  color: wheat;
			  padding: 20px;
			  
			  
		}






		}






	</style>
	<title>AboutUs</title>
</head>
<body>

	<div class="container">
		<header>Header</header>
		<nav>Navbar</nav>
		<main>Main Section</main>
		<aside>Sidebar</aside>
		<div class="box1">Box1</div>
		<div class="box2">Box2</div>
        <footer>Footer</footer> 
	</div>

</body>
</html>