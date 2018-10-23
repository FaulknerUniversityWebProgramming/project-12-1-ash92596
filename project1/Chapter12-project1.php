<?php 
  $genres = array("Abstract", "Baroque", "Gothic", "Renaissance");
  $subjects = array("Animals", "Landscape", "People");

  function outputArray($array) {
        foreach ($array as $key => $value) {
            echo '<option>'; 
            echo $value;
            echo '</option>';      
        }
  }

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <title>Chapter 12</title>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/misc.js"></script>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
<?php include 'header.inc.php'; ?>

    
<main>
<form class="form"  id="mainForm" action="art-process.php" method="POST">
   <fieldset class="form__panel">
      <legend class="form__heading">Edit Art Work Details</legend>
        <p class="form__row">
           <label>Title</label><br/>
           <input type="text" name="title" class="form__input form__input--large"/>
       </p>
       <p class="form__row">
           <label>Description</label><br/>
           <input type="text" name="description" class="form__input form__input--large">
       </p>            
       <p class="form__row"> 
           <label>Genre</label><br/>
           <select name="genre" class="form__input form__select">
              <option>Choose genre</option> 
              <?php outputArray($genres);?>
           </select>
       </p>
       <p class="form__row"> 
           <label>Subject</label><br/>
           <select name="subject" class="form__input form__select">
              <option>Choose subject</option> 
              <?php outputArray($subjects);?>
           </select>
       </p>
       <p class="form__row">	
           <label>Medium</label><br/>               
           <input type="text" name="medium" class="form__input form__input--medium" />
       </p>
       <p class="form__row">	
           <label>Year</label><br/>               
           <input type="text" name="year" class="form__input form__input--small" />
       </p>  
       <p class="form__row">	
           <label>Museum</label><br/>               
           <input type="text" name="museum" class="form__input form__input--medium"/>
       </p>                             

       <div class="form__box"> 
          <input type="submit" class="form__btn"> <input type="reset" value="Clear Form" class="form__btn">      
       </div>
   </fieldset>
</form>
</main>       
</body>
</html>
