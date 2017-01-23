<div class="title"><h1>Оценка удовлетворения потребностей</h1></div>

<div class="row">
    <div class="col-xs-12 col-md-6">
        <p>Удовлетворение функциональных потребностей – перчатки, необходимые для годового числа операций.</p>
        <div id="chart-1" class="chart"></div>
    </div>
    <div class="col-xs-12 col-md-6">
        <p>Удовлетворение функциональных потребностей – перчатки, необходимые для защиты от гемоконтактных инфекций и при высоком риске ИСМП.</p>
        <div id="chart-4" class="chart"></div>
    </div>
</div>
<br />
<br />
<div class="row">
    <div class="col-xs-12 col-md-6">
        <p>Удовлетворение профессиональных потребностей – перчатки, необходимые для специализированных операций</p>
        <div id="chart-3" class="chart"></div>
    </div>
    <div class="col-xs-12 col-md-6">
        <p>Удовлетворение индивидуальных потребностей – перчатки, необходимые для предупреждения патологических реакций  у оперирующего персонала.</p>
        <div id="chart-2" class="chart"></div>
    </div>
</div>
<div style="text-align: center; color: #7e0b20; font-style: italic">
    *Наведите курсор на графики, чтобы увидеть значения
</div>


<script type="text/javascript">
    window.onload = function() {

        var chart1 = new CanvasJS.Chart("chart-1", {
            title: {
                text: ""
            },
            axisX: {
                interval: 1,
                labelAngle: 0,
                labelFontSize: 14,
//                labelColor: '#000'
            },
            axisY:{
                valueFormatString: "#####.##",
            },
            showInLegend: true,
            theme: "theme1",
            toolTip:{
                content: function (e) {
//                    console.log(e.entries[0]);
                    var axisX = e.entries[0].dataSeries.name;
                    var xVal = e.entries[0].dataPoint.x;
                    var yVal = e.entries[0].dataPoint.y;
                    var label = '';
//                    var label = e.entries[0].dataPoint.label;
                    if (xVal == 0 || xVal == 2){
                        return null;
                    }else{
                        return axisX+' '+label+': '+yVal;
                    }
                },
            },

            data: [{
                yValueFormatString: "# #### ###.##",
                name: 'Хирурги',
                showInLegend: true,
                type: "area",
                dataPoints: [
                    { y: 0, label: " " },
                    { y: <?=$itog->getVolumeSurgeons()?>, label: "Общий объем" },
                    { y: 0, label: " " },
                ]
            },{
                yValueFormatString: "# #### ###.##",
                name: 'Операционные медсестры',
                showInLegend: true,
                type: "area",
                dataPoints: [
                    { y: 0, label: " " },
                    { y: <?=$itog->getVolumeNurses()?>, label: "Общий объем" },
                    { y: 0, label: " " },
                ]
            }
            ]
        });

        var chart2 = new CanvasJS.Chart("chart-2",{
            title: {
                text: ""
            },
            axisX: {
                interval: 1,
                labelAngle: 0,
                labelFontSize: 11,
            },
            axisY:{
                valueFormatString: "#0", //try properties here
            },
            theme: "theme1",
            toolTip:{
                content: function (e) {
//                    console.log(e.entries[0]);
                    var axisX = e.entries[0].dataSeries.name;
                    var xVal = e.entries[0].dataPoint.x;
                    var yVal = e.entries[0].dataPoint.y;
                    var label = '';
//                    var label = e.entries[0].dataPoint.label;
                    if (xVal == 0 || xVal == 2){
                        return null;
                    }else{
                        return axisX+' '+label+': '+yVal;
                    }
                },
            },
            data: [{
                yValueFormatString: "# #### ###.##",
                name: 'Хирурги',
                showInLegend: true,
                type: "area",
                dataPoints: [
                    { y: 0, label: " " },
                    { y: <?=$itog->getForSlide2()[0]?>, label: "Аллергия 1 и 4 типа" },
                    { y: <?=$itog->getForSlide2()[1]?>, label: "Контактный неаллергический дерматит" },
                    { y: 0, label: " " },
                ]
            },{
                yValueFormatString: "# #### ###.##",
                name: 'Операционные медсестры',
                showInLegend: true,
                type: "area",
                dataPoints: [
                    { y: 0, label: " " },
                    { y: <?=$itog->getForSlide2()[2]?>, label: "Синтетические при аллергии 1 и 4 типа" },
                    { y: <?=$itog->getForSlide2()[3]?>, label: "Латексные неопудренные при контактном дерматите" },
                    { y: 0, label: " " },
                ]
            }
            ]
        });

        var chart3 = new CanvasJS.Chart("chart-3",{
            title: {
                text: ""
            },
            axisX: {
                interval: 1,
                labelAngle: 0,
                labelFontSize: 11,
            },
            axisY:{
                valueFormatString: "#0", //try properties here
            },
            theme: "theme1",
            toolTip:{
                content: function (e) {
//                    console.log(e.entries[0]);
                    var axisX = e.entries[0].dataSeries.name;
                    var xVal = e.entries[0].dataPoint.x;
                    var yVal = e.entries[0].dataPoint.y;
                    var label = '';
//                    var label = e.entries[0].dataPoint.label;
                    if (xVal == 0 || xVal == 2){
                        return null;
                    }else{
                        return axisX+' '+label+': '+yVal;
                    }
                },
            },
            data: [{
                yValueFormatString: "# #### ###.##",
                name: 'Хирурги',
                showInLegend: false,
                type: "area",
                dataPoints: [
                    { y: 0, label: " " },
                    { y: <?=$itog->getForSlide2()[4]?>, label: "Акушерские" },
                    { y: <?=$itog->getForSlide2()[5]?>, label: "Пов. прочности" },
                    { y: <?=$itog->getForSlide2()[6]?>, label: "Пов. чувствительн." },
                    { y: <?=$itog->getForSlide2()[7]?>, label: "Антимикробные" },
                    { y: <?=$itog->getForSlide2()[8]?>, label: "Текстурированные" },
                    { y: 0, label: " " },
                ]
            }
            ]
        });

        var chart4 = new CanvasJS.Chart("chart-4",{
            title: {
                text: ""
            },
            axisX: {
                interval: 1,
                labelAngle: 0,
                labelFontSize: 11,
            },
            axisY:{
                valueFormatString: "#0", //try properties here
            },
            theme: "theme1",
            toolTip:{
                content: function (e) {
//                    console.log(e.entries[0]);
                    var axisX = e.entries[0].dataSeries.name;
                    var xVal = e.entries[0].dataPoint.x;
                    var yVal = e.entries[0].dataPoint.y;
                    var label = '';
//                    var label = e.entries[0].dataPoint.label;
                    if (xVal == 0 || xVal == 2){
                        return null;
                    }else{
                        return axisX+' '+label+': '+yVal;
                    }
                },
            },
            data: [{
                yValueFormatString: "# #### ###.##",
                name: 'Хирурги',
                showInLegend: true,
                type: "area",
                dataPoints: [
                    { y: 0, label: " " },
                    { y: <?=$itog->getForSlide2()[9]?>, label: "двойные перчатки при ГКИ" },
                    { y: <?=$itog->getForSlide2()[11]?>, label: "двойные перчатки при ГКИ" },
                    { y: 0, label: " " },
                ]
            },{
                name: 'Операционные медсестры',
                showInLegend: true,
                type: "area",
                dataPoints: [
                    { y: 0, label: " " },
                    { y: <?=$itog->getForSlide2()[10]?>, label: "двойные перчатки при ГКИ" },
                    { y: <?=$itog->getForSlide2()[12]?>, label: "антимикробные при ИСМП" },
                    { y: 0, label: " " },
                ]
            }
            ]
        });

        chart1.render();
        chart2.render();
        chart3.render();
        chart4.render();


    }
</script>