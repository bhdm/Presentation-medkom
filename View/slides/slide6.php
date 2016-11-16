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
    <div id="chart-6" class="chart" style="height: 500px"></div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        function getCounts() {
            var counts = {
                'Biogel Surgeons' :                     parseInt($('.table-condensed tr td[data-title="Biogel Surgeons"]').html()),
                'Biogel Eclipse' :                      parseInt($('.table-condensed tr td[data-title="Biogel Eclipse"]').html()),
                'Encore Acclaim' :                      parseInt($('.table-condensed tr td[data-title="Encore Acclaim"]').html()),
                'Encore Style 85' :                     parseInt($('.table-condensed tr td[data-title="Encore Style 85"]').html()),
                'Medi-Grip PF' :                        parseInt($('.table-condensed tr td[data-title="Medi-Grip PF"]').html()),
                'Encore Style 42' :                     parseInt($('.table-condensed tr td[data-title="Encore Style 42"]').html()),
                'Medi-Grip PWD' :                       parseInt($('.table-condensed tr td[data-title="Medi-Grip PWD"]').html()),
                'Medi-Grip Plus' :                      parseInt($('.table-condensed tr td[data-title="Medi-Grip Plus"]').html()),
                'Encore Acclaim + Encore Underglove' :  parseInt($('.table-condensed tr td[data-title="Encore Acclaim + Encore Underglove"]').html()),
                'Biogel Eclipse Indicator' :            parseInt($('.table-condensed tr td[data-title="Biogel Eclipse Indicator"]').html()),
                'Bioclean Extra' :                      parseInt($('.table-condensed tr td[data-title="Bioclean Extra"]').html()),
                'Dona 410 PF' :                         parseInt($('.table-condensed tr td[data-title="Dona 410 PF"]').html()),
                'Encore Microptic' :                    parseInt($('.table-condensed tr td[data-title="Encore Microptic"]').html()),
                'Biogel Super Sensitive' :              parseInt($('.table-condensed tr td[data-title="Biogel Super Sensitive"]').html()),
                'Biogel M' :                            parseInt($('.table-condensed tr td[data-title="Biogel M"]').html()),
                'Encore Orthopaedic' :                  parseInt($('.table-condensed tr td[data-title="Encore Orthopaedic"]').html()),
                'Encore Underglove' :                   parseInt($('.table-condensed tr td[data-title="Encore Underglove"]').html()),
                'Encore Ultra' :                        parseInt($('.table-condensed tr td[data-title="Encore Ultra"]').html()),
                'Biogel Skinsense' :                    parseInt($('.table-condensed tr td[data-title="Biogel Skinsense"]').html()),
                'Biogel Skinsense Indicator' :          parseInt($('.table-condensed tr td[data-title="Biogel Skinsense Indicator"]').html()),
                'Bioclean Emerald' :                    parseInt($('.table-condensed tr td[data-title="Bioclean Emerald"]').html()),
                'Bioclean Ultimate' :                   parseInt($('.table-condensed tr td[data-title="Bioclean Ultimate"]').html()),

            };
            var data = [];
            $.each(counts, function (key, val) {
                if (val != 0 && val != NaN && val != undefined && val != false && !isNaN(val)){
                    data.push({
                        name: key,
                        showInLegend: true,
                        type: "stackedColumn",
                        toolTipContent: "{label}<br/><span style='\"'color: {color};'\"'><strong>{name}</strong></span>: {y} пар",
                        dataPoints: [
                            { x: 0, y: val, label: "Объем закупок, пар" }
                        ]
                    });
                    console.log(val);
                }
            });
            console.log(data);
            return data;
        }
        function getChart() {
            var counts = getCounts();
            var chart1 = new CanvasJS.Chart("chart-6", {
                animationEnabled: true,
                title: {
                    text: "Объем закупок, пар",
                    fontSize: 18
                },
                legend: {
                    fontSize: 0
                },
                axisY: {
                    labelFontSize: 14
                },
                axisX: {
                    interval: 10,
                    labelAngle: 0,
                    labelFontSize: 0
                },
                theme: "theme1",
                showInLegend: false,
                data: counts
            });


            chart1.render();
        }

        $('.check').on('ifChecked', function(event){
            $.ajax({
                url: '/table',
                data: 'ch='+$(this).attr('name'),
                method: 'POST',
                success: function (msg) {
                    $('.table-item').html(msg);
                    getChart();

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
                    getChart();
                }
        })
        });

        getChart();
    })

</script>