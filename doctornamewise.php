	<!DOCTYPE  HTML> 
	<html> 
	  <head> 
           <title> Online Doctor Information System </title>
	    <meta name="ROBOTS" content="NOINDEX, NOFOLLOW"/>
            <style type="text/css"> 
            #tfnewsearch{
		float:left;
		padding:20px;
	}
.tftextinput{
		margin: 0;
		padding: 5px 20px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:15px;
		border:1px solid #0076a3; border-right:0px;
		border-top-left-radius: 5px 5px;
		border-bottom-left-radius: 5px 5px;
	}
	.tfbutton {
		margin: 0;
		padding: 5px 20px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:15px;
		outline: none;
		cursor: pointer;
		text-align: center;
		text-decoration: none;
		color: #ffffff;
		border: solid 1px #0076a3; border-right:0px;
		background: #0095cd;
		background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
		background: -moz-linear-gradient(top,  #00adee,  #0078a5);
		border-top-right-radius: 5px 5px;
		border-bottom-right-radius: 5px 5px;
	}

.submit{
	width:80px;
	padding:5px;
	border:none;
	border-radius:4px;
	background-color:#008dde;
	color:#fff;
	font-weight:bold;
}
html { 
  background: url(loginimg.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.tfbutton:hover {
		text-decoration: none;
		background: #007ead;
		background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
		background: -moz-linear-gradient(top,  #0095cc,  #00678e);
	}
.tfbutton::-moz-focus-inner {
	  border: 0;
	}
.tfclear{
		clear:both;
        }

</style>
</head> 
	  <p><body text=#065e07> 
	    <h1><p><b>Search for Doctor </b></p></h1> 
	    
	    <form  method="post" action="searchdoct.php">
<input  type="text" class="tftextinput"  name="fname" placeholder="Type Doctor name">
<input type="submit" value="Search" class="tfbutton"> 
               </form>  
               <div class="tfclear"></div>
	 	
        </body> 
	</html> 
	</p>