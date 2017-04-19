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
    <div id="chart-6" class="chart" style="height: 750px; margin-top: -250px"></div>
    <div style="text-align: center; color: #7e0b20; font-style: italic">
        *Наведите курсор на графики, чтобы увидеть значения
    </div>
</div>
<button type="button" class="btn btn-primary down hidden-xs hidden-sm">
    <span class="glyphicon glyphicon-circle-arrow-down"></span>
</button>
<script type="text/javascript">

    function toSum($items) {
        var s = 0;
        for( i =0 ; i < $items.length; i++){
            s += parseInt($items.eq(i).html());
        }
        return s;
    }
    $(document).ready(function () {
        function getCounts() {
            var counts = {
                'Biogel Surgeons' :                     toSum($('.table-condensed tr td[data-title="Biogel Surgeons"]')),
                'Biogel Eclipse' :                      toSum($('.table-condensed tr td[data-title="Biogel Eclipse"]')),
                'Encore Acclaim' :                      toSum($('.table-condensed tr td[data-title="Encore Acclaim"]')),
                'Encore Style 85' :                     toSum($('.table-condensed tr td[data-title="Encore Style 85"]')),
                'Medi-Grip PF' :                        toSum($('.table-condensed tr td[data-title="Medi-Grip PF"]')),
                'Shen Wei' :                            toSum($('.table-condensed tr td[data-title="Shen Wei"]')),
                'Encore Style 42' :                     toSum($('.table-condensed tr td[data-title="Encore Style 42"]')),
                'Medi-Grip PWD' :                       toSum($('.table-condensed tr td[data-title="Medi-Grip PWD"]')),
                'Medi-Grip Plus' :                      toSum($('.table-condensed tr td[data-title="Medi-Grip Plus"]')),
                'Encore Acclaim + Encore Underglove' :  toSum($('.table-condensed tr td[data-title="Encore Acclaim + Encore Underglove"]')),
                'Biogel Eclipse Indicator' :            toSum($('.table-condensed tr td[data-title="Biogel Eclipse Indicator"]')),
                'Bioclean Extra' :                      toSum($('.table-condensed tr td[data-title="Bioclean Extra"]')),
                'Dona 410 PF' :                         toSum($('.table-condensed tr td[data-title="Dona 410 PF"]')),
                'Encore Microptic' :                    toSum($('.table-condensed tr td[data-title="Encore Microptic"]')),
                'Biogel Super Sensitive' :              toSum($('.table-condensed tr td[data-title="Biogel Super Sensitive"]')),
                'Biogel M' :                            toSum($('.table-condensed tr td[data-title="Biogel M"]')),
                'Encore Orthopaedic' :                  toSum($('.table-condensed tr td[data-title="Encore Orthopaedic"]')),
                'Encore Underglove' :                   toSum($('.table-condensed tr td[data-title="Encore Underglove"]')),
                'Encore Ultra' :                        toSum($('.table-condensed tr td[data-title="Encore Ultra"]')),
                'Biogel Skinsense' :                    toSum($('.table-condensed tr td[data-title="Biogel Skinsense"]')),
                'Biogel Skinsense Indicator' :          toSum($('.table-condensed tr td[data-title="Biogel Skinsense Indicator"]')),
                'Bioclean Emerald' :                    toSum($('.table-condensed tr td[data-title="Bioclean Emerald"]')),
                'Bioclean Ultimate' :                   toSum($('.table-condensed tr td[data-title="Bioclean Ultimate"]')),

            };


            var data = [];
            console.log(counts);
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
            var currentColumn = $(".table tr").eq(1).children('td')
            for (var i =1; i <= $(".table tr").length ; i++){
                var tr = $(".table tr").eq(i);
                console.log(tr.children('td').eq(0).html() + ' == ' + currentColumn.eq(0).html());
                if (i > 1  && tr.children('td').eq(0).html() == currentColumn.eq(0).html() ){
                    currentColumn.eq(0).attr('rowspan', parseInt(currentColumn.eq(0).attr('rowspan'))+1);
                    console.log('rowspan = ' + $(".table tr").eq(i-1).children('td').eq(0).attr('rowspan'));
                    tr.children('td').eq(0).remove();
                }else{
                    currentColumn = $(".table tr").eq(i).children('td');
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
                url: '<?=$domain?>/table',
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
                url: '<?=$domain?>/table',
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

        $('.down').click(function () {
            var body = $("html, body");
            body.stop().animate({scrollTop:$('html').height()}, '500', 'swing');
        });

        $(window).scroll(function () {
//            alert('1');
            if ($(window).scrollTop() == $(document).height() - $(window).height()){
                $('.down').fadeOut();
            }else{
                $('.down').fadeIn();
            }

        })
    });

</script>