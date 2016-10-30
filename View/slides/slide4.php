<div class="title"><h1>Оценка удовлетворение потребностей</h1></div>

<div class="row">
    <div class="col-xs-12 col-md-6">
        <p>Удовлетворение профессиональных потребностей – перчатки необходимые для специализированных операций</p>
        <div id="chart-1" class="chart"></div>
    </div>
    <div class="col-xs-12 col-md-6">
        <p>Удовлетворение функциональных потребностей – перчатки необходимые для защиты от гемоконтактных инфекций и профилактики ИСМП</p>
        <div id="chart-2" class="chart"></div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-md-6">
        <p>Удовлетворение индивидуальных потребностей – перчатки необходимые для оперирующего персонала с аллергиями  </p>
        <div id="chart-3" class="chart"></div>
    </div>
    <div class="col-xs-12 col-md-6">

    </div>
</div>



<script type="text/javascript">
    window.onload = function() {

        var chart1 = new CanvasJS.Chart("chart-1", {
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

        var chart2 = new CanvasJS.Chart("chart-2",
            {
                title:{
                    text: ""
                },
                animationEnabled: true,
                axisY: {
                    title: ""
                },
                legend: {
                    verticalAlign: "bottom",
                    horizontalAlign: "center"
                },
                theme: "theme3",
                data: [

                    {
                        type: "column",
                        showInLegend: true,
                        legendMarkerColor: "grey",
                        legendText: "Общий объем",
                        dataPoints: [
                            {y: <?=$itog->getVolumeSurgeons()?>, label: "Хирурги"},
                            {y: <?=$itog->getVolumeNurses()?>,  label: "Операционные медсестры" }
                        ]
                    }
                ]
            });

        var chart3 = new CanvasJS.Chart("chart-3",
            {
                title:{
                    text: ""
                },
                animationEnabled: true,
                axisY: {
                    title: ""
                },
                legend: {
                    verticalAlign: "bottom",
                    horizontalAlign: "center"
                },
                theme: "theme3",
                data: [

                    {
                        type: "column",
                        showInLegend: true,
                        legendMarkerColor: "grey",
                        legendText: "Общий объем",
                        dataPoints: [
                            { y: <?=$itog->slide4()['g26']?>, label: "Акушерские", color: '#369ead'},
                            { y: <?=$itog->slide4()['g27']?>,  label: "Пов. прочности", color: '#369ead' },
                            { y: <?=$itog->slide4()['g28']?>,  label: "Пов. чувствител.", color: '#369ead' },
                            { y: <?=($itog->slide3()['ay40'] ? $itog->slide3()['ay40'] : 0)?>,  label: "Антимикрорбные", color: '#369ead' },
                            { y: <?=$itog->slide4()['g29']?>,  label: "Текстурированные", color: '#369ead' }
                        ]
                    }
                ]
            });


        chart1.render();
        chart2.render();
        chart3.render();


    }
</script>