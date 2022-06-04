
<?php
	session_start();
?>
<html>
	<head>
		<title>Other information</title>
		<style>
			body{
				background-color:rgba(240,240,240,0.5);
			}
			div{
				line-height:50px;
				background-color:white;
				padding:10px;
				height:400px;
				width:500px;
				box-shadow:5px 3px 5px gray;
				border:outset;
				margin:150px 350px;
			}
		</style>
	</head>	
	<body>

		<div>
			<form action=hotel1.php method="post"  onsubmit="return validate()">
			<?php
				if(isset($_SESSION["pcode"])){		
					echo "Package Code:".$_SESSION["pcode"]."<br>";
					echo "Number Of Travelers:".$_SESSION["nt"]."<br>";
					echo "Total Price:".$_SESSION["tp"]."<br>";
				}
			?>
			<input type=hidden id=h name=h value="<?php echo $_SESSION['tp']; ?>" >
			Enter room numbers: <input type=number name=n id=n onchange=tprice() required><br>
			Choose Hotel Type(This price will add up in your Total Price) : <select id=s name=s onchange=tprice() required>
						<option></option>
						<option value=1200>1 star(Rs 1200)</option>
				 		<option value=2200>2 star(Rs 2200)</option>
						<option value=3200>3 star(Rs 3200)</option>
						<option value=4800>4 star(Rs 4800)</option>
						<option value=5600>5 star(Rs 5600)</option>
					     </select><br>
			Enter Start Date for your journey: <input type=date name=d id=d required><br>
			
			<input type=submit value=Submit>
			<input type=reset value=Reset>
			</form>
		</div>
			<script>
                                function validate(){
					 var inpDate = new Date(document.getElementById("d").value);
					 var currDate = new Date();
					if(parseInt(document.getElementById("n").value)<=0){
						alert("No. of rooms are not correct");
						return false;
					}
					else if(inpDate.setHours(0, 0, 0, 0) <= currDate.setHours(0, 0, 0, 0)){
						alert("Wrong Date");
						return false;
					}
					return true;
				}
				function tprice(){
					if(parseInt(document.getElementById("n").value)>0 && (parseInt(document.getElementById("s").value)>0)){	
					var tp=parseInt(document.getElementById("s").value)*parseInt(document.getElementById("n").value);
					tp=parseInt(document.getElementById("h").value)+tp;
					document.getElementById("h").value=tp;
					}
					else
						document.getElementById("s").selectedIndex = "0";
					
				}
			</script>	
	</body>
</html>		