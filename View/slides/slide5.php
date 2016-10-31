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

<div id="chart-5" class="chart"></div>

<script type="text/javascript">
    window.onload = function() {

        var chart1 = new CanvasJS.Chart("chart-5", {
            title: {
                text: "Удовлетворение профессиональных потребностей"
            },
            axisX: {
                interval: 10
            },
            theme: "theme3",
            data: [{
                name: 'Закупки прошлого периода',
                showInLegend: true,
                type: "area",
                dataPoints: [
                    { x: 0, y: 50, label: "С текстурой" },
                    { x: 10, y: 80, label: "Акушерские" },
                    { x: 20, y: 90, label: "Пов. прочности" },
                    { x: 30, y: 60, label: "пов. чувствительн" },
                ]
            },{
                name: 'Расчитанный объем',
                showInLegend: true,
                type: "area",
                dataPoints: [
                    { x: 0, y: 100, label: "С текстурой" },
                    { x: 10, y: 20, label: "Акушерские" },
                    { x: 20, y: 30, label: "Пов. прочности" },
                    { x: 30, y: 60, label: "пов. чувствительн" },
                ]
            }
            ]
        });


        chart1.render();


    }
</script>