<?php
include_once 'class/job.php';

$jobs = Job::getAllJobs();

?>

<div class="container">
    <h1>Job List</h1>
    <?php if (count($jobs) == 0): ?>
        <p>No jobs found</p>
    <?php else: ?>
        <ul>
            <?php foreach ($jobs as $job): ?>
                <li>
                    <h2><?php echo $job->getTitle(); ?></h2>
                    <p><?php echo $job->getLocation(); ?></p>
                    <a class="view-job" href="jobdetails.php?id=<?php echo $job->getId(); ?>">View Details</a>
                </li>
            <?php endforeach;?>
        </ul>
    <?php endif; ?>
</div>



