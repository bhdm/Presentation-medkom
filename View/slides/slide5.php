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
                name: 'Базовый объем (операции)',
                showInLegend: true,
                type: "stackedColumn",
                toolTipContent: "{label}<br/><span style='\"'color: {color};'\"'><strong>{name}</strong></span>: {y}",
                dataPoints: [
                    { x: 0, y: 50, label: "Стандартные латексные" },
                    { x: 10, y: 80, label: "Лтандартные латексные с улучшенной текстурой" },
                    { x: 20, y: 90, label: "Латексные акушерские" },
                    { x: 30, y: 60, label: "Латексные пов. прочности" },
                    { x: 40, y: 60, label: "Синтетические (1 тип)" },
                    { x: 50, y: 60, label: "Синтетические (4 тип)" },
                    { x: 60, y: 60, label: "Система двойных перчаток (верхняя)" },
                    { x: 70, y: 60, label: "Система двойных перчаток (нижняя)" },
                    { x: 80, y: 60, label: "латексные с антимикробным покрытием" },
                ],
            },{
                name: 'Дополнительный объем (длительность)',
                showInLegend: true,
                type: "stackedColumn",
                toolTipContent: "{label}<br/><span style='\"'color: {color};'\"'><strong>{name}</strong></span>: {y}",
                dataPoints: [
                    { x: 0, y: 50, label: "Стандартные латексные" },
                    { x: 10, y: 80, label: "Лтандартные латексные с улучшенной текстурой" },
                    { x: 20, y: 90, label: "Латексные акушерские" },
                    { x: 30, y: 60, label: "Латексные пов. прочности" },
                    { x: 40, y: 60, label: "Синтетические (1 тип)" },
                    { x: 50, y: 60, label: "Синтетические (4 тип)" },
                    { x: 60, y: 60, label: "Система двойных перчаток (верхняя)" },
                    { x: 70, y: 60, label: "Система двойных перчаток (нижняя)" },
                    { x: 80, y: 60, label: "латексные с антимикробным покрытием" },
                ],
            },{
                name: 'Базовый объем (манипуляции)',
                showInLegend: true,
                type: "stackedColumn",
                toolTipContent: "{label}<br/><span style='\"'color: {color};'\"'><strong>{name}</strong></span>: {y}",
                dataPoints: [
                    { x: 0, y: 50, label: "Стандартные латексные" },
                    { x: 10, y: 80, label: "Лтандартные латексные с улучшенной текстурой" },
                    { x: 20, y: 90, label: "Латексные акушерские" },
                    { x: 30, y: 60, label: "Латексные пов. прочности" },
                    { x: 40, y: 60, label: "Синтетические (1 тип)" },
                    { x: 50, y: 60, label: "Синтетические (4 тип)" },
                    { x: 60, y: 60, label: "Система двойных перчаток (верхняя)" },
                    { x: 70, y: 60, label: "Система двойных перчаток (нижняя)" },
                    { x: 80, y: 60, label: "латексные с антимикробным покрытием" },
                ],
            },{
                name: 'Дополнительный объем (повреждения)',
                showInLegend: true,
                type: "stackedColumn",
                toolTipContent: "{label}<br/><span style='\"'color: {color};'\"'><strong>{name}</strong></span>: {y}",
                dataPoints: [
                    { x: 0, y: 50, label: "Стандартные латексные" },
                    { x: 10, y: 80, label: "Лтандартные латексные с улучшенной текстурой" },
                    { x: 20, y: 90, label: "Латексные акушерские" },
                    { x: 30, y: 60, label: "Латексные пов. прочности" },
                    { x: 40, y: 60, label: "Синтетические (1 тип)" },
                    { x: 50, y: 60, label: "Синтетические (4 тип)" },
                    { x: 60, y: 60, label: "Система двойных перчаток (верхняя)" },
                    { x: 70, y: 60, label: "Система двойных перчаток (нижняя)" },
                    { x: 80, y: 60, label: "латексные с антимикробным покрытием" },
                ],
            }
            ]
        });


        chart1.render();


    }
</script>