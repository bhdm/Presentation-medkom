<div class="title"><h1>Объем хирургических перчаток</h1></div>

<form class="form-horizontal">
    <div class="form-group">
        <label class="col-sm-8">
            Учитывать дополнительный объем – на замену через каждые 1,5 - 2 часа операции
        </label>
        <div class="col-sm-2">
            <input type="checkbox" class="check" name="check1" id="check1" value="1">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-8">
            Учитывать дополнительный объем, связанный с повреждениями перчаток при операциях
        </label>
        <div class="col-sm-2">
            <input type="checkbox" class="check" name="check2" id="check2" value="1">
        </div>
    </div>
</form>


<div id="chart-5" class="chart" style="height: 500px"></div>
<?php $table = $itog->getForSlide5() ?>
<script type="text/javascript">
    window.onload = function() {

        var chart1 = new CanvasJS.Chart("chart-5", {
            title: {
                text: "Удовлетворение профессиональных потребностей",
                fontSize: 18
            },
            legend: {
                fontSize: 14
            },
            axisY: {
                labelFontSize: 14
            },
            axisX: {
                interval: 10,
                labelAngle: 0,
                labelFontSize: 14
            },
            theme: "theme1",
            data: [{
                name: 'Базовый объем',
                showInLegend: true,
                type: "stackedColumn",
                toolTipContent: "{label}<br/><span style='\"'color: {color};'\"'><strong>{name}</strong></span>: {y}",
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
            },{
                name: 'Дополнительный объем (длительность)',
                showInLegend: true,
                type: "stackedColumn",
                toolTipContent: "{label}<br/><span style='\"'color: {color};'\"'><strong>{name}</strong></span>: {y}",
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
            },{
                name: 'Дополнительный объем (повреждения)',
                showInLegend: true,
                type: "stackedColumn",
                toolTipContent: "{label}<br/><span style='\"'color: {color};'\"'><strong>{name}</strong></span>: {y}",
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
            },{
                name: 'Итого (две галочки)',
                showInLegend: true,
                type: "stackedColumn",
                toolTipContent: "{label}<br/><span style='\"'color: {color};'\"'><strong>{name}</strong></span>: {y}",
                dataPoints: [
                    { x: 0,   y: <?=$table[3][0]?>, label: "стандартные" },
                    { x: 10,  y: <?=$table[3][1]?>, label: "система двойных перчаток" },
                    { x: 20,  y: <?=$table[3][2]?>, label: "с антимикробным покрытием" },
                    { x: 30,  y: <?=$table[3][3]?>, label: "стандартные неопудренные" },
                    { x: 40,  y: <?=$table[3][4]?>, label: "стандратные опудренные" },
                    { x: 50,  y: <?=$table[3][5]?>, label: "система двойных перчаток" },
                    { x: 60,  y: <?=$table[3][6]?>, label: "с антимикробным покрытием" },
                    { x: 70,  y: <?=$table[3][7]?>, label: "акушерские" },
                    { x: 80,  y: <?=$table[3][8]?>, label: "повышенной прочности" },
                    { x: 90,  y: <?=$table[3][9]?>, label: "повышенной чувствительности" },
                    { x: 100, y: <?=$table[3][10]?>, label: "текстурированные" },
                    { x: 110, y: <?=$table[3][11]?>, label: "с увлажнителем" },
                ],
            }
            ]
        });

        chart1.render();


    }
</script>