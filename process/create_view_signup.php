<?php 
   require_once('../partial/header.php');
   include_once('../inc/function.php');
?>

<link rel="stylesheet" href="../assets/css/style_signin.css">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form action="create_model_signup.php" method="POST" class="box">
                    <img src="../assets/images/userlogin.png" width="70" height="70">
                        <p class="text-muted">Please fill this form to create an account.</p> 
                        <input type="text" name="user_name" placeholder="Username" required> 
                           
                        <input type="password" name="user_pass" placeholder="Password" required>
                            
                        <input type="text" name="user_role" placeholder="Position" required>
                            
                        <input type="file" name="user_profile" required> 
                            
                        <hr>
                        <div class="form-footer">
                            <button class="btn btn-outline-success">Sign Up</button>
                            <h6 class="text-muted">OR</h6>
                            <a href="pages/home.php"><button class="btn btn-outline-danger">Cancel</button></a>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
   include_once('../partial/footer.php');
?>