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
<br />
<br />
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
                text: "Удовлетворение функциональных потребностей"
            },
            axisX: {
                interval: 10
            },
            theme: "theme1",
            data: [{
                name: 'Хирурги',
                showInLegend: true,
                type: "area",
                dataPoints: [
                    { y: 0, label: "" },
                    { y: 150, label: "Хирурги" },
                    { y: 0, label: "" },
                ]
            },{
                name: 'Операционные медсестры',
                showInLegend: true,
                type: "area",
                dataPoints: [
                    { y: 0, label: "" },
                    { y: 180, label: "Операционные медсестры" },
                    { y: 0, label: "" },
                ]
            }
            ]
        });

        var chart2 = new CanvasJS.Chart("chart-2",{
            title: {
                text: "Удовлетворение индивидуальных потребностей"
            },
            axisX: {
                interval: 10
            },
            theme: "theme1",
            data: [{
                name: 'Хирурги',
                showInLegend: true,
                type: "area",
                dataPoints: [
                    { y: 0, label: "" },
                    { y: 150, label: "Аллергия 1 и 4 типа" },
                    { y: 180, label: "Контактный неаллергический дерматит" },
                    { y: 0, label: "" },
                ]
            },{
                name: 'Операционные медсестры',
                showInLegend: true,
                type: "area",
                dataPoints: [
                    { y: 0, label: "" },
                    { y: 52, label: "Аллергия 1 и 4 типа" },
                    { y: 75, label: "Контактный неаллергический дерматит" },
                    { y: 0, label: "" },
                ]
            }
            ]
        });

        var chart3 = new CanvasJS.Chart("chart-3",{
            title: {
                text: "Удовлетворение профессиональных потребностей "
            },
            axisX: {
                interval: 10
            },
            theme: "theme1",
            data: [{
                name: 'Хирурги',
                showInLegend: false,
                type: "area",
                dataPoints: [
                    { y: 0, label: "" },
                    { y: 150, label: "Акушерские" },
                    { y: 180, label: "Пов. прочности" },
                    { y: 180, label: "Пов. чувствительн." },
                    { y: 180, label: "Антимикробные" },
                    { y: 180, label: "Текстурированные" },
                    { y: 0, label: "" },
                ]
            }
            ]
        });


        chart1.render();
        chart2.render();
        chart3.render();


    }
</script>