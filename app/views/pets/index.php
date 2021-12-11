<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="row container-fluid" style="margin-top: 20px;">

    <div class="col-3">
        <?php require APPROOT . '/views/includes/menu.php'; ?>
    </div>
    <div class="col-9">

        <h1 class = "text-success">My Pets</h1>

        <p>
            <a href="<?php echo URLROOT; ?>/pets/register" class="btn btn-success">Add Pet</a>
        </p>
     
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <!--<th scope="col">Image</th> -->
                    <th scope="col">Name</th>
                    <th scope="col">Classification</th>
                    <th scope="col">Age</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $i => $pet) { ?>
                    <tr>
                        <th scope="row"><?php echo $i + 1 ?></th>
                       <!-- <td>
                            <?php if ($pet['image']) : ?>
                                <img src="/<?php echo $product['image'] ?>" alt="<?php echo $pet['title'] ?>" class="product-img">
                            <?php endif; ?>
                        </td> -->
                        <td><?php echo $pet['name'] ?></td>
                        <td><?php echo $pet['classification'] ?></td>
                        <td><?php echo $pet['age'] ?></td>
                        <td style="width: 236px;">
                            <a href="<?php echo URLROOT; ?>/pets/report?id=<?php echo $pet['id'] ?>" class="btn btn-sm btn-outline-success">Sleep Report</a>
                            <a href="<?php echo URLROOT; ?>/pets/update?id=<?php echo $pet['id'] ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                            <form method="post" action="<?php echo URLROOT; ?>/pets/delete" style="display: inline-block">
                                <input type="hidden" name="id" value="<?php echo $pet['id'] ?>" />
                                <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>

    <?php require APPROOT . '/views/includes/footer.php'; ?>