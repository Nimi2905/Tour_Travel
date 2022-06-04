<html>
<head>
<style>
       /* The Modal (background) */
.modal {
  display: none; 
  position: fixed; 
  padding-top: 100px; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
}

/* Modal Content */
 .modal-content {
  background-image:linear-gradient(to bottom, #6600ff 0%, #ff99ff 100%);
  margin: auto;
  padding: 10px;  
  border: 1px solid #888;
  width: 32%;
} 


/* The Close Button */
.close {

  color:brown;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
                                                         

			
			fieldset{
				margin-top:20px;
				width:400px;
                                height:300px;
                               
                                background-image:linear-gradient(to bottom, #ff6699 0%, #33cc33 100%);  
			
				border-width:10px;
			}
			legend{
				font-family:Gabriola;
				font-size:50px;
                            
                             
			}
 .bt2{
                              margin-right: 10px;
     border-radius: 4px;
    padding: 12px 30px;  
   text-decoration: none;
   letter-spacing: 1px;
  text-decoration: none;
  color: #F8F8FF;
 background-image:linear-gradient(to bottom, #660033 0%, #cc3300 100%);  
 }
table {
  border-spacing: 25px;
  font-family: monotype coursiva;
}
.tab{
  color: #4B0082;
  }
 #search {
            border-radius: 50px;
            border: 2px solid black;
        }

        #button {
            
            border: 0px solid black;
            height: 5
0px;
            border-radius: 30px;
            cursor: pointer;
        }

  </style>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>  
</head>
<body>

<div id="myModal" class="modal">


  <div class="modal-content">
     
    <span class="close">&times;</span>
    <center>
      
   <form  >
    
		<fieldset border-width=200>
		<legend class="f1">Login</legend>
		<table cellpadding=8>
			<tr>
				<td class="tab">Admin Id</td>
				<td><input type=text name="aid"/></td>
			</tr>
			<tr>
				<td class="tab">Password</td>
				<td><input type=password name="password"/></td>
			</tr>
                  
                        
		</table>
		<br><br>
  	<input class = "bt2" type=submit value="Logout" />  
              
		
		 
		</fieldset>
		</form>
                <center>
  </div>

</div>
</body>
</html>
echo "<script>document.getElementById("logout").style.display='block';</script>";
echo "<script>document.getElementById("log").style.display='none';</script>";
}
if(isset($_SESSION["username"])){