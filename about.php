<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="/website/styles.css?<?php echo time(); ?>"/>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class = "transition">

<div class="topnav">

  <div class="header"> FARIHA </div>

  <div class="topnav-centered">

  <a href="https://farihaambia.com/home">HOME</a>
  <a href="https://farihaambia.com/about" class="active" >ABOUT</a>
  <a href="https://farihaambia.com/resume">RESUME</a>
  <a href="https://farihaambia.com/portfolio">PORTFOLIO</a>
  <a href="https://farihaambia.com/gallery">GALLERY</a>
  
</div>
</div>

<div class = "about"> 

<img class = "mypic" src="/website/me.jpg" />

<p class = "para">I'm a New York born Bengali lass who has spent a significant portion of my formidable years in Bangladesh. From a young age I had a love for art across all mediums, from sketching, to coding, and even writing. I enjoy working with colors and distinct motifs and experimenting with contemporary subjects in traditional environments and vice-versa. I see every new project I start as a clean canvas ready to be my next piece.   
   <br> <br>
    Professionally, I'm a 3D artist and UI/UX designer, working on multiple platforms like Adobe CC, Cinema 4D, Blender, and Mixamo. I also work as a web developer and create animation art. As a web developer, the languages I'm familiar with are HTML, CSS, and JavaScript. Currently, I am working as a freelance artist.
 </p>



<div class="float-container">


<div class="column left">
    <p class="small">
CONTACT
</p>

<p class="big">
<b>Email:</b> <a href="mailto:fariha@farihaambia.com" style="text-decoration:none; color: grey;">fariha@farihaambia.com</a><br>

<b>Phone:</b> +1 (929) 304-5909<br>
<!-- <b>Mailing Address:</b> 
P.O. Box 12345<br> 
Kew Gardens, NY, 11111-2222<br> -->
</p>
  
</div>

<div class="column right">

<div class="container">
    
<form name="frmContact" method="post" action="">
<p>
<label for="Name">Name </label>
<input type="text" name="txtName" id="txtName">
</p>
<p>
<label for="email">Email</label>
<input type="text" name="txtEmail" id="txtEmail">
</p>
<p>
<label for="message">Message</label>
<textarea cols="50" rows="5" name="txtMessage" id="txtMessage"></textarea>
</p>
<p>
<input type="Submit" name="Submit" id="Submit" value="Submit">
</p>
</form>

<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

if (isset($_POST['Submit'])) {

$con = mysqli_connect('127.0.0.1:3306', 'u731333236_EmailInfo', '#Twilight101','u731333236_Email');



// get the post records

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtMessage = $_POST['txtMessage'];



// database insert SQL code
$sql = "INSERT INTO `EmailDetails` (`Id`, `Name`, `Email`, `Message`) VALUES ('0', '$txtName', '$txtEmail', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);



if($rs)
{
	echo "Successfuly Sent";
}

else{ echo "Error. Please try again later.";}


}
?>
    
  
 
</div>


</div>
</div>
</div> 

<?php include 'footer.php';?>

</body>
</html>