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
<div class="title"><h1>Алгоритм расчета потребностей МО в  хирургических перчатках для операций</h1></div>

<div class="text-center">
<!--    <img src="/Resources/images/graph.png"  class="img-responsive img-thumbnail"/>-->
    <table style="width: 939px; margin: 0 auto">
        <tr>
            <td><img src="/Resources/images/g12.png" class="wow bounceInDown" data-wow-delay="0.5s"/></td>
            <td></td>
            <td></td>
            <td></td>
            <td><img src="/Resources/images/g32.png" class="wow bounceInDown" data-wow-delay="3.5s"/></td>
            <td></td>
            <td></td>
            <td style="width: 199px"></td>
        </tr>
        <tr>
            <td><img src="/Resources/images/g1.png" class="wow flipInX"/></td>
            <td><img src="/Resources/images/p1.png" class="wow flipInX" data-wow-delay="1.0s"/></td>
            <td><img src="/Resources/images/g2.png" class="wow flipInY" data-wow-delay="1.5s"/></td>
            <td><img src="/Resources/images/p2.png" class="wow flipInX" data-wow-delay="2.5s"/></td>
            <td><img src="/Resources/images/g3.png" class="wow flipInY" data-wow-delay="3.0s"/></td>
            <td><img src="/Resources/images/r1.png" class="wow flipInX" data-wow-delay="4.0s"/></td>
            <td><img src="/Resources/images/g4.png"  class="wow flipInX" data-wow-delay="5.0s"  style="margin-left: 20px"/></td>
            <td style="position: relative">
                <img src="/Resources/images/c1.png" class="wow bounceInRight poiner" data-toggle="popover" title="" data-content="общая хирургия, ортопедия, акушерство, нейрохирургия, трансплантология и т.д." data-wow-delay="5.5s" style="position: absolute;    top: -160px; left: -40px;"/>
                <img src="/Resources/images/c2.png" class="wow bounceInRight poiner" data-toggle="popover" title="" data-content="аллергия на латекс (1 тип), аллергический контактный дерматит (4 тип), неаллергический контактный" data-wow-delay="6.0s" style="position: absolute;    left: -40px; top: -60px;"/>
                <img src="/Resources/images/c3.png" class="wow bounceInRight poiner" data-toggle="popover" title="" data-content="гемоконтактные инфекции: ВИЧ, гепатиты В и С" data-wow-delay="6.5s" style="position: absolute;    left: -40px; top: 70px;"/>
                <img src="/Resources/images/c4.png" class="wow bounceInRight poiner" data-toggle="popover" title="" data-content="операции  с высоким риском ИСМП" data-wow-delay="7.0s" style="position: absolute;    left: -40px; top: 165px;"/>
            </td>
        </tr>
        <td><img src="/Resources/images/g13.png" class="wow bounceInUp" data-wow-delay="0.5s"/></td>
        <td></td>
        <td><img src="/Resources/images/g21.png" class="wow bounceInUp" data-wow-delay="2.0s"/></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </table>
</div>
<script>
    $(document).ready(function () {
        $('[data-toggle="popover"]').popover({trigger: "hover"})
    })
</script>