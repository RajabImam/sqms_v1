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
                    <th scope="col">Device Code</th> 
                    <th scope="col">Name</th>
                    <th scope="col">Classification</th>
                    <th scope="col">Age(months)</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $i => $pet) { ?>
                    <tr>
                        <th scope="row"><?php echo $i + 1 ?></th>
                       <td><?php echo $pet['device_code'] ?></td>
                        <td><?php echo $pet['name'] ?></td>
                        <td><?php echo $pet['classification'] ?></td>
                        <!--<td><?php 
                       /* 
                        $origin = $pet['age'];
                        $target = new date('Y-m-d');
                        $interval = $origin->diff($target);
                        echo $interval->format('%m month');
                        */
                        ?></td>-->
                        <td><?php 
                        $dob = $pet['age'] . " 00:00:00";
                        $d1 = new DateTime($dob);
                        $d2 = new DateTime('NOW');
                        $interval = $d1->diff($d2);
                        $dob_months = $interval->m;
                        echo  $dob_months  ?>
                        </td>
                        <td style="width: 236px;">
                            <a href="<?php echo URLROOT; ?>/pets/report?device_code=<?php echo $pet['device_code'] ?>" class="btn btn-sm btn-outline-success">Sleep Report</a>
                            <a href="<?php echo URLROOT; ?>/pets/update?device_code=<?php echo $pet['device_code'] ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                            <form method="post" action="<?php echo URLROOT; ?>/pets/delete" style="display: inline-block">
                                <input type="hidden" name="device_code" value="<?php echo $pet['device_code'] ?>" />
                                <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>

    <?php require APPROOT . '/views/includes/footer.php'; ?>