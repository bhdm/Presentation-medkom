<div class="title"><h1>Распределение расчетного объема</h1></div>

<form class="form-horizontal" id="form5">
    <div class="form-group">
        <label class="col-sm-8">
            Учитывать дополнительный объем – на замену через каждые 1,5 - 2 часа операции
        </label>
        <div class="col-sm-2">
            <input type="checkbox" class="check" name="check1" id="check1" value="1" <?=($_SESSION['check1'] ? 'checked' : '')?>>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-8">
            Учитывать дополнительный объем, связанный с повреждениями перчаток при операциях
        </label>
        <div class="col-sm-2">
            <input type="checkbox" class="check" name="check2" id="check2" value="1" <?=($_SESSION['check2'] ? 'checked' : '')?>>
        </div>
    </div>
</form>


<div id="chart-5" class="chart" style="height: 600px"></div>
<div style="text-align: center">
    <img src="<?=$domain?>/Resources/images/legend-5-1.png" style="margin-left: 40px;">
    <img src="<?=$domain?>/Resources/images/legend-5-3.png">
</div>
<div style="text-align: center; color: #7e0b20; font-style: italic">
    *Наведите курсор на графики, чтобы увидеть значения
</div>
<?php $table = $itog->getForSlide5() ?>
<script type="text/javascript">
    function getChart(msg) {
        console.log(m=msg);
        var data = [{
            yValueFormatString: "# #### ###.##",
            name: 'Базовый объем',
            showInLegend: false,
            type: "stackedColumn",
            toolTipContent: "{label}<br/><span style='\"'color: {color};'\"'><strong>{name}</strong></span>: {y}",
            color: "#369ead",
            dataPoints: [
                { x: 0,   y: <?=$table[0][0]?>, label: "стандартные" },
                { x: 10,   y: <?=$table[0][1]?>, label: "система двойных перчаток" },
                { x: 20,  y: <?=$table[0][2]?>, label: "с антимикробным покрытием" },
                { x: 30,  y: <?=$table[0][3]?>, label: "стандартные неопудренные" },
                { x: 40,  y: <?=$table[0][4]?>, label: "стандратные опудренные" },
                { x: 50,  y: <?=$table[0][5]?>, label: "система двойных перчаток" },
                { x: 60,  y: <?=$table[0][6]?>, label: "с антимикробным покрытием" },
                { x: 70,  y: <?=$table[0][7]?>, label: "акушерские" },
                { x: 80,  y: <?=$table[0][8]?>, label: "повышенной прочности" },
                { x: 90,  y: <?=$table[0][9]?>, label: "повышенной чувствительности" },
                { x: 100, y: <?=$table[0][10]?>, label: "текстурированные" },
                { x: 110, y: <?=$table[0][11]?>, label: "с увлажнителем" },
            ],
        }]
        if (msg[0] == 1){
            data.push({
                yValueFormatString: "# #### ###.##",
                name: 'Дополнительный объем (длительность)',
                showInLegend: false,
                type: "stackedColumn",
                toolTipContent: "{label}<br/><span style='\"'color: {color};'\"'><strong>{name}</strong></span>: {y}",
                color: "#c24642",
                dataPoints: [
                    { x: 0,   y: <?=$table[1][0]?>, label: "стандартные" },
                    { x: 10,   y: <?=$table[1][1]?>, label: "система двойных перчаток" },
                    { x: 20,  y: <?=$table[1][2]?>, label: "с антимикробным покрытием" },
                    { x: 30,  y: <?=$table[1][3]?>, label: "стандартные неопудренные" },
                    { x: 40,  y: <?=$table[1][4]?>, label: "стандратные опудренные" },
                    { x: 50,  y: <?=$table[1][5]?>, label: "система двойных перчаток" },
                    { x: 60,  y: <?=$table[1][6]?>, label: "с антимикробным покрытием" },
                    { x: 70,  y: <?=$table[1][7]?>, label: "акушерские" },
                    { x: 80,  y: <?=$table[1][8]?>, label: "повышенной прочности" },
                    { x: 90,  y: <?=$table[1][9]?>, label: "повышенной чувствительности" },
                    { x: 100, y: <?=$table[1][10]?>, label: "текстурированные" },
                    { x: 110, y: <?=$table[1][11]?>, label: "с увлажнителем" },
                ],
            })
        }

        if (msg[1] == 1){
            data.push({
                yValueFormatString: "# #### ###.##",
                name: 'Дополнительный объем (повреждения)',
                showInLegend: false,
                type: "stackedColumn",
                toolTipContent: "{label}<br/><span style='\"'color: {color};'\"'><strong>{name}</strong></span>: {y}",
                color: "#7f6084",
                dataPoints: [
                    { x: 0,   y: <?=$table[2][0]?>, label: "стандартные" },
                    { x: 10,  y: <?=$table[2][1]?>, label: "система двойных перчаток" },
                    { x: 20,  y: <?=$table[2][2]?>, label: "с антимикробным покрытием" },
                    { x: 30,  y: <?=$table[2][3]?>, label: "стандартные неопудренные" },
                    { x: 40,  y: <?=$table[2][4]?>, label: "стандратные опудренные" },
                    { x: 50,  y: <?=$table[2][5]?>, label: "система двойных перчаток" },
                    { x: 60,  y: <?=$table[2][6]?>, label: "с антимикробным покрытием" },
                    { x: 70,  y: <?=$table[2][7]?>, label: "акушерские" },
                    { x: 80,  y: <?=$table[2][8]?>, label: "повышенной прочности" },
                    { x: 90,  y: <?=$table[2][9]?>, label: "повышенной чувствительности" },
                    { x: 100, y: <?=$table[2][10]?>, label: "текстурированные" },
                    { x: 110, y: <?=$table[2][11]?>, label: "с увлажнителем" },
                ],
            });
        }
        var chart1 = new CanvasJS.Chart("chart-5", {
            animationEnabled: true,
            title: {
                text: "Структурированный объем",
                fontSize: 18
            },
            legend: false,
            axisY: {
                labelFontSize: 14,
                valueFormatString: "# ### ###.##",
            },
            axisX: {
                interval: 10,
                labelAngle: 0,
                labelFontSize: 0,
                labelColor: '#FFF',
            },
            theme: "theme1",
            data: data,
        });

        chart1.render();
    }


$(document).ready(function () {

    getChart([<?=$_SESSION['check1']?>,<?=$_SESSION['check2']?>]);

    $('.check').on('ifChecked', function(event){
        $.ajax({
            url: '<?=$domain?>/ajaxSlide5',
            data: 'ch='+$(this).attr('name'),
            method: 'POST',
            success: function (msg) {
                getChart(JSON.parse(msg));
            }
        })
    });
    $('.check').on('ifUnchecked', function(event){
        $.ajax({
            url: '<?=$domain?>/ajaxSlide5',
            data: 'uch='+$(this).attr('name'),
            method: 'POST',
            success: function (msg) {
                getChart(JSON.parse(msg));
            }
        })
    });

    $('#form5').show();
});

</script>