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
            <input type="checkbox" class="check" name="b8" id="check5" value="1"  checked>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-8">
            Аллергический статус
        </label>
        <div class="col-sm-2">
            <input type="checkbox" class="check" name="b5" id="check6" value="1" checked>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-8">
            Гемоконтактные инфекции
        </label>
        <div class="col-sm-2">
            <input type="checkbox" class="check" name="b6" id="check7" value="1" checked>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-8">
            Профилактика ИСМП
        </label>
        <div class="col-sm-2">
            <input type="checkbox" class="check" name="b7" id="check8" value="1" checked>
        </div>
    </div>
</form>
<div class="col-xs-12 col-md-7" >
    <div class="table-item">
        <?=$itog->getTable()?>
    </div>
</div>
<div class="col-xs-12 col-md-5">
    <div id="chart-6" class="chart" style="height: 500px"></div>
    <div style="text-align: center; color: #7e0b20; font-style: italic">
        *Наведите курсор на графики, чтобы увидеть значения
    </div>
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
                'Shen Wei' :                            parseInt($('.table-condensed tr td[data-title="Shen Wei"]').html()),
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
                        yValueFormatString: "# #### ###.##",
                        name: key,
                        showInLegend: true,
                        type: "stackedColumn",
                        toolTipContent: "{label}<br/><span style='\"'color: {color};'\"'><strong>{name}</strong></span>: {y} пар",
                        dataPoints: [
                            { x: 0, y: val, label: "Объем закупок, пар" }
                        ]
                    });
                }
            });

            var kol = data.length;
//            console.log(a=data);
            for (var i = 0 ; i < kol ; i++){
                for (var j = 0 ; j < kol ; j++){
                    if (j+1 < kol){
                        if (data[j].dataPoints[0].y < data[j+1].dataPoints[0].y){
                            var tmp = data[j];
                            data[j] = data[j+1];
                            data[j+1] = tmp;
                        }
                    }
                }
            }

            return data;
        }

        function MergeGridCells()
        {
            for (var i =1; i <= $(".table tr").length ; i++){
                var tr = $(".table tr").eq(i);

                if (i > 1  && tr.children('td').eq(0).html() == $(".table tr").eq(i-1).children('td').eq(0).html() ){
                    $(".table tr").eq(i-1).children('td').eq(0).attr('rowspan', parseInt($(".table tr").eq(i-1).children('td').eq(0).attr('rowspan'))+1);
                    tr.children('td').eq(0).remove();
                }
            }
        }

        function addTooltip() {
            for (var i =1; i <= $(".table tr").length ; i++){
                var tr = $(".table tr").eq(i);

                if (tr.children('td').eq(1).html() == 'система двойных перчаток' || tr.children('td').eq(0).html() == 'система двойных перчаток' ){
                    tr.children('td').eq(tr.children('td').length-1).attr('data-toggle','popover');
                    tr.children('td').eq(tr.children('td').length-1).attr('data-content','число комплектов');
                    tr.children('td').eq(tr.children('td').length-1).attr('title','');
                    tr.children('td').eq(tr.children('td').length-1).attr('data-title','');





                    if ($(".table tr").eq(i).children('td').eq($(".table tr").eq(i).children('td').length-1).children('span').hasClass('glyphicon') == false){
                        tr.children('td').eq(tr.children('td').length-1).append(' <span class="glyphicon glyphicon-info-sign" style="color: #777"></span>')
                    }
                }
            }
            $('[data-toggle="popover"]').popover({trigger: "hover"})
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
                    labelFontSize: 14,
                    valueFormatString: "#####.##", //try properties here
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
            MergeGridCells();
            addTooltip();

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

        $('body').on("change", ".fc", function () {
            var title = $(this).find( "option:selected" ).text();
            $(this).parent().parent().children('td:last').attr('data-title',title );
            getChart();
        })

    });

</script>