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

            <h3 class="text-center"><?php echo  $title; ?></h3>
            <?php foreach ($jobs as $job): ?>
                <div class="row marketing">
                    <div class="col-md-10">
                        <h3><?php echo $job->job_title; ?></h3>
                        <p><?php echo $job->description; ?></p>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-secondary" href="job.php?id=<?php echo $job->id; ?>">View details &raquo;</a>
                    </div>
                </div>

                <hr>
            <?php endforeach; ?>

        </div> <!-- /container -->

    </main>

<?php include 'inc/footer.php'; ?>
