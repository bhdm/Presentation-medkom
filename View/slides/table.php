<?php
session_start();

if ($_POST['ch']){
    $_SESSION[$_POST['ch']] = 1;
    $itog->slide5[$_POST['ch']] = 1;
    $itog->slide5['c3'] = $itog->slide5['b3'] + $itog->slide5['b4'];
}
if ($_POST['uch']){
    $_SESSION[$_POST['uch']] = 0;
    $itog->slide5[$_POST['uch']] = 0;
    $itog->slide5['c3'] = $itog->slide5['b3'] + $itog->slide5['b4'];
}

$itog->slide5();

function getSelect($glove){
    if (!$glove){
        return '';
    }
    $gs = [];
    switch ($glove){
        case 'Biogel Skinsense': { $gs = ['Encore Ultra']; break; };
        case 'Biogel Skinsense Indicator': { $gs = []; break; };
        case 'Bioclean Ultimate': { $gs = ['Bioclean Emerald']; break; };
        case 'Biogel Surgeons': { $gs = ['Biogel Eclipse','Encore Acclaim','Encore Style 85','Medi-Grip PF','Shen Wei']; break; };
        case 'Medi-Grip Plus': { $gs = []; break; };
        case 'Encore Acclaim + Encore Underglove': { $gs = ['Biogel Eclipse Indicator']; break; };
        case 'Bioclean Extra': { $gs = []; break; };
        case 'Dona 410 PF': { $gs = []; break; };
        case 'Encore Orthopaedic': { $gs = []; break; };
        case 'Encore Microptic': { $gs = []; break; };
        case 'Encore Style 85': { $gs = ['Encore Orthopaedic','Encore Underglove']; break; };
        case 'Encore Underglove': { $gs = ['Shen Wei']; break; };
    }

    $txt = '<select class="form-control fc">';
    $txt .= '<option>'.$glove.'</option>';
    foreach (array_reverse($gs) as $g){
        $txt .= '<option>'.$g.'</option>';
    }
    $txt .= '</select>';
    return $txt;
}

if ($itog->slide5['b8'] + $itog->slide5['b5'] + $itog->slide5['b6'] + $itog->slide5['b7'] == 4){
    $cell = 14;
    $char = 'a';
}elseif ($itog->slide5['b5'] + $itog->slide5['b6'] + $itog->slide5['b8'] == 3){
    $cell = 14;
    $char = 'b';
}elseif ($itog->slide5['b5'] + $itog->slide5['b7'] + $itog->slide5['b8'] == 3){
    $cell = 29;
    $char = 'a';
}elseif ($itog->slide5['b5'] + $itog->slide5['b6'] + $itog->slide5['b7'] == 3){
    $cell = 29;
    $char = 'b';
}elseif ($itog->slide5['b6'] + $itog->slide5['b7'] + $itog->slide5['b8'] == 3){
    $cell = 42;
    $char = 'a';
}elseif ($itog->slide5['b6'] + $itog->slide5['b8'] == 2){
    $cell = 42;
    $char = 'b';
}elseif ($itog->slide5['b5'] + $itog->slide5['b8'] == 2){
    $cell = 53;
    $char = 'a';
}elseif ($itog->slide5['b5'] + $itog->slide5['b6'] == 2){
    $cell = 53;
    $char = 'b';
}elseif ($itog->slide5['b5'] + $itog->slide5['b7'] == 2){
    $cell = 65;
    $char = 'a';
}elseif ($itog->slide5['b7'] + $itog->slide5['b8'] == 2){
    $cell = 65;
    $char = 'b';
}elseif ($itog->slide5['b6'] + $itog->slide5['b7'] == 2){
    $cell = 75;
    $char = 'a';
}elseif ($itog->slide5['b6']== 1){
    $cell = 75;
    $char = 'b';
}elseif ($itog->slide5['b8']== 1){
    $cell = 82;
    $char = 'a';
}elseif ($itog->slide5['b5']== 1){
    $cell = 82;
    $char = 'b';
}elseif ($itog->slide5['b7']== 1){
    $cell = 92;
    $char = 'a';
}else{
    $cell = 92;
    $char = 'b';
}
//echo $itog->slide5['c3'].'<br />';
?>

<table class="table table-hover table-bordered table-condensed" style="font-size: 11px;">
    <tr>
        <th class="text-center">Материал</th>
        <th class="text-center">Тип</th>
        <th class="text-center">Марка</th>
        <th class="text-center">Годовое число</th>
    </tr>
    <?php
    $table = $itog->slide5();
    $count = 0;
    if ($char === 'a'){
        for($i = $cell ; true; $i ++){
            if (!isset($table['a'.$i])){ break; }
            if ($table['c'.$i] != ''){
                $count +=  $table['d'.$i];
                ?>
                <tr>
                    <td rowspan="1"><?=$table['a'.$i]?></td>
                    <td><?=$table['b'.$i]?></td>
                    <td><?=getSelect($table['c'.$i])?></td>
                    <td class="text-center" data-title="<?=$table['c'.$i]?>"><?=$table['d'.$i]?></td>
                </tr>
                <?php
            }
        }
    }
    if ($char == 'b'){
        for($i = $cell ; true; $i ++){
            if (!isset($table['f'.$i])){ break; }
            if ($table['h'.$i] != ''){
                $count +=  $table['i'.$i];
                ?>
                <tr>
                    <td rowspan="1"><?=$table['f'.$i]?></td>
                    <td><?=$table['g'.$i]?></td>
                    <td><?=getSelect($table['h'.$i])?></td>
                    <td class="text-center" data-title="<?=$table['h'.$i]?>"><?=$table['i'.$i]?></td>
                </tr>
                <?php
            }
        }
    }
    ?>
    <tr>
        <td colspan="3" class="text-right"><b>Итого</b></td>
        <td style="text-align: center"><?=$count?></td>
    </tr>
</table>


<?php exit ?>