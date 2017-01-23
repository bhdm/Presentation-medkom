<?php
/**
 * Created by PhpStorm.
 * User: maxim
 * Date: 22.10.16
 * Time: 22:03
 */
class VolumeClass
{
    protected $slide1;

    protected $slide2;

    public function __construct()
    {
        $this->slide1 = null;
        $this->slide2 = null;
    }

    public function slide1(){
        $this->slide1['b2'] = 10000;

        $this->slide1['a5'] = 'Акушерство';
        $this->slide1['a6'] = 'Гинекология';
        $this->slide1['a7'] = 'Гнойная хирургия';
        $this->slide1['a8'] = 'Абдоминальная хирургия';
        $this->slide1['a9'] = 'Колопроктология';
        $this->slide1['a10'] = 'Кардиохирургия';
        $this->slide1['a11'] = 0;
        $this->slide1['a12'] = 0;
        $this->slide1['a13'] = 0;
        $this->slide1['a14'] = 0;
        $this->slide1['a15'] = 0;
        $this->slide1['a16'] = 0;

        $this->slide1['b5'] = 1000;
        $this->slide1['b6'] = 1000;
        $this->slide1['b7'] = 1000;
        $this->slide1['b8'] = 1000;
        $this->slide1['b9'] = 1000;
        $this->slide1['b10'] = 5000;
        $this->slide1['b11'] = 0;
        $this->slide1['b12'] = 0;
        $this->slide1['b13'] = 0;
        $this->slide1['b14'] = 0;
        $this->slide1['b15'] = 0;
        $this->slide1['b16'] = 0;

//      Берем данные из сессии второго слайда
//        $this->slide1['a5'] =  (isset($_SESSION['slide1']['spec'][0]['title']) ? $_SESSION['slide1']['spec'][0]['title'] : 0 );
//        $this->slide1['a6'] =  (isset($_SESSION['slide1']['spec'][1]['title']) ? $_SESSION['slide1']['spec'][1]['title'] : 0 );
//        $this->slide1['a7'] =  (isset($_SESSION['slide1']['spec'][2]['title']) ? $_SESSION['slide1']['spec'][2]['title'] : 0 );
//        $this->slide1['a8'] =  (isset($_SESSION['slide1']['spec'][3]['title']) ? $_SESSION['slide1']['spec'][3]['title'] : 0 );
//        $this->slide1['a9'] =  (isset($_SESSION['slide1']['spec'][4]['title']) ? $_SESSION['slide1']['spec'][4]['title'] : 0 );
//        $this->slide1['a10'] = (isset($_SESSION['slide1']['spec'][5]['title']) ? $_SESSION['slide1']['spec'][5]['title'] : 0 );
//        $this->slide1['a11'] = (isset($_SESSION['slide1']['spec'][6]['title']) ? $_SESSION['slide1']['spec'][6]['title'] : 0 );
//        $this->slide1['a12'] = (isset($_SESSION['slide1']['spec'][7]['title']) ? $_SESSION['slide1']['spec'][7]['title'] : 0 );
//        $this->slide1['a13'] = (isset($_SESSION['slide1']['spec'][8]['title']) ? $_SESSION['slide1']['spec'][8]['title'] : 0 );
//        $this->slide1['a14'] = (isset($_SESSION['slide1']['spec'][9]['title']) ? $_SESSION['slide1']['spec'][9]['title'] : 0 );
//        $this->slide1['a15'] = (isset($_SESSION['slide1']['spec'][10]['title']) ? $_SESSION['slide1']['spec'][10]['title'] : 0 );
//        $this->slide1['a16'] = (isset($_SESSION['slide1']['spec'][11]['title']) ? $_SESSION['slide1']['spec'][11]['title'] : 0 );
//
//        $this->slide1['b5'] =  (isset($_SESSION['slide1']['spec'][0]['value']) ? $_SESSION['slide1']['spec'][0]['value'] : 0 );
//        $this->slide1['b6'] =  (isset($_SESSION['slide1']['spec'][1]['value']) ? $_SESSION['slide1']['spec'][1]['value'] : 0 );
//        $this->slide1['b7'] =  (isset($_SESSION['slide1']['spec'][2]['value']) ? $_SESSION['slide1']['spec'][2]['value'] : 0 );
//        $this->slide1['b8'] =  (isset($_SESSION['slide1']['spec'][3]['value']) ? $_SESSION['slide1']['spec'][3]['value'] : 0 );
//        $this->slide1['b9'] =  (isset($_SESSION['slide1']['spec'][4]['value']) ? $_SESSION['slide1']['spec'][4]['value'] : 0 );
//        $this->slide1['b10'] = (isset($_SESSION['slide1']['spec'][5]['value']) ? $_SESSION['slide1']['spec'][5]['value'] : 0 );
//        $this->slide1['b11'] = (isset($_SESSION['slide1']['spec'][6]['value']) ? $_SESSION['slide1']['spec'][6]['value'] : 0 );
//        $this->slide1['b12'] = (isset($_SESSION['slide1']['spec'][7]['value']) ? $_SESSION['slide1']['spec'][7]['value'] : 0 );
//        $this->slide1['b13'] = (isset($_SESSION['slide1']['spec'][8]['value']) ? $_SESSION['slide1']['spec'][8]['value'] : 0 );
//        $this->slide1['b14'] = (isset($_SESSION['slide1']['spec'][9]['value']) ? $_SESSION['slide1']['spec'][9]['value'] : 0 );
//        $this->slide1['b15'] = (isset($_SESSION['slide1']['spec'][10]['value']) ? $_SESSION['slide1']['spec'][10]['value'] : 0 );
//        $this->slide1['b16'] = (isset($_SESSION['slide1']['spec'][11]['value']) ? $_SESSION['slide1']['spec'][11]['value'] : 0 );



//        $testSum = $this->slide1['b5']+
//            $this->slide1['b6']+
//            $this->slide1['b7']+
//            $this->slide1['b8']+
//            $this->slide1['b9']+
//            $this->slide1['b10'];
//
//        if ($testSum != $this->slide1['b2']){
//            return ['error' => true, 'message' => 'Общее кол-во операций не соответствует сумме количество операций по специальностям'];
//        }

        $table = array(
            'a22' => 'Абдоминальная хирургия',          'b22' => 41.2903225806452,  'c22' => 0.3306,    'd22' => 83.3870967741936,  'e22' => 0.53,      'f22' => 156.177419354839,  'g22' => 0.1394,
            'a23' => 'Гинекология',                     'b23' => 25.4125,           'c23' => 0.423,     'd23' => 54.4882352941176,  'e23' => 0.4208,    'f23' => 102.612,           'g23' => 0.1562,
            'a24' => 'Гнойная хирургия',                'b24' => 30.5,              'c24' => 0.3154,    'd24' => 48.543,            'e24' => 0.4984,    'f24' => 98.7450980392157,  'g24' => 0.1862,
            'a25' => 'Общая хирургия',                  'b25' => 30.0591715976331,  'c25' => 0.3622,    'd25' => 58.9764705882353,  'e25' => 0.4640,    'f25' => 112.997619047619,  'g25' => 0.1738,
            'a26' => 'Урология',                        'b26' => 31.4583333333333,  'c26' => 0.3125,    'd26' => 61.75,             'e26' => 0.4958,    'f26' => 107.291666666667,  'g26' => 0.1917,
            'a27' => 'Сердечно-сосудистая хирургия',    'b27' => 48.3,              'c27' => 0.3500,    'd27' => 100,               'e27' => 0.4300,    'f27' => 197,               'g27' => 0.2200,
            'a28' => 'ЛОР',                             'b28' => 24.5238095238095,  'c28' => 0.4938,    'd28' => 47.5,              'e28' => 0.3724,    'f28' => 83.3809523809524,  'g28' => 0.1338,
            'a29' => 'Нейрохирургия',                   'b29' => 38.75,             'c29' => 0.1988,    'd29' => 87.5,              'e29' => 0.5937,    'f29' => 199.375,           'g29' => 0.2075,
            'a30' => 'Офтальмология',                   'b30' => 34.3333333333333,  'c30' => 0.4533,    'd30' => 68.3333333333333,  'e30' => 0.4120,    'f30' => 122.666666666667,  'g30' => 0.1347,
            'a31' => 'Травматология и ортопедия',       'b31' => 40.4938271604938,  'c31' => 0.3227,    'd31' => 76.6543209876543,  'e31' => 0.4864,    'f31' => 129.101234567901,  'g31' => 0.1909,
            'a32' => 'Акушерство',                      'b32' => 33.1294117647059,  'c32' => 0.3767,    'd32' => 59.4642857142857,  'e32' => 0.4725,    'f32' => 104.904761904762,  'g32' => 0.1508,
            'a33' => 'Колопроктология',                 'b33' => 30.4545454545455,  'c33' => 0.2960,    'd33' => 50.4545454545455,  'e33' => 0.5160,    'f33' => 90.5,              'g33' => 0.1880,
        );

        $this->slide1 = array_merge($this->slide1, $table);

        $table = array(
            'j22' => 1, 'k22' => 1, 'l22' => 2,
            'j23' => 1, 'k23' => 1, 'l23' => 1,
            'j24' => 1, 'k24' => 1, 'l24' => 1,
            'j25' => 1, 'k25' => 1, 'l25' => 1,
            'j26' => 1, 'k26' => 1, 'l26' => 1,
            'j27' => 1, 'k27' => 1, 'l27' => 2,
            'j28' => 1, 'k28' => 1, 'l28' => 1,
            'j29' => 1, 'k29' => 1, 'l29' => 2,
            'j30' => 1, 'k30' => 1, 'l30' => 2,
            'j31' => 1, 'k31' => 1, 'l31' => 2,
            'j32' => 1, 'k32' => 1, 'l32' => 1,
            'j33' => 1, 'k33' => 1, 'l33' => 1,
        );

        $this->slide1 = array_merge($this->slide1, $table);


        $this->slide1['a52'] = 'Абдоминальная хирургия';
        $this->slide1['a53'] = 'Акушерство';
        $this->slide1['a54'] = 'Андрология ';
        $this->slide1['a55'] = 'Гастроэнтерология';
        $this->slide1['a56'] = 'Гинекология';
        $this->slide1['a57'] = 'Гнойная хирургия';
        $this->slide1['a58'] = 'Кардиохирургия';
        $this->slide1['a59'] = 'Колопроктология';
        $this->slide1['a60'] = 'ЛОР';
        $this->slide1['a61'] = 'Нейрохирургия';
        $this->slide1['a62'] = 'Общая хирургия';
        $this->slide1['a63'] = 'Офтальмология';
        $this->slide1['a64'] = 'Сердечно-сосудистая хирургия';
        $this->slide1['a65'] = 'Стоматология';
        $this->slide1['a66'] = 'Торакальная хирургия';
        $this->slide1['a67'] = 'Травматология и ортопедия';
        $this->slide1['a68'] = 'Трансплантология';
        $this->slide1['a69'] = 'Урология';
        $this->slide1['a70'] = 'Челюстно-лицевая хирургия';
        $this->slide1['a71'] = 'Эндокринология';
        $this->slide1['a72'] = 'Эндоскопия';

        $this->slide1['b52'] = 1;
        $this->slide1['b53'] = 5;
        $this->slide1['b54'] = 1;
        $this->slide1['b55'] = 1;
        $this->slide1['b56'] = 1;
        $this->slide1['b57'] = 1;
        $this->slide1['b58'] = 2;
        $this->slide1['b59'] = 6;
        $this->slide1['b60'] = 3;
        $this->slide1['b61'] = 3;
        $this->slide1['b62'] = 1;
        $this->slide1['b63'] = 3;
        $this->slide1['b64'] = 2;
        $this->slide1['b65'] = 4;
        $this->slide1['b66'] = 2;
        $this->slide1['b67'] = 4;
        $this->slide1['b68'] = 6;
        $this->slide1['b69'] = 1;
        $this->slide1['b70'] = 3;
        $this->slide1['b71'] = 1;
        $this->slide1['b72'] = 1;


        $this->slide1['a36'] = $this->slide1['a5'];
        $this->slide1['a37'] = $this->slide1['a6'];
        $this->slide1['a38'] = $this->slide1['a7'];
        $this->slide1['a39'] = $this->slide1['a8'];
        $this->slide1['a40'] = $this->slide1['a9'];
        $this->slide1['a41'] = $this->slide1['a10'];
        $this->slide1['a42'] = $this->slide1['a11'];
        $this->slide1['a43'] = $this->slide1['a12'];
        $this->slide1['a44'] = $this->slide1['a13'];
        $this->slide1['a45'] = $this->slide1['a14'];
        $this->slide1['a46'] = $this->slide1['a15'];
        $this->slide1['a47'] = $this->slide1['a16'];

        $key = 4;
        for ($i = 36 ; $i <= 47 ; $i ++ ){
            $key ++;
            switch ($this->slide1['a'.$i]){
                case $this->slide1['a52']: $this->slide1['b'.$i] = $this->slide1['b'.$key]*$this->slide1['c22']*$this->slide1['j22']+$this->slide1['b'.$key]*$this->slide1['e22']*$this->slide1['k22']+$this->slide1['b'.$key]*$this->slide1['g22']*$this->slide1['l22']; break;
                case $this->slide1['a53']: $this->slide1['b'.$i] = $this->slide1['b'.$key]*$this->slide1['c32']*$this->slide1['j32']+$this->slide1['b'.$key]*$this->slide1['e32']*$this->slide1['k32']+$this->slide1['b'.$key]*$this->slide1['g32']*$this->slide1['l32']; break;
                case $this->slide1['a54']: $this->slide1['b'.$i] = $this->slide1['b'.$key]*$this->slide1['c26']*$this->slide1['j26']+$this->slide1['b'.$key]*$this->slide1['e26']*$this->slide1['k26']+$this->slide1['b'.$key]*$this->slide1['g26']*$this->slide1['l26']; break;
                case $this->slide1['a55']: $this->slide1['b'.$i] = $this->slide1['b'.$key]*$this->slide1['c22']*$this->slide1['j22']+$this->slide1['b'.$key]*$this->slide1['e22']*$this->slide1['k22']+$this->slide1['b'.$key]*$this->slide1['g22']*$this->slide1['l22']; break;
                case $this->slide1['a56']: $this->slide1['b'.$i] = $this->slide1['b'.$key]*$this->slide1['c23']*$this->slide1['j23']+$this->slide1['b'.$key]*$this->slide1['e23']*$this->slide1['k23']+$this->slide1['b'.$key]*$this->slide1['g23']*$this->slide1['l23']; break;
                case $this->slide1['a57']: $this->slide1['b'.$i] = $this->slide1['b'.$key]*$this->slide1['c24']*$this->slide1['j24']+$this->slide1['b'.$key]*$this->slide1['e24']*$this->slide1['k24']+$this->slide1['b'.$key]*$this->slide1['g24']*$this->slide1['l24']; break;
                case $this->slide1['a58']: $this->slide1['b'.$i] = $this->slide1['b'.$key]*$this->slide1['c27']*$this->slide1['j27']+$this->slide1['b'.$key]*$this->slide1['e27']*$this->slide1['k27']+$this->slide1['b'.$key]*$this->slide1['g27']*$this->slide1['l27']; break;
                case $this->slide1['a59']: $this->slide1['b'.$i] = $this->slide1['b'.$key]*$this->slide1['c33']*$this->slide1['j33']+$this->slide1['b'.$key]*$this->slide1['e33']*$this->slide1['k33']+$this->slide1['b'.$key]*$this->slide1['g33']*$this->slide1['l33']; break;
                case $this->slide1['a60']: $this->slide1['b'.$i] = $this->slide1['b'.$key]*$this->slide1['c28']*$this->slide1['j28']+$this->slide1['b'.$key]*$this->slide1['e28']*$this->slide1['k28']+$this->slide1['b'.$key]*$this->slide1['g28']*$this->slide1['l28']; break;
                case $this->slide1['a61']: $this->slide1['b'.$i] = $this->slide1['b'.$key]*$this->slide1['c29']*$this->slide1['j29']+$this->slide1['b'.$key]*$this->slide1['e29']*$this->slide1['k29']+$this->slide1['b'.$key]*$this->slide1['g29']*$this->slide1['l29']; break;
                case $this->slide1['a62']: $this->slide1['b'.$i] = $this->slide1['b'.$key]*$this->slide1['c25']*$this->slide1['j25']+$this->slide1['b'.$key]*$this->slide1['e25']*$this->slide1['k25']+$this->slide1['b'.$key]*$this->slide1['g25']*$this->slide1['l25']; break;
                case $this->slide1['a63']: $this->slide1['b'.$i] = $this->slide1['b'.$key]*$this->slide1['c30']*$this->slide1['j30']+$this->slide1['b'.$key]*$this->slide1['e30']*$this->slide1['k30']+$this->slide1['b'.$key]*$this->slide1['g30']*$this->slide1['l30']; break;
                case $this->slide1['a64']: $this->slide1['b'.$i] = $this->slide1['b'.$key]*$this->slide1['c27']*$this->slide1['j27']+$this->slide1['b'.$key]*$this->slide1['e27']*$this->slide1['k27']+$this->slide1['b'.$key]*$this->slide1['g27']*$this->slide1['l27']; break;
                case $this->slide1['a65']: $this->slide1['b'.$i] = $this->slide1['b'.$key]*$this->slide1['c31']*$this->slide1['j31']+$this->slide1['b'.$key]*$this->slide1['e31']*$this->slide1['k31']+$this->slide1['b'.$key]*$this->slide1['g31']*$this->slide1['l31']; break;
                case $this->slide1['a66']: $this->slide1['b'.$i] = $this->slide1['b'.$key]*$this->slide1['c27']*$this->slide1['j27']+$this->slide1['b'.$key]*$this->slide1['e27']*$this->slide1['k27']+$this->slide1['b'.$key]*$this->slide1['g27']*$this->slide1['l27']; break;
                case $this->slide1['a67']: $this->slide1['b'.$i] = $this->slide1['b'.$key]*$this->slide1['c31']*$this->slide1['j31']+$this->slide1['b'.$key]*$this->slide1['e31']*$this->slide1['k31']+$this->slide1['b'.$key]*$this->slide1['g31']*$this->slide1['l31']; break;
                case $this->slide1['a68']: $this->slide1['b'.$i] = $this->slide1['b'.$key]*$this->slide1['c33']*$this->slide1['j33']+$this->slide1['b'.$key]*$this->slide1['e33']*$this->slide1['k33']+$this->slide1['b'.$key]*$this->slide1['g33']*$this->slide1['l33']; break;
                case $this->slide1['a69']: $this->slide1['b'.$i] = $this->slide1['b'.$key]*$this->slide1['c26']*$this->slide1['j26']+$this->slide1['b'.$key]*$this->slide1['e26']*$this->slide1['k26']+$this->slide1['b'.$key]*$this->slide1['g26']*$this->slide1['l26']; break;
                case $this->slide1['a70']: $this->slide1['b'.$i] = $this->slide1['b'.$key]*$this->slide1['c28']*$this->slide1['j28']+$this->slide1['b'.$key]*$this->slide1['e28']*$this->slide1['k28']+$this->slide1['b'.$key]*$this->slide1['g28']*$this->slide1['l28']; break;
                case $this->slide1['a71']: $this->slide1['b'.$i] = $this->slide1['b'.$key]*$this->slide1['c25']*$this->slide1['j25']+$this->slide1['b'.$key]*$this->slide1['e25']*$this->slide1['k25']+$this->slide1['b'.$key]*$this->slide1['g25']*$this->slide1['l25']; break;
                case $this->slide1['a72']: $this->slide1['b'.$i] = $this->slide1['b'.$key]*$this->slide1['c25']*$this->slide1['j25']+$this->slide1['b'.$key]*$this->slide1['e25']*$this->slide1['k25']+$this->slide1['b'.$key]*$this->slide1['g25']*$this->slide1['l25']; break;
                default: $this->slide1['b'.$i] = 0;
            }
        }

        $this->slide1['b36'] = round($this->slide1['b36']);

        return $this->slide1;
    }

