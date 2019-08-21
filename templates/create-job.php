<?php include 'inc/header.php'; ?>

<main role="main" class="p-5">

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3><?php echo $title; ?></h3>
                <form action="create-job.php" method="post">
                    <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" class="form-control" id="company" name="company" required>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" id="category" name="category">
                            <?php foreach ($categories as $category): ?>
                                <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="job_title">Job Title</label>
                        <input type="text" class="form-control" id="job_title" name="job_title" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location" required>
                    </div>
                    <div class="form-group">
                        <label for="salary">Salary</label>
                        <input type="text" class="form-control" id="salary" name="salary" required>
                    </div>
                    <div class="form-group">
                        <label for="contact_user">Contact User</label>
                        <input type="text" class="form-control" id="contact_user" name="contact_user" required>
                    </div>
                    <div class="form-group">
                        <label for="contact_email">Contact Email</label>
                        <input type="email" class="form-control" id="contact_email" name="contact_email" required>
                    </div>

                    <input type="submit" class="btn btn-primary" value="Submit" name="submit">
                </form>
            </div>
        </div>

    </div> <!-- /container -->

</main>

<?php include 'inc/footer.php'; ?>
