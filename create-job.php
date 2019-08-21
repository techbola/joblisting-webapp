<?php include_once 'config/init.php'; ?>

<?php

$job = new Job();

$template = new Template('templates/create-job.php');

if (isset($_POST['submit'])){

//    create data array
    $data = array();
    $data['job_title'] = $_POST['job_title'];
    $data['company'] = $_POST['company'];
    $data['category'] = $_POST['category'];
    $data['description'] = $_POST['description'];
    $data['location'] = $_POST['location'];
    $data['salary'] = $_POST['salary'];
    $data['contact_email'] = $_POST['contact_email'];
    $data['contact_user'] = $_POST['contact_user'];

    if ($job->create($data)){
         redirect('index.php', 'Your job has been listed.', 'success');
    } else {
        redirect('index.php', 'Something went wrong.', 'error');
    }

}

$template->title = 'Create New Job!';

$template->categories = $job->getCategories();

echo $template;
