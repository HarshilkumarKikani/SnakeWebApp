<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
$db = getDB();
//handle join
if (isset($_POST["join"])) {
    $user_id = get_user_id();
    $comp_id = se($_POST, "comp_id", 0, false);
    $cost = se($_POST, "join_fee", 0, false);
    join_competition($comp_id, $user_id, $cost);
}
$id = se($_GET, "id", -1, false);
if ($id < 1) {
    flash("Invalid competition", "danger");
    redirect("list_competition.php");
}
//handle page load
$stmt = $db->prepare("SELECT Competitions.id , names, min_participants, current_participants, current_reward, expires, min_score, join_fee, IF(competition_id is null, 0, 1) as joined,  CONCAT(first_place_per,'% - ', second_place_per, '% - ', third_place_per, '%') as place FROM Competitions
LEFT JOIN (SELECT * FROM CompetitionParticipants where CompetitionParticipants.user_id = :uid) as t on t.competition_id = Competitions.id WHERE Competitions.id = :cid");
$row = [];
$comp = "";
try {
    $stmt->execute([":uid" => get_user_id(), ":cid" => $id]);
    $r = $stmt->fetch();
    if ($r) {
        $row = $r;
        $comp = se($r, "names", "N/A", false);
    }
} catch (PDOException $e) {
    flash("There was a problem fetching competitions, please try again later", "danger");
    error_log("List competitions error: " . var_export($e, true));
}
$scores = get_top_scores_for_comp($id);
?>
<div class="container-fluid">
    <h1>View Competition: <?php se($comp); ?></h1>
    <table class="table text-light">
        <thead>
            <th>Title</th>
            <th>Participants</th>
            <th>Reward</th>
            <th>Min Score</th>
            <th>Expires</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php if (count($row) > 0) : ?>
                <td><?php se($row, "names"); ?></td>
                <td><?php se($row, "current_participants"); ?>/<?php se($row, "min_participants"); ?></td>
                <td><?php se($row, "current_reward"); ?><br>Payout: <?php se($row, "place", "-"); ?></td>
                <td><?php se($row, "min_score"); ?></td>
                <td><?php se($row, "expires", "-"); ?></td>
                <td>
                    <?php if (se($row, "joined", 0, false)) : ?>
                        <button class="btn btn-primary disabled" onclick="event.preventDefault()" disabled>Already Joined</button>
                    <?php else : ?>
                        <form method="POST">
                            <input type="hidden" name="comp_id" value="<?php se($row, 'id'); ?>" />
                            <input type="hidden" name="cost" value="<?php se($row, 'join_fee', 0); ?>" />
                            <input type="submit" name="join" class="btn btn-primary" value="Join (Cost: <?php se($row, "join_fee", 0) ?>)" />
                        </form>
                    <?php endif; ?>
                </td>
            <?php else : ?>
                <tr>
                    <td colspan="100%">No active competitins</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <?php
    //$scores is defined above
    $names = $comp . " Top Scores";
    include(__DIR__ . "/../../partials/score_table.php");
    ?>
</div>
<?php
require(__DIR__ . "/../../partials/footer.php");
?>

