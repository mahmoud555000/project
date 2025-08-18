<?php

include "./inc/conn.php";
include "./inc/form.php";
include "./inc/db_select.php";



mysqli_free_result($res);
mysqli_close($conn);





?>

<?php include "./parts/header.php"; ?>

<div class="loader-con">

<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>

</div>



<div class="container">
  
  




  <div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold text-body-emphasis">Win with Mahmoud</h1>
    
    <p id ="demo"></p>
    
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae?</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
      </div>
    </div>
  </div>


  <!-- <ul class="list-group list-group-flush">
    <li class="list-group-item">Lorem ipsum dolor sit amet consectetur adipisicing.</li>
    <li class="list-group-item">Lorem ipsum dolor sit amet consectetur adipisicing.</li>
    <li class="list-group-item">Lorem ipsum dolor sit amet consectetur adipisicing.</li>
  </ul> -->



  <form class="mt-3" action="  <?php $_SERVER['PHP_SELF']; ?>" method="post">
    <h3>pealse enter your infromation</h3>


    <div class="mb-3">
      <label for="fristname" class="form-label">Frist Name</label>
      <input type="text" name="FirstName" value="<?php echo $FirstName ?? ''; ?>" class="form-control" id="fristname">
      <div class="form-text error"><?php echo $errors['FirstNameErrors'] ?></div>
    </div>


    <div class="mb-3">
      <label for="lastname" class="form-label">Last Name</label>
      <input type="text" name="LastName" value="<?php echo $LastName ?? ''; ?>" class="form-control" id="lastname">
      <div class="form-text error"><?php echo $errors['LastNameErrors'] ?></div>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="text" name="email" value="<?php echo $email ?? ''; ?>" class="form-control" id="email">
      <div class="form-text error"><?php echo $errors['EmailErrors'] ?></div>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>









  <!-- <form action="index.php" method="post">

    <input type="text" name="FirstName" id="Firstname" placeholder="FirstName">

    <input type="text" name="LastName" id="LastName" placeholder="LastName">

    <input type="text" name="email" id="email" placeholder="email">

    <input type="submit" name="submit" value="send">
  </form> -->



  <div class="row">

    <!-- <?php foreach ($users as $user): ?>
  
    <h1><?PHP echo htmlspecialchars($user['firstname']) . ' ' . htmlspecialchars($user['lastname']) . '<br>' . htmlspecialchars($user['email']); ?></h1>
  <?PHP endforeach; ?>

</div> -->




<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto">
 
<button type="button" id="winner" class="btn btn-primary">
  the winner
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"> the winner</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <?php foreach ($users as $user) : ?>
            <?php echo htmlspecialchars($user['firstname']) . '<br>' . htmlspecialchars($user['lastname']); ?>
          <?php endforeach; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<!-- <div id="cards" class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">
            
          </h5>
          <p class="card-text">
            <?php echo htmlspecialchars($user['email']); ?>
          </p>
        </div>
      </div>
    </div>
 -->



</div>





  <?php include "./parts/footer.php"; ?>