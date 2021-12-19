<?php
//remember, API endpoints should only echo/output precisely what you want returned
//any other unexpected characters can break the handling of the response
$response = ["message" => "There was a problem saving your score"];
http_response_code(400);
$contentType = $_SERVER["CONTENT_TYPE"];
error_log("Content Type $contentType");
if ($contentType === "application/json") {
    $json = file_get_contents('php://input');
    $data = json_decode($json, true)["data"];
} else if ($contentType === "application/x-www-form-urlencoded") {
    $data = $_POST;
}
error_log(var_export($data, true));
if (isset($data["score"])) {
    session_start();
    $reject = false;
    require_once(__DIR__ . "/../../../lib/functions.php");
    $score = (int)se($data, "score", 0, false);

    $user_id = get_user_id();
    if ($user_id <= 0) {
        $reject = true;
        error_log("User not logged in");
        http_response_code(403);
        $response["message"] = "You must be logged in to save your score";
        flash($response["message"], "warning");
    }
    error_log("Rejected " . ($reject ? "true" : "false"));
    if (!$reject) {
        http_response_code(200);
        //2x and 3x score mod logic
        save_score($score, $user_id, true);
        $points = $score;
        change_bills($points, get_user_id(), "win");
        error_log("Score of $score saved successfully for $user_id");
    } else {
        $response["message"] = "AntiCheat Detection Triggered. Score rejected.";
        flash($response["message"], "danger");
    }
}
echo json_encode($response);
