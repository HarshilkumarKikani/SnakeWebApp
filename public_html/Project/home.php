<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<div class="container-fluid">

    <div>
        <h1>Home</h1>
        <?php
        $duration = "week";
        ?>
        <?php require(__DIR__ . "/../../partials/score_table.php"); ?>
    </div>

    <div>
        <?php
        $duration = "month";
        ?>
        <?php require(__DIR__ . "/../../partials/score_table.php"); ?>
    </div>
    
    <div>
        <?php
        $duration = "lifetime";
        ?>
        <?php require(__DIR__ . "/../../partials/score_table.php"); ?>
    </div>

</div>

<?php
require(__DIR__ . "/../../partials/footer.php");
?>

