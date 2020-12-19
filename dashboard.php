<?php include "includes/header.php"; ?>
<?php include "perfect_function.php"; ?>
<?php middleware() ?>

<div style="margin-bottom:20px"></div>
<h1>Welcome to dashboard</h1>


<a href="addToDiary.php"><button class="btn btn-success btn-sm"><i class="fas fa-plus"></i>&nbsp;Add to diary</button></a>

<?php
//get the stories of the user
// $userId = getUserId($_SESSION['credentialsId']);
$diaryTable = get_where_custom('diary', 'user_id', 1);
arrayShow($diaryTable);
die;

// dito yung sira kasi iba yung nirereturn niya dapat mapakita dito yung assoc array para magamit 
// siya sa foreach loop. 
?>

<div class="table responsive mt-4">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <td>#</td>
                <td>Subject</td>
                <td>Story</td>
                <td>Date</td>
                <td>Time</td>
            </tr>
        </thead>
        <tbody>
            <?php $counter = 0 ?>
            <?php foreach ($diaryTable as $row) { ?>
                <?php $counter++; ?>
                <tr>
                    <td><?= $counter ?></td>
                    <td><?= $row['subject'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php include "includes/footer.php"; ?>