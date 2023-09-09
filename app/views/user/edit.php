<?php  include('inc'.DS.'header.php'); ?>
<h1 class="text-center  mt-5 mb-2 py-3">Edit user </h1>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
            <?php if(isset($success)): ?>
                    <h3 class="alert alert-success text-center"><?php  echo $success; ?></h3>
                <?php endif; ?>






            <form class="p-5 border mb-5" method="POST" action="<?php url('user/update/'.$row['id']); ?>">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" required name="name" value=<?=$row['name'];?> class="form-control" id="name" >
                    </div>
                    <div class="form-group">
                        <label for="price">email</label>
                        <input type="text" required class="form-control" value=<?=$row['email'];?> name="email" id="email">
                    </div>


                    <button type="submit" name="submit" class="btn btn-primary">update</button>
                </form>
                            
            </div>
        </div>
    </div>



<?php  include('inc'.DS.'footer.php'); ?>