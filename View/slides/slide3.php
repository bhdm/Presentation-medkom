<?php
    if (isset($_POST['countOfYear'])){
        $_SESSION['slide1']['b2'] = htmlspecialchars($_POST['countOfYear']);
    }
    if (isset($_POST['specialty'])){
        $_POST['specialty']['spec'] = null;
        foreach ($_POST['specialty'] as $key=> $spec){
            $_SESSION['slide1']['spec'][] = array(
                'title' => htmlspecialchars($spec),
                'value' => htmlspecialchars((isset($_POST['value'][$key]) ? $_POST['value'][$key] : 0)),
            );

        }
    }


?>
<div class="title"><h1>Алгоритм расчета структуры закупок хирургических перчаток для операций</h1></div>

<div class="text-center">
    <img src="/Resources/images/graph.png"  class="img-responsive img-thumbnail"/>
</div>