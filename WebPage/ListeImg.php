<html>
   <head>
      <title>Stock d'images</title>
   </head>
   <body>
   <div class="container">
         <div class="flex">
      <?php
 include ("models/connect.php");
$reponse = 'SELECT img_id,img_type,img_nom,img_blob FROM imagesvetements ORDER BY img_nom DESC';
$ret =  mysqli_query ($GLOBALS['conn'],$reponse) or die (mysqli_error($GLOBALS['conn']));
if($ret->num_rows > 0){
while (($data = mysqli_fetch_assoc($ret)))
        {
         // echo '<img src="data:'.$data['img_type'].';base64,' . base64_encode($data['img_blob']) . '" height="200" width="200" alt="mon image" title="image"/>';
         echo '<div class="card">
            <h1>' .$data['img_nom'].'</h1>
            <img src="data:'.$data['img_type'].';base64,'.base64_encode($data['img_blob']).'" height="200" width="200" alt="mon image" title="image"/>
      </div>';
      }
             }
?>
         </div>
   </div>
   </body>
</html>
<style>
   @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
   body{
   margin: 0;
	width: 100%;
	height: 100vh;
   background:linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradientBG 15s ease infinite;
}
@keyframes gradientBG {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
   }
   .container{
      position: relative;
      width: 100%;
      height: 99.9vh;
   }
   .flex{
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-direction: column;
   }
   .card{
    width: 200px;
    height: 250px;
    display: flex;
    align-items: center;
    margin: 40px;
    align-content: center;
    justify-content: center;
    flex-direction: column;
   }
   h1{
      font-family: 'Roboto', sans-serif;
      font-size: 30px;
      color: white;
      text-shadow: 0 0 7px white;
   }
   img{
      border-radius: 100%;
   }
</style>