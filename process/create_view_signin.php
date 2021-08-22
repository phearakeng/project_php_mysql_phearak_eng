<?php 
   require_once('../partial/header.php');
   include_once('../inc/function.php');
?>
<link rel="stylesheet" href="../assets/css/style_signin.css">
<div class="container">
   <div class="row">
      <div class="col-md-6">
         <div class="card">
            <form action="create_model_signin.php" method="POST" class="box">
               <img src="../assets/images/userlogin.png" width="70" height="70">
                  <p class="text-muted">Please fill in your credentials to login.</p> 
                     <input type="text" name="user_name" placeholder="Username"> 
                        <input type="password" name="user_pass" placeholder="Password"> 
                        <div class="form-footer">
                           <button type="submit" class="btn btn-outline-success">Sign In</button>
                              <h6 class="text-muted">OR</h6>
                           <button type="reset" class="btn btn-outline-danger">Cancel</button>
                        </div>
            </form>
         </div>
      </div>
   </div>
</div>
<?php
   include_once('../partial/footer.php');
?>