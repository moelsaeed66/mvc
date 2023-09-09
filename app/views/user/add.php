<?php require("inc/header.php");?>
<div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
            <?php if(isset($success)): ?>
                    <h3 class="alert alert-success text-center"><?php  echo $success; ?></h3>
                <?php endif; ?>
                <?php if(isset($error)): ?>
                    <h3 class="alert alert-danger text-center"><?php  echo $error; ?></h3>
                <?php endif; ?>



    <form class="p-5 border mb-5" action="<?php url('user/insert');?>" method="post">
            <div class="form-group">
                <label for="name">name</label>
                <input type="text" required name="name" class="form-control" id="name" >
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="text" required name="email" class="form-control" id="email" >
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </form> 
        </div>
</div>


<?php require("inc/footer.php");?>
