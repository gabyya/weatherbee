<div class="image-container" background url= ("../images/park.jpg")>


<form action="forecast.php" method="post">
  <div class="form-group">
    <label class="sr-only" for="location">Location</label>
    <input type="text" class="form-control bg-rgba($yellow, .5) text-white" id="location" aria-describedby="location-help" placeholder="Location" name="location" value="<?php echo (isset($_POST['location']) ? $_POST['location'] : '') ?>">
  </div>
  <button type="submit" name="submit" class="btn  text-white ">Search</button>
</form>

</div>