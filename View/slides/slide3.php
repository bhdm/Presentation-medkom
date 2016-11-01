<?php
    if (isset($_POST['countOfYear'])){
        $_SESSION['slide1']['b2'] = htmlspecialchars($_POST['countOfYear']);
    }
    if (isset($_POST['specialty'])){
        unset($_SESSION['slide1']['spec']);
        foreach ($_POST['specialty'] as $key=> $spec){
            if (isset($spec) && $spec != null && $spec!= ''){
                $_SESSION['slide1']['spec'][] = array(
                    'title' => htmlspecialchars($spec),
                    'value' => htmlspecialchars((isset($_POST['value'][$key]) ? $_POST['value'][$key] : 0)),
                );
            }
        }
    }


?>
<div class="title"><h1>Алгоритм расчета структуры закупок хирургических перчаток для операций</h1></div>

<div class="text-center">
    <img src="/Resources/images/graph.png"  class="img-responsive img-thumbnail"/>
</div>