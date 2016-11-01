<div class="title"><h1>Выбор факторов влияния на расчет финальной структуры закупок</h1></div>

<form class="form-horizontal">
    <div class="form-group">
        <label class="col-sm-8">
            Длительность операции
        </label>
        <div class="col-sm-2">
            <input type="checkbox" class="check" name="check3" id="check3" value="1">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-8">
            Повреждения перчаток
        </label>
        <div class="col-sm-2">
            <div><input type="checkbox" class="check" name="check4" id="check4" value="1"></div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-8">
            Специализация
        </label>
        <div class="col-sm-2">
            <input type="checkbox" class="check" name="check5" id="check5" value="1">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-8">
            Аллергический статус
        </label>
        <div class="col-sm-2">
            <input type="checkbox" class="check" name="check6" id="check6" value="1">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-8">
            Гемоконтактные инфекции
        </label>
        <div class="col-sm-2">
            <input type="checkbox" class="check" name="check7" id="check7" value="1">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-8">
            Профилактика ИСМП ( инфекции, связанные с оказанием медицинской помощи)
        </label>
        <div class="col-sm-2">
            <input type="checkbox" class="check" name="check8" id="check8" value="1">
        </div>
    </div>
</form>
<div class="col-xs-12 col-md-8">
    <table class="table table-hover table-bordered table-condensed">
        <tr>
            <th class="text-center">Материал</th>
            <th class="text-center">Тип</th>
            <th class="text-center">Марка</th>
            <th class="text-center">Годовое число</th>
        </tr>
        <tr>
            <td rowspan="3">Синтетические перчатки</td>
            <td>система двойных перчаток</td>
            <td>Biogel Skinsense Indicator</td>
            <td class="text-center">8579</td>
        </tr>
        <tr>
            <td>с антимикробным покрытием</td>
            <td>Bioclean Ultimate</td>
            <td class="text-center">8579</td>
        </tr>
        <tr>
            <td>стандартные</td>
            <td>Encore Ultra</td>
            <td class="text-center">8579</td>
        </tr>
        <tr>
            <td rowspan="9">Латексные перчатки</td>
            <td>стандартные неопудренные</td>
            <td>Biogel Eclipse</td>
            <td class="text-center">8579</td>
        </tr>
        <tr>
            <td>стандратные опудренные</td>
            <td>Medi-Grip PWD</td>
            <td class="text-center">8579</td>
        </tr>
        <tr>
            <td>система двойных перчаток</td>
            <td>Encore Acclaim + Encore Underglove</td>
            <td class="text-center">8579</td>
        </tr>
        <tr>
            <td>с антимикробным покрытием</td>
            <td>Bioclean Extra</td>
            <td class="text-center">8579</td>
        </tr>
        <tr>
            <td>акушерские</td>
            <td>Dona 410 PF</td>
            <td class="text-center">8579</td>
        </tr>
        <tr>
            <td>повышенной прочности</td>
            <td>Encore Orthopaedic</td>
            <td class="text-center">8579</td>
        </tr>
        <tr>
            <td>повышенной чувствительности</td>
            <td>Encore Microptic</td>
            <td class="text-center">8579</td>
        </tr>
        <tr>
            <td>текстурированные</td>
            <td>Encore Style 85</td>
            <td class="text-center">8579</td>
        </tr>
        <tr>
            <td>с увлажнителем</td>
            <td>Encore Underglove</td>
            <td class="text-center">8579</td>
        </tr>
        <tfoot>
            <tr>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-right"><strong>Итого</strong></td>
                <td class="text-center"><strong>100500</strong></td>
            </tr>
        </tfoot>
    </table>
</div>
<div class="col-xs-12 col-md-4">
    <div id="chart-6" class="chart" style="height: 100%"></div>
</div>

<script type="text/javascript">
    window.onload = function() {

        var chart1 = new CanvasJS.Chart("chart-6", {
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

                ],
            },{
                name: 'Дополнительный объем (длительность)',
                showInLegend: true,
                type: "stackedColumn",
                toolTipContent: "{label}<br/><span style='\"'color: {color};'\"'><strong>{name}</strong></span>: {y}",
                dataPoints: [
                    { x: 0, y: 50, label: "Стандартные латексные" },

                ],
            },{
                name: 'Базовый объем (манипуляции)',
                showInLegend: true,
                type: "stackedColumn",
                toolTipContent: "{label}<br/><span style='\"'color: {color};'\"'><strong>{name}</strong></span>: {y}",
                dataPoints: [
                    { x: 0, y: 50, label: "Стандартные латексные" },

                ],
            },{
                name: 'Дополнительный объем (повреждения)',
                showInLegend: true,
                type: "stackedColumn",
                toolTipContent: "{label}<br/><span style='\"'color: {color};'\"'><strong>{name}</strong></span>: {y}",
                dataPoints: [
                    { x: 0, y: 50, label: "Стандартные латексные" },
                ],
            }
            ]
        });


        chart1.render();


    }
</script>