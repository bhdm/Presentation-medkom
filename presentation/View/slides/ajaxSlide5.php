<?php
if ($_POST['ch']){
    $_SESSION[$_POST['ch']] = 1;
}
if ($_POST['uch']){
    $_SESSION[$_POST['uch']] = 0;
}
echo json_encode([$_SESSION['check1'], $_SESSION['check2']]);
exit;