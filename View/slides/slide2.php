<div class="title"><h1>Информация необходимая для расчетов</h1></div>
<p>
    Рабочая версия модели включает 11 слайдов. Актуальные данные медицинской организации (МО) вводятся в обозначенные на
    слайдах ячейки, их пересчет производится автоматически при переходе со слайда на слайд. Результаты расчетов
    отражаются в виде цифровых таблиц и сравнительных диаграмм. В рабочей версии учитываются все варианты использования
    хирургических перчаток: при операциях, мелких хирургических манипуляциях, перевязках.
</p>
<p>
    Демонстрационная версия предполагает расчет потребления хирургических перчаток только при плановых операциях, для
    чего оценивается только один параметр: годовое число операций с распределением по профилю хирургических отделений.
    Значения остальных параметров представлены либо расчетными константами, либо средними значениями на основе
    клинико-экономических расчетов, проведенных Медком-МП. Расчеты производятся на трех членов хирургической бригады.
</p>
<div class="title"><h2>Введите данные по Вашей больнице</h2></div>
<form class="form-horizontal" method="POST" action="/slide3">
    <div class="form-group">
        <label class="col-sm-6">Количество операций за год</label>
        <div class="col-sm-2">
            <input type="number" class="form-control" name="countOfYear" id="countOfYear">
        </div>
    </div>
    <strong>Распределение операций по профилю:</strong>
    <p><em>
            Здесь выберете профиль операций и укажите сколько операций этого профиля проводится в год. Обратите внимание
            что можно выбрать не больше 12 профилей. Если в списке нет какого-то профиля, то выберете близкий нему.
            В модели профиль операции влияет только на тип перчатки.
        </em></p>
    <div class="specialty-box">

        <?php if (is_array($_SESSION['slide1']['spec'])){ ?>
        <?php foreach ($_SESSION['slide1']['spec'] as $item){ ?>
        <div class="form-group">
            <div class="col-sm-6">
                <select class="chosen" name="specialty[0]">
                    <option  <?=($item['title'] == 'Абдоминальная хирургия' ? 'selected' : '')?> value="Абдоминальная хирургия">Абдоминальная хирургия</option>
                    <option  <?=($item['title'] == 'Акушерство' ? 'selected' : '')?> value="Акушерство">Акушерство</option>
                    <option  <?=($item['title'] == 'Андрология' ? 'selected' : '')?> value="Андрология ">Андрология </option>
                    <option  <?=($item['title'] == 'Гастроэнтерология' ? 'selected' : '')?> value="Гастроэнтерология">Гастроэнтерология</option>
                    <option  <?=($item['title'] == 'Гинекология' ? 'selected' : '')?> value="Гинекология">Гинекология</option>
                    <option  <?=($item['title'] == 'Гнойная хирургия' ? 'selected' : '')?> value="Гнойная хирургия">Гнойная хирургия</option>
                    <option  <?=($item['title'] == 'Кардиохирургия' ? 'selected' : '')?> value="Кардиохирургия">Кардиохирургия</option>
                    <option  <?=($item['title'] == 'Колопроктология' ? 'selected' : '')?> value="Колопроктология">Колопроктология</option>
                    <option  <?=($item['title'] == 'ЛОР' ? 'selected' : '')?> value="ЛОР">ЛОР</option>
                    <option  <?=($item['title'] == 'Нейрохирургия' ? 'selected' : '')?> value="Нейрохирургия">Нейрохирургия</option>
                    <option  <?=($item['title'] == 'Общая хирургия' ? 'selected' : '')?> value="Общая хирургия">Общая хирургия</option>
                    <option  <?=($item['title'] == 'Офтальмология' ? 'selected' : '')?> value="Офтальмология">Офтальмология</option>
                    <option  <?=($item['title'] == 'Сердечно-сосудистая хирургия' ? 'selected' : '')?> value="Сердечно-сосудистая хирургия">Сердечно-сосудистая хирургия</option>
                    <option  <?=($item['title'] == 'Стоматология' ? 'selected' : '')?> value="Стоматология">Стоматология</option>
                    <option  <?=($item['title'] == 'Торакальная хирургия' ? 'selected' : '')?> value="Торакальная хирургия">Торакальная хирургия</option>
                    <option  <?=($item['title'] == 'Травматология и ортопедия' ? 'selected' : '')?> value="Травматология и ортопедия">Травматология и ортопедия</option>
                    <option  <?=($item['title'] == 'Трансплантология' ? 'selected' : '')?> value="Трансплантология">Трансплантология</option>
                    <option  <?=($item['title'] == 'Урология' ? 'selected' : '')?> value="Урология">Урология</option>
                    <option  <?=($item['title'] == 'Челюстно-лицевая хирургия' ? 'selected' : '')?> value="Челюстно-лицевая хирургия">Челюстно-лицевая хирургия</option>
                    <option  <?=($item['title'] == 'Эндокринология' ? 'selected' : '')?> value="Эндокринология">Эндокринология</option>
                    <option  <?=($item['title'] == 'Эндоскопия' ? 'selected' : '')?> value="Эндоскопия">Эндоскопия</option>
                </select>
            </div>
            <div class="col-sm-2">
                <input type="number" class="form-control patr" name="value[0]" value="<?=$item['value']?>">
            </div>
            <div class="col-sm-2 text-right">
                <?php if (end($_SESSION['slide1']['spec']) == $item){ ?>
                    <button type="button" class="btn btn-primary" id="add"><span class="glyphicon glyphicon-plus"></span></button>
                <?php }else{ ?>
                <button type="button" class="btn btn-danger remove-item"><span class="glyphicon glyphicon-remove"></span></button>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
        <?php }else{ ?>
        <div class="form-group">
            <div class="col-sm-6">
                <select class="chosen" name="specialty[0]">
                    <option value="Абдоминальная хирургия">Абдоминальная хирургия</option>
                    <option value="Акушерство">Акушерство</option>
                    <option value="Андрология ">Андрология </option>
                    <option value="Гастроэнтерология">Гастроэнтерология</option>
                    <option value="Гинекология">Гинекология</option>
                    <option value="Гнойная хирургия">Гнойная хирургия</option>
                    <option value="Кардиохирургия">Кардиохирургия</option>
                    <option value="Колопроктология">Колопроктология</option>
                    <option value="ЛОР">ЛОР</option>
                    <option value="Нейрохирургия">Нейрохирургия</option>
                    <option value="Общая хирургия">Общая хирургия</option>
                    <option value="Офтальмология">Офтальмология</option>
                    <option value="Сердечно-сосудистая хирургия">Сердечно-сосудистая хирургия</option>
                    <option value="Стоматология">Стоматология</option>
                    <option value="Торакальная хирургия">Торакальная хирургия</option>
                    <option value="Травматология и ортопедия">Травматология и ортопедия</option>
                    <option value="Трансплантология">Трансплантология</option>
                    <option value="Урология">Урология</option>
                    <option value="Челюстно-лицевая хирургия">Челюстно-лицевая хирургия</option>
                    <option value="Эндокринология">Эндокринология</option>
                    <option value="Эндоскопия">Эндоскопия</option>
                </select>
            </div>
            <div class="col-sm-2">
                <input type="number" class="form-control patr" name="value[0]">
            </div>
            <div class="col-sm-2 text-right">
                <button type="button" class="btn btn-primary" id="add"><span class="glyphicon glyphicon-plus"></span></button>
            </div>
        </div>
    </div>
    <?php } ?>
    <div class="row">
        <div class="col-sm-offset-8 col-sm-2 text-right">
            <button type="submit" class="btn btn-primary" id="save">Сохранить</button>
        </div>
    </div>
</form>


<div class="modal fade" tabindex="-1" role="dialog" id="error">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-danger">Ошибка</h4>
            </div>
            <div class="modal-body">
                <p>Количество операций за год должно равняться сумме операций по профилю</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('body').on("click", '#add', function () {
            var count = $('.specialty-box .form-group').length;
            var box = '<div class="form-group">' +
                '<div class="col-sm-6">' +
                '<select class="chosen" name="specialty['+count+']">' +
                '<option value="Абдоминальная хирургия">Абдоминальная хирургия</option>' +
                '<option value="Акушерство">Акушерство</option>' +
                '<option value="Андрология ">Андрология </option>' +
                '<option value="Гастроэнтерология">Гастроэнтерология</option>' +
                '<option value="Гинекология">Гинекология</option>' +
                '<option value="Гнойная хирургия">Гнойная хирургия</option>' +
                '<option value="Кардиохирургия">Кардиохирургия</option>' +
                '<option value="Колопроктология">Колопроктология</option>' +
                '<option value="ЛОР">ЛОР</option>' +
                '<option value="Нейрохирургия">Нейрохирургия</option>' +
                '<option value="Общая хирургия">Общая хирургия</option>' +
                '<option value="Офтальмология">Офтальмология</option>' +
                '<option value="Сердечно-сосудистая хирургия">Сердечно-сосудистая хирургия</option>' +
                '<option value="Стоматология">Стоматология</option>' +
                '<option value="Торакальная хирургия">Торакальная хирургия</option>' +
                '<option value="Травматология и ортопедия">Травматология и ортопедия</option>' +
                '<option value="Трансплантология">Трансплантология</option>' +
                '<option value="Урология">Урология</option>' +
                '<option value="Челюстно-лицевая хирургия">Челюстно-лицевая хирургия</option>' +
                '<option value="Эндокринология">Эндокринология</option>' +
                '<option value="Эндоскопия">Эндоскопия</option>' +
                '</select>' +
                '</div>' +
                '<div class="col-sm-2">' +
                '<input type="number" class="form-control patr" name="value['+count+']">' +
                '</div>' +
                '<div class="col-sm-2 text-right">' +
                '<button type="button" class="btn btn-primary" id="add"><span class="glyphicon glyphicon-plus"></span></button>' +
                '</div>' +
                '</div>';
            $('.specialty-box').append(box);
            $('.chosen').chosen({width: '100%'});

            for (var i = 0 ; i < count ; i ++){
                var btn = $('.specialty-box .form-group').eq(i).children('.col-sm-2').children('button');
                btn.removeClass('btn-primary');
                btn.addClass('btn-danger');
                btn.addClass('remove-item');
                btn.removeAttr('id');
                btn.children('span').removeClass('glyphicon-plus');
                btn.children('span').addClass('glyphicon-remove');
            }
        });

        $('body').on("click", '.remove-item', function () {
            $(this).parent().parent().remove();
            var count = $('.specialty-box .form-group').length;
            for (var i = 0 ; i < count ; i ++){
                var box = $('.specialty-box .form-group').eq(i);
                box.children('.col-sm-6').children('select').attr('name', 'specialty['+i+']');
                box.children('.col-sm-6').children('input').attr('name', 'value['+i+']');
                $('.chosen').chosen({width: '100%'});
            }
        });

        $('#save').click(function () {
            var count = parseInt($('#countOfYear').val());
            var sum = 0;
            for (var i =0 ; i < $('.patr').length ; i ++){
                sum += parseInt($('.patr').eq(i).val());
            }
            if (count != sum){
                $('#error').modal();
                return false;
            }

        })
    });
</script>