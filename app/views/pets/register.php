<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="row container-fluid" style="margin-top: 20px;">

    <div class="col-3">
        <?php require APPROOT . '/views/includes/menu.php'; ?>
    </div>
    <div class="col-9">
        <p>
            <a href="<?php echo URLROOT; ?>/pets/index" class="btn btn-success">Back to My Pets</a>
        </p>
        <h1 class="text-success">Register Pet</h1>

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
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $data['name'] ?>">
                    <span class="text-danger"><?php echo $data['name_err']; ?> </span>
                </div>

                <div class="mb-3 form-group">
                    <label>Classification</label>
                    <input type="text" name="classification" class="form-control" value="<?php echo $data['classification'] ?>">
                    <span class="text-danger"><?php echo $data['classification_err']; ?> </span>
                </div>

                <div class="mb-3 form-group">
                    <label>Age</label>
                    <input type="text" name="age" class="form-control" value="<?php echo $data['age'] ?>">
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