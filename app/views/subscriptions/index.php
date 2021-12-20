<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="row container-fluid" style="margin-top: 20px;">

    <div class="col-3">
        <?php require APPROOT . '/views/includes/menu.php'; ?>
    </div>
    <div class="col-9">

        <h1 class = "text-success">My Subscription</h1>

        <p>
            <a href="<?php echo URLROOT; ?>/subscriptions/register" class="btn btn-success">Add Subscription</a>
        </p>
     
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Type</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Created On</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $i => $sub) { ?>
                    <tr>
                        <th scope="row"><?php echo $i + 1 ?></th>
                        <td><?php echo $sub['type'] ?></td>
                        <td><?php echo $sub['start_date'] ?></td>
                        <td><?php echo $sub['end_date'] ?></td>
                        <td><?php echo $sub['created_on'] ?></td>
                        <td style="width: 236px;">
                        <a href="<?php echo URLROOT; ?>/subscriptions/report?id=<?php echo $sub['id'] ?>" class="btn btn-sm btn-outline-success">Payment</a>
                            <a href="<?php echo URLROOT; ?>/subscriptions/update?id=<?php echo $sub['id'] ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                            <form method="post" action="<?php echo URLROOT; ?>/subscriptions/delete" style="display: inline-block">
                                <input type="hidden" name="id" value="<?php echo $sub['id'] ?>" />
                                <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>

    <?php require APPROOT . '/views/includes/footer.php'; ?>