<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p class="text-white bg-danger text-center fs-4"><?php echo $error ?></p>
  	<?php  endforeach ?>
  </div>
  
<?php  endif ?>