<?php
// global/error.php

// $error is already set in add_petstore_process.php

// Show the main form page again
// (global/ is one level below add_petstore.php, so go up one directory)
include('../a5/index.php');
?>

<!-- Error message at the bottom of the page -->
<div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2 text-center" style="margin-top:30px;">
      <hr />
      <h3>Error!</h3>
      <p><?php echo $error; ?></p>
    </div>
  </div>
</div>
