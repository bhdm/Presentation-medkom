<?php
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
?>
<table class="table table-hover table-bordered table-condensed">
    <tr>
        <th class="text-center">Материал</th>
        <th class="text-center">Тип</th>
        <th class="text-center">Марка</th>
        <th class="text-center">Годовое число</th>
    </tr>
    <?php
    $table = $itog->slide5();
    if ($char === 'a'){
        for($i = $cell ; true; $i ++){
            if (!isset($table['a'.$i])){ break; }
            ?>
            <tr>
                <td><?=$table['a'.$i]?></td>
                <td><?=$table['b'.$i]?></td>
                <td><?=$table['c'.$i]?></td>
                <td class="text-center"><?=$table['d'.$i]?></td>
            </tr>
            <?php
        }
    }
    if ($char == 'b'){
        for($i = $cell ; true; $i ++){
            if (!isset($table['f'.$i])){ break; }
            ?>
            <tr>
                <td><?=$table['g'.$i]?></td>
                <td><?=$table['h'.$i]?></td>
                <td><?=$table['i'.$i]?></td>
                <td class="text-center"><?=$table['d'.$i]?></td>
            </tr>
            <?php
        }
    }
    ?>
</table>

<?php exit ?>