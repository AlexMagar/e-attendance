<?php include_once DIR_VIEW.'./parts/header.php';?>
<body class="student">
  <?php
  include_once DIR_VIEW.'./parts/nav.php' ;?>
  <div class="row">
   <div class="col two">
    <h1>Student Form</h1>
    <form class="block-form" action="<?php echo route('do.student.profile'); ?>" method="POST">
        <label for="first_name">First Name</label>
             <input type="text" name="first_name" placeholder="Alex"/>
        <label for="middle_name">Middle Name</label>
              <input type="text" name="middle_name" placeholder="Bhadur" />
        <label for="last_name">Last Name</label>
              <input type="text" name="last_name" placeholder="Magar" />
              <input class="btn btn-primary" type="submit" value="send"/>
    </form>

    </div>
   <div class="col two">
   <div>
    </div>