    public function slide2(){

        if ($this->slide1 === null){
            $this->slide1();
        }

        $this->slide2['b1'] = 2;
        $this->slide2['b2'] = 1;

        $this->slide2['b45'] = 0.0291;
        $this->slide2['b46'] = 0.0401;
        $this->slide2['b47'] = 0.0819;

        $this->slide2['c45'] = 0.0316;
        $this->slide2['c46'] = 0.0326;
        $this->slide2['c47'] = 0.0831;

        $this->slide2['e45'] = $this->slide2['b45']*10;
        $this->slide2['e46'] = $this->slide2['b46']*10;
        $this->slide2['e47'] = $this->slide2['b47']*10;

        $this->slide2['f45'] = $this->slide2['c45']*5;
        $this->slide2['f46'] = $this->slide2['c46']*5;
        $this->slide2['f47'] = $this->slide2['c47']*5;

        $this->slide2['b50'] = 0.0138;
        $this->slide2['b51'] = 0.0328;
        $this->slide2['b52'] = 0.0231;

        $this->slide2['c50'] = $this->slide2['b50']*$this->slide1['b2'];
        $this->slide2['c51'] = $this->slide2['b51']*$this->slide1['b2'];
        $this->slide2['c52'] = $this->slide2['b52']*$this->slide1['b2'];

        $this->slide2['b55'] = 0.0869;
        $this->slide2['b56'] = 0.06;

        $this->slide2['q45'] = 0.5;
        $this->slide2['q46'] = 0.5;
        $this->slide2['q47'] = 0.5;
        $this->slide2['q48'] = 0.26;
        $this->slide2['q49'] = 0.15;
        $this->slide2['q50'] = 0.8;
        $this->slide2['q51'] = 0.2;

        $this->slide2['r46'] = 0.1;

        $this->slide2['s46'] = 2;


        $key = 35;
        $keySlide1 = 4;
        for ($i = 3; $i <= 36; $i +=3 ) {
            $key++;
            $keySlide1++;
            $this->slide2['a' . $i] = $this->slide1['a' . $key];
            $this->slide2['b' . $i] = $this->slide1['a' . $key];
            switch ($this->slide2['a' . $i]) {
                case $this->slide1['a52']:
                    $this->slide2['b' . $i] = $this->slide1['b52'];
                    break;
                case $this->slide1['a53']:
                    $this->slide2['b' . $i] = $this->slide1['b53'];
                    break;
                case $this->slide1['a54']:
                    $this->slide2['b' . $i] = $this->slide1['b54'];
                    break;
                case $this->slide1['a55']:
                    $this->slide2['b' . $i] = $this->slide1['b55'];
                    break;
                case $this->slide1['a56']:
                    $this->slide2['b' . $i] = $this->slide1['b56'];
                    break;
                case $this->slide1['a57']:
                    $this->slide2['b' . $i] = $this->slide1['b57'];
                    break;
                case $this->slide1['a58']:
                    $this->slide2['b' . $i] = $this->slide1['b58'];
                    break;
                case $this->slide1['a59']:
                    $this->slide2['b' . $i] = $this->slide1['b59'];
                    break;
                case $this->slide1['a60']:
                    $this->slide2['b' . $i] = $this->slide1['b60'];
                    break;
                case $this->slide1['a61']:
                    $this->slide2['b' . $i] = $this->slide1['b61'];
                    break;
                case $this->slide1['a62']:
                    $this->slide2['b' . $i] = $this->slide1['b62'];
                    break;
                case $this->slide1['a63']:
                    $this->slide2['b' . $i] = $this->slide1['b63'];
                    break;
                case $this->slide1['a64']:
                    $this->slide2['b' . $i] = $this->slide1['b64'];
                    break;
                case $this->slide1['a65']:
                    $this->slide2['b' . $i] = $this->slide1['b65'];
                    break;
                case $this->slide1['a66']:
                    $this->slide2['b' . $i] = $this->slide1['b66'];
                    break;
                case $this->slide1['a67']:
                    $this->slide2['b' . $i] = $this->slide1['b67'];
                    break;
                case $this->slide1['a68']:
                    $this->slide2['b' . $i] = $this->slide1['b68'];
                    break;
                case $this->slide1['a69']:
                    $this->slide2['b' . $i] = $this->slide1['b69'];
                    break;
                case $this->slide1['a70']:
                    $this->slide2['b' . $i] = $this->slide1['b70'];
                    break;
                case $this->slide1['a71']:
                    $this->slide2['b' . $i] = $this->slide1['b71'];
                    break;
                case $this->slide1['a72']:
                    $this->slide2['b' . $i] = $this->slide1['b72'];
                    break;
                default:
                    $this->slide2['a' . $i] = 0;
            }

            // Строка "Хирурги"
            $this->slide2['b' . ($i + 1)] = $this->slide1['b' . $keySlide1] * $this->slide2['b1'];
            $this->slide2['c' . ($i + 1)] = $this->slide2['b' . ($i + 1)] * $this->slide2['b45'] + $this->slide2['b' . ($i + 1)] * $this->slide2['b46'];
            $this->slide2['d' . ($i + 1)] = $this->slide2['b' . ($i + 1)] * $this->slide2['b50'] + $this->slide2['b' . ($i + 1)] * $this->slide2['b51'] + $this->slide2['b' . ($i + 1)] * $this->slide2['b52'];
            $this->slide2['e' . ($i + 1)] = $this->slide2['b' . ($i + 1)] * ($this->slide2['b45'] + $this->slide2['b46']) * ($this->slide2['b50'] + $this->slide2['b51'] + $this->slide2['b52']);
            $this->slide2['f' . ($i + 1)] = $this->slide2['d' . ($i + 1)] - $this->slide2['e' . ($i + 1)];
            $this->slide2['g' . ($i + 1)] = $this->slide2['c' . ($i + 1)] - $this->slide2['e' . ($i + 1)];
            $this->slide2['h' . ($i + 1)] = $this->slide2['b' . ($i + 1)] * $this->slide2['b55'] + $this->slide2['b' . ($i + 1)] * $this->slide2['b56'];
            $this->slide2['i' . ($i + 1)] = $this->slide2['b' . ($i + 1)] * ($this->slide2['b45'] + $this->slide2['b46']) * ($this->slide2['b55'] + $this->slide2['b56']);
            $this->slide2['j' . ($i + 1)] = $this->slide2['h' . ($i + 1)] - $this->slide2['i' . ($i + 1)];
            $this->slide2['k' . ($i + 1)] = $this->slide2['c' . ($i + 1)] - $this->slide2['i' . ($i + 1)];
            $this->slide2['l' . ($i + 1)] = $this->slide2['c' . ($i + 1)] - $this->slide2['e' . ($i + 1)] - $this->slide2['i' . ($i + 1)];
            $this->slide2['m' . ($i + 1)] = $this->slide2['b' . ($i + 1)] - $this->slide2['c' . ($i + 1)];
            $this->slide2['n' . ($i + 1)] = $this->slide2['b' . ($i + 1)] - $this->slide2['d' . ($i + 1)];
            $this->slide2['o' . ($i + 1)] = $this->slide2['b' . ($i + 1)] - $this->slide2['h' . ($i + 1)];
            $this->slide2['p' . ($i + 1)] = $this->slide2['b' . ($i + 1)] - $this->slide2['e' . ($i + 1)] - $this->slide2['f' . ($i + 1)] - $this->slide2['g' . ($i + 1)];
            $this->slide2['q' . ($i + 1)] = $this->slide2['b' . ($i + 1)] - $this->slide2['i' . ($i + 1)] - $this->slide2['j' . ($i + 1)] - $this->slide2['k' . ($i + 1)];
            $this->slide2['r' . ($i + 1)] = $this->slide2['b' . ($i + 1)] - $this->slide2['d' . ($i + 1)] - $this->slide2['h' . ($i + 1)];
            $this->slide2['s' . ($i + 1)] = $this->slide2['b' . ($i + 1)] - $this->slide2['e' . ($i + 1)] - $this->slide2['f' . ($i + 1)] - $this->slide2['i' . ($i + 1)] - $this->slide2['j' . ($i + 1)] - $this->slide2['l' . ($i + 1)];

            $this->slide2['t' . ($i + 1)] = ($this->slide2['b' . $i] === 5 ? $this->slide2['b' . ($i + 1)] * $this->slide2['q45'] : 0);
            $this->slide2['u' . ($i + 1)] = ($this->slide2['b' . $i] === 5 ? $this->slide2['m' . ($i + 1)] * $this->slide2['q45'] : 0);
            $this->slide2['v' . ($i + 1)] = ($this->slide2['b' . $i] === 5 ? $this->slide2['n' . ($i + 1)] * $this->slide2['q45'] : 0);
            $this->slide2['w' . ($i + 1)] = ($this->slide2['b' . $i] === 5 ? $this->slide2['o' . ($i + 1)] * $this->slide2['q45'] : 0);
            $this->slide2['x' . ($i + 1)] = ($this->slide2['b' . $i] === 5 ? $this->slide2['p' . ($i + 1)] * $this->slide2['q45'] : 0);
            $this->slide2['y' . ($i + 1)] = ($this->slide2['b' . $i] === 5 ? $this->slide2['q' . ($i + 1)] * $this->slide2['q45'] : 0);
            $this->slide2['z' . ($i + 1)] = ($this->slide2['b' . $i] === 5 ? $this->slide2['r' . ($i + 1)] * $this->slide2['q45'] : 0);
            $this->slide2['aa' . ($i + 1)] = ($this->slide2['b' . $i] === 5 ? $this->slide2['s' . ($i + 1)] * $this->slide2['q45'] : 0);

            $this->slide2['ab' . ($i + 1)] = ($this->slide2['b' . $i] === 2 ? $this->slide2['b' . ($i + 1)] * $this->slide2['r46'] : ($this->slide2['b' . $i] === 4 ? $this->slide2['b' . ($i + 1)] * $this->slide2['q46'] : 0));
            $this->slide2['ac' . ($i + 1)] = ($this->slide2['b' . $i] === 2 ? $this->slide2['m' . ($i + 1)] * $this->slide2['r46'] : ($this->slide2['b' . $i] === 4 ? $this->slide2['m' . ($i + 1)] * $this->slide2['q46'] : 0));
            $this->slide2['ad' . ($i + 1)] = ($this->slide2['b' . $i] === 2 ? $this->slide2['n' . ($i + 1)] * $this->slide2['r46'] : ($this->slide2['b' . $i] === 4 ? $this->slide2['n' . ($i + 1)] * $this->slide2['q46'] : 0));
            $this->slide2['ae' . ($i + 1)] = ($this->slide2['b' . $i] === 2 ? $this->slide2['o' . ($i + 1)] * $this->slide2['r46'] : ($this->slide2['b' . $i] === 4 ? $this->slide2['o' . ($i + 1)] * $this->slide2['q46'] : 0));
            $this->slide2['af' . ($i + 1)] = ($this->slide2['b' . $i] === 2 ? $this->slide2['p' . ($i + 1)] * $this->slide2['r46'] : ($this->slide2['b' . $i] === 4 ? $this->slide2['p' . ($i + 1)] * $this->slide2['q46'] : 0));
            $this->slide2['ag' . ($i + 1)] = ($this->slide2['b' . $i] === 2 ? $this->slide2['q' . ($i + 1)] * $this->slide2['r46'] : ($this->slide2['b' . $i] === 4 ? $this->slide2['q' . ($i + 1)] * $this->slide2['q46'] : 0));
            $this->slide2['ah' . ($i + 1)] = ($this->slide2['b' . $i] === 2 ? $this->slide2['r' . ($i + 1)] * $this->slide2['r46'] : ($this->slide2['b' . $i] === 4 ? $this->slide2['r' . ($i + 1)] * $this->slide2['q46'] : 0));
            $this->slide2['ai' . ($i + 1)] = ($this->slide2['b' . $i] === 2 ? $this->slide2['s' . ($i + 1)] * $this->slide2['r46'] : ($this->slide2['b' . $i] === 4 ? $this->slide2['s' . ($i + 1)] * $this->slide2['q46'] : 0));

            $this->slide2['aj' . ($i + 1)] = ($this->slide2['b' . $i] === 2 || $this->slide2['b' . $i] === 3 || $this->slide2['b' . $i] === 6 ? $this->slide2['b' . ($i + 1)] * $this->slide2['q47'] : 0);
            $this->slide2['ak' . ($i + 1)] = ($this->slide2['b' . $i] === 2 || $this->slide2['b' . $i] === 3 || $this->slide2['b' . $i] === 6 ? $this->slide2['m' . ($i + 1)] * $this->slide2['q47'] : 0);
            $this->slide2['al' . ($i + 1)] = ($this->slide2['b' . $i] === 2 || $this->slide2['b' . $i] === 3 || $this->slide2['b' . $i] === 6 ? $this->slide2['n' . ($i + 1)] * $this->slide2['q47'] : 0);
            $this->slide2['am' . ($i + 1)] = ($this->slide2['b' . $i] === 2 || $this->slide2['b' . $i] === 3 || $this->slide2['b' . $i] === 6 ? $this->slide2['o' . ($i + 1)] * $this->slide2['q47'] : 0);
            $this->slide2['an' . ($i + 1)] = ($this->slide2['b' . $i] === 2 || $this->slide2['b' . $i] === 3 || $this->slide2['b' . $i] === 6 ? $this->slide2['p' . ($i + 1)] * $this->slide2['q47'] : 0);
            $this->slide2['ao' . ($i + 1)] = ($this->slide2['b' . $i] === 2 || $this->slide2['b' . $i] === 3 || $this->slide2['b' . $i] === 6 ? $this->slide2['q' . ($i + 1)] * $this->slide2['q47'] : 0);
            $this->slide2['ap' . ($i + 1)] = ($this->slide2['b' . $i] === 2 || $this->slide2['b' . $i] === 3 || $this->slide2['b' . $i] === 6 ? $this->slide2['r' . ($i + 1)] * $this->slide2['q47'] : 0);
            $this->slide2['aq' . ($i + 1)] = ($this->slide2['b' . $i] === 2 || $this->slide2['b' . $i] === 3 || $this->slide2['b' . $i] === 6 ? $this->slide2['s' . ($i + 1)] * $this->slide2['q47'] : 0);

            $this->slide2['ar' . ($i + 1)] = ($this->slide2['b' . $i] === 6 ? $this->slide2['b' . ($i + 1)] * $this->slide2['q48'] : 0);
            $this->slide2['as' . ($i + 1)] = ($this->slide2['b' . $i] === 6 ? $this->slide2['m' . ($i + 1)] * $this->slide2['q48'] : 0);
            $this->slide2['at' . ($i + 1)] = ($this->slide2['b' . $i] === 6 ? $this->slide2['n' . ($i + 1)] * $this->slide2['q48'] : 0);
            $this->slide2['au' . ($i + 1)] = ($this->slide2['b' . $i] === 6 ? $this->slide2['o' . ($i + 1)] * $this->slide2['q48'] : 0);
            $this->slide2['av' . ($i + 1)] = ($this->slide2['b' . $i] === 6 ? $this->slide2['p' . ($i + 1)] * $this->slide2['q48'] : 0);
            $this->slide2['aw' . ($i + 1)] = ($this->slide2['b' . $i] === 6 ? $this->slide2['q' . ($i + 1)] * $this->slide2['q48'] : 0);
            $this->slide2['ax' . ($i + 1)] = ($this->slide2['b' . $i] === 6 ? $this->slide2['r' . ($i + 1)] * $this->slide2['q48'] : 0);
            $this->slide2['ay' . ($i + 1)] = ($this->slide2['b' . $i] === 6 ? $this->slide2['s' . ($i + 1)] * $this->slide2['q48'] : 0);

            $this->slide2['az'.($i+1)] = $this->slide2['b'.($i + 1)] * $this->slide2['q49'];
            $this->slide2['ba'.($i+1)] = $this->slide2['m'.($i + 1)] * $this->slide2['q49'];
            $this->slide2['bb'.($i+1)] = $this->slide2['n'.($i + 1)] * $this->slide2['q49'];
            $this->slide2['bc'.($i+1)] = $this->slide2['o'.($i + 1)] * $this->slide2['q49'];
            $this->slide2['bd'.($i+1)] = $this->slide2['p'.($i + 1)] * $this->slide2['q49'];
            $this->slide2['be'.($i+1)] = $this->slide2['q'.($i + 1)] * $this->slide2['q49'];
            $this->slide2['bf'.($i+1)] = $this->slide2['r'.($i + 1)] * $this->slide2['q49'];
            $this->slide2['bg'.($i+1)] = $this->slide2['s'.($i + 1)] * $this->slide2['q49'];

            $this->slide2['bi'.($i+1)] = $this->slide2['b'.($i + 1)] * $this->slide2['b47'];

            $this->slide2['bl'.($i+1)] = $this->slide2['b'.($i + 1)] * $this->slide2['b47'] - $this->slide2['b'.($i + 1)] * $this->slide2['b47'] * ($this->slide2['b50'] + $this->slide2['b51'] + $this->slide2['b52']);
            $this->slide2['bm'.($i+1)] = $this->slide2['b'.($i + 1)] * $this->slide2['b47'] - $this->slide2['b'.($i + 1)] * $this->slide2['b47'] * ($this->slide2['b55'] + $this->slide2['b56']);

            $this->slide2['bo'.($i+1)] = $this->slide2['b'.($i + 1)] * $this->slide2['b47'] - $this->slide2['b'.($i + 1)] * $this->slide2['b47'] * ($this->slide2['b55'] + $this->slide2['b56']) - $this->slide2['b'.($i + 1)] * $this->slide2['b47'] * ($this->slide2['b50'] + $this->slide2['b51'] + $this->slide2['b52']);

//          Строка ом/с
            $this->slide2['b' . ($i + 2)] = $this->slide1['b' . $keySlide1] * $this->slide2['b2'];
            $this->slide2['c' . ($i + 2)] = $this->slide2['b' . ($i + 2)] * $this->slide2['c45'] + $this->slide2['b' . ($i + 2)] * $this->slide2['c46'];
            $this->slide2['d' . ($i + 2)] = $this->slide2['b' . ($i + 2)] * $this->slide2['b50'] + $this->slide2['b' . ($i + 2)] * $this->slide2['b51'] + $this->slide2['b' . ($i + 2)] * $this->slide2['b52'];
            $this->slide2['e' . ($i + 2)] = $this->slide2['b' . ($i + 2)] * ($this->slide2['c45'] + $this->slide2['c46']) * ($this->slide2['b50'] + $this->slide2['b51'] + $this->slide2['b52']);
            $this->slide2['f' . ($i + 2)] = $this->slide2['d' . ($i + 2)] - $this->slide2['e' . ($i + 2)];
            $this->slide2['g' . ($i + 2)] = $this->slide2['c' . ($i + 2)] - $this->slide2['e' . ($i + 2)];

            $this->slide2['k' . ($i + 2)] = $this->slide2['c' . ($i + 2)] - $this->slide2['i' . ($i + 2)];
            $this->slide2['l' . ($i + 2)] = $this->slide2['c' . ($i + 2)] - $this->slide2['e' . ($i + 2)] - $this->slide2['i' . ($i + 1)];
            $this->slide2['m' . ($i + 2)] = $this->slide2['b' . ($i + 2)] - $this->slide2['c' . ($i + 2)];
            $this->slide2['n' . ($i + 2)] = $this->slide2['b' . ($i + 2)] - $this->slide2['d' . ($i + 2)];

            $this->slide2['p' . ($i + 2)] = $this->slide2['b' . ($i + 2)] - $this->slide2['e' . ($i + 2)] - $this->slide2['f' . ($i + 2)] - $this->slide2['g' . ($i + 2)];
            $this->slide2['q' . ($i + 2)] = $this->slide2['b' . ($i + 2)] - $this->slide2['k' . ($i + 2)];
            $this->slide2['r' . ($i + 2)] = $this->slide2['b' . ($i + 2)] - $this->slide2['d' . ($i + 2)];
            $this->slide2['s' . ($i + 2)] = $this->slide2['b' . ($i + 2)] - $this->slide2['e' . ($i + 2)] - $this->slide2['f' . ($i + 2)] - $this->slide2['l' . ($i + 2)];

            $this->slide2['bi' . ($i + 2)] = $this->slide2['b' . ($i + 2)] * $this->slide2['c47'];
            $this->slide2['bl' . ($i + 2)] = $this->slide2['b' . ($i + 2)] * $this->slide2['c47'] * $this->slide2['b' . ($i + 2)] * $this->slide2['c47'] * ( $this->slide2['b50'] + $this->slide2['b51'] + $this->slide2['b52'] );
            $this->slide2['bm' . ($i + 2)] = $this->slide2['b' . ($i + 2)] * $this->slide2['c47'];
            $this->slide2['bo' . ($i + 2)] = $this->slide2['b' . ($i + 2)] * $this->slide2['c47'] - $this->slide2['b' . ($i + 2)] * $this->slide2['c47'] * ( $this->slide2['b50'] + $this->slide2['b51'] + $this->slide2['b52'] );


        }

//        Пересчет итого
        for ($i = 1 ; $i <= 67 ; $i++){
            $char = $this->intToChar($i);
            $this->slide2[$char.'40'] = 0;
            $this->slide2[$char.'41'] = 0;
            for ($j = 3; $j<=36 ; $j +=3 ){
                $this->slide2[$char.'40'] += ( $this->slide2[$char.($j+1)] ? $this->slide2[$char.($j+1)] : 0 );
                $this->slide2[$char.'41'] += ( $this->slide2[$char.($j+2)] ? $this->slide2[$char.($j+2)] : 0 );
            }
        }

//        echo '<pre>';
//        print_r($this->slide2);
//        echo '</pre>';
        return $this->slide2;

    }


    public function intToChar($number){
        $chars = array(
            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'aa', 'ab', 'ac', 'ad', 'ae', 'af', 'ag', 'ah', 'ai', 'aj', 'ak', 'al', 'am', 'an', 'ao', 'ap', 'aq', 'ar', 'as', 'at', 'au', 'av', 'aw', 'ax', 'ay', 'az', 'ba', 'bb', 'bc', 'bd', 'be', 'bf', 'bg', 'bh', 'bi', 'bj', 'bk', 'bl', 'bm', 'bn', 'bo', 'bp', 'bq', 'br', 'bs', 'bt', 'bu', 'bv', 'bw', 'bx', 'by', 'bz'
        );
        return $chars[$number];
    }


}