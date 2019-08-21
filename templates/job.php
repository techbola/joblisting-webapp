<?php include 'inc/header.php'; ?>



<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <div class="row d-flex flex-column justify-content-center align-items-center text-center">
                <div>
                    <h1 class="display-3">Find a Job</h1>
                </div>
                <div class="w-50">
                    <form action="index.php" method="get">
                        <select name="category" id="category" class="form-control">
                            <option value="0">Choose Category</option>
                            <?php foreach ($categories as $category): ?>
                                <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                            <?php endforeach; ?>
                        </select>

                        <input type="submit" value="Find" class="btn btn-primary btn-lg mt-3">

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row marketing">
            <div class="col-md-10">
                <h3><?php echo $job->job_title; ?></h3>
                <small>Posted by: <?php echo $job->contact_user;; ?> &nbsp;
                    Date: <?php echo $job->post_date;; ?></small>
                <p><?php echo $job->description; ?></p>
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>Company:</strong> <?php echo  $job->company; ?>
                    </li>
                    <li class="list-group-item">
                        <strong>Salary:</strong> <?php echo  $job->salary; ?>
                    </li>
                    <li class="list-group-item">
                        <strong>Contact email:</strong> <?php echo  $job->contact_email; ?>
                    </li>
                </ul>

                <div class="well mt-3">
                    <a class="btn btn-warning btn-sm" href="edit-job.php?id=<?php echo  $job->id; ?>">
                        <i class="fas fa-edit text-white"></i> Edit
                    </a>
                    <form class="d-inline" action="job.php" method="post">
                        <input type="hidden" value="<?php echo  $job->id; ?>" name="del_id">
                        <input type="submit" class="btn btn-danger btn-sm ml-3" value="Delete">
                    </form>
                </div>

            </div>
            <div class="col-md-2">
                <a class="btn btn-primary" href="#">APPLY &raquo;</a>
            </div>
        </div>

        <hr>

    </div> <!-- /container -->

</main>

<?php include 'inc/footer.php'; ?>
