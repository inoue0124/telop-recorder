<?php
 session_start();
 $user_id = $_POST['user_id'];
 $passpath = 'userlist/'.$user_id;
 $pass = file_get_contents($passpath,NULL,NULL,0,8);
 if (($_POST['pass'] == $pass) && ($pass != FALSE)) {
    $_SESSION["user_id"] = $user_id;
    //$id = substr($user_id, 1);
    $first_task_ary = array('T1', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7', 'T8', 'T9', 'T10');
    $progress_id = file_get_contents('progress/'.$user_id, NULL, NULL, 0, 1);
    $last_slide = file_get_contents('progress/'.$user_id."_last_slide", NULL, NULL, 0, 2);
    $first_task = $first_task_ary[intval($progress_id)];
    header("Location: https://www.gavo.t.u-tokyo.ac.jp/~inoue0124/telop-recorder/main.php?u=".$user_id."&p=". strval(intval($progress_id)+1) . "&t=".$first_task."&n=".strval(intval($last_slide)+1));
}else {
    echo "The password is invalid.  ";
?>
<a href="https://www.gavo.t.u-tokyo.ac.jp/~inoue0124/telop-recorder/">Back</a>
<?php
}
?>
