<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="row container-fluid" style="margin-top: 20px;">

    <div class="col-lg-3 col-sm-6">
        <?php require APPROOT . '/views/includes/menu.php'; ?>
    </div>
    <div class="col-lg-9 col-sm-6">
    <h1 class="text-success">Register Pet</h1>
        <p>
            <a href="<?php echo URLROOT; ?>/pets/index" class="btn btn-success">Back to My Pets</a>
        </p>
        

        <div>

            <form action="<?php echo URLROOT; ?>/pets/register" method="post" enctype="multipart/form-data">
                <!--<?php if ($product['image']) : ?>
                <img src="<?php echo $product['image'] ?>" class="product-img-view">
            <?php endif; ?>
            <div class="form-group">
                <label>Product Image</label><br>
                <input type="file" name="image">
            </div>-->

            <div class="mb-3 form-group">
                    <label>Device Code</label>
                    <input type="number" name="device_code" class="form-control" value="<?php echo $data['device_code'] ?>">
                    <span class="text-danger"><?php echo $data['device_code_err']; ?> </span>
                </div>

                <div class="mb-3 form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $data['name'] ?>">
                    <span class="text-danger"><?php echo $data['name_err']; ?> </span>
                </div>

               <!-- <div class="mb-3 form-group">
                    <label>Classification</label>
                    <input type="text" name="classification" class="form-control" value="<?php echo $data['classification'] ?>">
                    <span class="text-danger"><?php echo $data['classification_err']; ?> </span>
                </div>-->

                <div class="mb-3 form-group">
                <select class="form-select" name="classification" value="<?php echo $data['classification'] ?>" aria-label="Default select example">
                <option value="Dog">Dog</option>
                <option value="Cat">Cat</option>
                <option value="Bird">Bird</option>
                <option value="Others">Others</option>
                </select>
                </div>

                <div class="mb-3 form-group">
                    <label>Age (DOB)</label>
                    <input type="date" name="age" class="form-control" value="<?php echo $data['age'] ?>">
                    <span class="text-danger"><?php echo $data['age_err']; ?> </span>
                </div>

                <div class="mb-3 form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>

        </div>

        <?php require APPROOT . '/views/includes/footer.php'; ?>