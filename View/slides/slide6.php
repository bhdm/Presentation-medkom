<div class="title"><h1>Выбор факторов влияния на расчет финальной структуры закупок</h1></div>

<form class="form-horizontal">
    <div class="form-group">
        <label class="col-sm-8">
            Длительность операции
        </label>
        <div class="col-sm-2">
            <input type="checkbox" class="check" name="b3" id="check3" value="1" checked>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-8">
            Повреждения перчаток
        </label>
        <div class="col-sm-2">
            <div><input type="checkbox" class="check" name="b4" id="check4" value="1" checked></div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-8">
            Специализация
        </label>
        <div class="col-sm-2">
            <input type="checkbox" class="check" name="b5" id="check5" value="1"  checked>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-8">
            Аллергический статус
        </label>
        <div class="col-sm-2">
            <input type="checkbox" class="check" name="b6" id="check6" value="1" checked>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-8">
            Гемоконтактные инфекции
        </label>
        <div class="col-sm-2">
            <input type="checkbox" class="check" name="b7" id="check7" value="1" checked>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-8">
            Профилактика ИСМП ( инфекции, связанные с оказанием медицинской помощи)
        </label>
        <div class="col-sm-2">
            <input type="checkbox" class="check" name="b8" id="check8" value="1" checked>
        </div>
    </div>
</form>
<div class="col-xs-12 col-md-8" >
    <div class="table-item">
        <?=$itog->getTable()?>
    </div>
</div>
<div class="col-xs-12 col-md-4">
<!--    <div id="chart-6" class="chart" style="height: 100%"></div>-->
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('.check').on('ifChecked', function(event){
            $.ajax({
                url: '/table',
                data: 'ch='+$(this).attr('name'),
                method: 'POST',
                success: function (msg) {
                    $('.table-item').html(msg);
                }
            })
        });
        $('.check').on('ifUnchecked', function(event){
            $.ajax({
                url: '/table',
                data: 'uch='+$(this).attr('name'),
                method: 'POST',
                success: function (msg) {
                    $('.table-item').html(msg);
                }
        })
        });
    })
    window.onload = function() {

//        var chart1 = new CanvasJS.Chart("chart-6", {
//            title: {
//                text: "Удовлетворение профессиональных потребностей",
//                fontSize: 18
//            },
//            legend: {
//                fontSize: 14
//            },
//            axisY: {
//                labelFontSize: 14
//            },
//            axisX: {
//                interval: 10,
//                labelAngle: 0,
//                labelFontSize: 14
//            },
//            theme: "theme1",
//            data: [{
//                name: 'Базовый объем (операции)',
//                showInLegend: true,
//                type: "stackedColumn",
//                toolTipContent: "{label}<br/><span style='\"'color: {color};'\"'><strong>{name}</strong></span>: {y}",
//                dataPoints: [
//                    { x: 0, y: 50, label: "Стандартные латексные" },
//
//                ],
//            },{
//                name: 'Дополнительный объем (длительность)',
//                showInLegend: true,
//                type: "stackedColumn",
//                toolTipContent: "{label}<br/><span style='\"'color: {color};'\"'><strong>{name}</strong></span>: {y}",
//                dataPoints: [
//                    { x: 0, y: 50, label: "Стандартные латексные" },
//
//                ],
//            },{
//                name: 'Базовый объем (манипуляции)',
//                showInLegend: true,
//                type: "stackedColumn",
//                toolTipContent: "{label}<br/><span style='\"'color: {color};'\"'><strong>{name}</strong></span>: {y}",
//                dataPoints: [
//                    { x: 0, y: 50, label: "Стандартные латексные" },
//
//                ],
//            },{
//                name: 'Дополнительный объем (повреждения)',
//                showInLegend: true,
//                type: "stackedColumn",
//                toolTipContent: "{label}<br/><span style='\"'color: {color};'\"'><strong>{name}</strong></span>: {y}",
//                dataPoints: [
//                    { x: 0, y: 50, label: "Стандартные латексные" },
//                ],
//            }
//            ]
//        });


//        chart1.render();


    }
</script>