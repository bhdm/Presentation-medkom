<?php
/**
 * Created by PhpStorm.
 * User: maxim
 * Date: 22.10.16
 * Time: 23:04
 */
class DurationClass
{
    protected $slide1;

    protected $slide2;

    protected $slide3;

    public function __construct()
    {
        $volume = new VolumeClass();
        $this->slide1  = $volume->slide1();
        $this->slide2  = $volume->slide2();
    }

    public function slide1(){
        return $this->slide1;
    }

    public function slide2(){
        return $this->slide2;
    }

    public function slide3(){
        $this->slide3['b1'] = 2;
        $this->slide3['b2'] = 1;

        $this->slide3['b45'] = 0.0291;
        $this->slide3['b46'] = 0.0401;
        $this->slide3['b47'] = 0.0819;

        $this->slide3['c45'] = 0.0316;
        $this->slide3['c46'] = 0.0326;
        $this->slide3['c47'] = 0.0831;


        $this->slide3['b50'] = 0.0138;
        $this->slide3['b51'] = 0.0328;
        $this->slide3['b52'] = 0.0231;

        $this->slide3['b55'] = 0.0869;
        $this->slide3['b56'] = 0.06;

        $this->slide3['q45'] = 0.5;
        $this->slide3['q46'] = 0.5;
        $this->slide3['q47'] = 0.5;
        $this->slide3['q48'] = 0.26;
        $this->slide3['q49'] = 0.15;
        $this->slide3['q50'] = 0.8;
        $this->slide3['q51'] = 0.2;

        $this->slide3['r46'] = 0.1;

        $this->slide3['s46'] = 2;

        $key = 35;
        $keySlide1 = 4;
        for ($i = 3; $i <= 36; $i +=3 ) {
            $key++;
            $keySlide1++;
            $this->slide2['a' . $i] = $this->slide1['a' . $key];
            $this->slide2['b' . $i] = $this->slide1['a' . $key];
            switch ($this->slide1['a' . $i]) {
                case $this->slide1['a52']:
                    $this->slide3['b' . $i] = $this->slide1['b52'];
                    break;
                case $this->slide1['a53']:
                    $this->slide3['b' . $i] = $this->slide1['b53'];
                    break;
                case $this->slide1['a54']:
                    $this->slide3['b' . $i] = $this->slide1['b54'];
                    break;
                case $this->slide1['a55']:
                    $this->slide3['b' . $i] = $this->slide1['b55'];
                    break;
                case $this->slide1['a56']:
                    $this->slide3['b' . $i] = $this->slide1['b56'];
                    break;
                case $this->slide1['a57']:
                    $this->slide3['b' . $i] = $this->slide1['b57'];
                    break;
                case $this->slide1['a58']:
                    $this->slide3['b' . $i] = $this->slide1['b58'];
                    break;
                case $this->slide1['a59']:
                    $this->slide3['b' . $i] = $this->slide1['b59'];
                    break;
                case $this->slide1['a60']:
                    $this->slide3['b' . $i] = $this->slide1['b60'];
                    break;
                case $this->slide1['a61']:
                    $this->slide3['b' . $i] = $this->slide1['b61'];
                    break;
                case $this->slide1['a62']:
                    $this->slide3['b' . $i] = $this->slide1['b62'];
                    break;
                case $this->slide1['a63']:
                    $this->slide3['b' . $i] = $this->slide1['b63'];
                    break;
                case $this->slide1['a64']:
                    $this->slide3['b' . $i] = $this->slide1['b64'];
                    break;
                case $this->slide1['a65']:
                    $this->slide3['b' . $i] = $this->slide1['b65'];
                    break;
                case $this->slide1['a66']:
                    $this->slide3['b' . $i] = $this->slide1['b66'];
                    break;
                case $this->slide1['a67']:
                    $this->slide3['b' . $i] = $this->slide1['b67'];
                    break;
                case $this->slide1['a68']:
                    $this->slide3['b' . $i] = $this->slide1['b68'];
                    break;
                case $this->slide1['a69']:
                    $this->slide3['b' . $i] = $this->slide1['b69'];
                    break;
                case $this->slide1['a70']:
                    $this->slide3['b' . $i] = $this->slide1['b70'];
                    break;
                case $this->slide1['a71']:
                    $this->slide3['b' . $i] = $this->slide1['b71'];
                    break;
                case $this->slide1['a72']:
                    $this->slide3['b' . $i] = $this->slide1['b72'];
                    break;
                default:
                    $this->slide3['a' . $i] = 0;
            }

            // Строка "Хирурги"
            $this->slide3['b' . ($i + 1)] = $this->slide1['b' . $key] * $this->slide3['b1'];
            $this->slide3['c' . ($i + 1)] = $this->slide3['b' . ($i + 1)] * $this->slide3['b45'] + $this->slide3['b' . ($i + 1)] * $this->slide3['b46'];
            $this->slide3['d' . ($i + 1)] = $this->slide3['b' . ($i + 1)] * $this->slide3['b50'] + $this->slide3['b' . ($i + 1)] * $this->slide3['b51'] + $this->slide3['b' . ($i + 1)] * $this->slide3['b52'];
            $this->slide3['e' . ($i + 1)] = $this->slide3['b' . ($i + 1)] * ($this->slide3['b45'] + $this->slide3['b46']) * ($this->slide3['b50'] + $this->slide3['b51'] + $this->slide3['b52']);
            $this->slide3['f' . ($i + 1)] = $this->slide3['d' . ($i + 1)] - $this->slide3['e' . ($i + 1)];
            $this->slide3['g' . ($i + 1)] = $this->slide3['c' . ($i + 1)] - $this->slide3['e' . ($i + 1)];
            $this->slide3['h' . ($i + 1)] = $this->slide3['b' . ($i + 1)] * $this->slide3['b55'] + $this->slide3['b' . ($i + 1)] * $this->slide3['b56'];
            $this->slide3['i' . ($i + 1)] = $this->slide3['b' . ($i + 1)] * ($this->slide3['b45'] + $this->slide3['b46']) * ($this->slide3['b55'] + $this->slide3['b56']);
            $this->slide3['j' . ($i + 1)] = $this->slide3['h' . ($i + 1)] - $this->slide3['i' . ($i + 1)];
            $this->slide3['k' . ($i + 1)] = $this->slide3['c' . ($i + 1)] - $this->slide3['i' . ($i + 1)];
            $this->slide3['l' . ($i + 1)] = $this->slide3['c' . ($i + 1)] - $this->slide3['e' . ($i + 1)] - $this->slide3['i' . ($i + 1)];
            $this->slide3['m' . ($i + 1)] = $this->slide3['b' . ($i + 1)] - $this->slide3['c' . ($i + 1)];
            $this->slide3['n' . ($i + 1)] = $this->slide3['b' . ($i + 1)] - $this->slide3['d' . ($i + 1)];
            $this->slide3['o' . ($i + 1)] = $this->slide3['b' . ($i + 1)] - $this->slide3['h' . ($i + 1)];
            $this->slide3['p' . ($i + 1)] = $this->slide3['b' . ($i + 1)] - $this->slide3['e' . ($i + 1)] - $this->slide3['f' . ($i + 1)] - $this->slide3['g' . ($i + 1)];
            $this->slide3['q' . ($i + 1)] = $this->slide3['b' . ($i + 1)] - $this->slide3['i' . ($i + 1)] - $this->slide3['j' . ($i + 1)] - $this->slide3['k' . ($i + 1)];
            $this->slide3['r' . ($i + 1)] = $this->slide3['b' . ($i + 1)] - $this->slide3['d' . ($i + 1)] - $this->slide3['h' . ($i + 1)];
            $this->slide3['s' . ($i + 1)] = $this->slide3['b' . ($i + 1)] - $this->slide3['e' . ($i + 1)] - $this->slide3['f' . ($i + 1)] - $this->slide3['i' . ($i + 1)] - $this->slide3['j' . ($i + 1)] - $this->slide3['l' . ($i + 1)];

            $this->slide3['t' . ($i + 1)] = ($this->slide3['b' . $i] === 5 ? $this->slide3['b' . ($i + 1)] * $this->slide3['q45'] : 0);
            $this->slide3['u' . ($i + 1)] = ($this->slide3['b' . $i] === 5 ? $this->slide3['m' . ($i + 1)] * $this->slide3['q45'] : 0);
            $this->slide3['v' . ($i + 1)] = ($this->slide3['b' . $i] === 5 ? $this->slide3['n' . ($i + 1)] * $this->slide3['q45'] : 0);
            $this->slide3['w' . ($i + 1)] = ($this->slide3['b' . $i] === 5 ? $this->slide3['o' . ($i + 1)] * $this->slide3['q45'] : 0);
            $this->slide3['x' . ($i + 1)] = ($this->slide3['b' . $i] === 5 ? $this->slide3['p' . ($i + 1)] * $this->slide3['q45'] : 0);
            $this->slide3['y' . ($i + 1)] = ($this->slide3['b' . $i] === 5 ? $this->slide3['q' . ($i + 1)] * $this->slide3['q45'] : 0);
            $this->slide3['z' . ($i + 1)] = ($this->slide3['b' . $i] === 5 ? $this->slide3['r' . ($i + 1)] * $this->slide3['q45'] : 0);
            $this->slide3['aa' . ($i + 1)] = ($this->slide3['b' . $i] === 5 ? $this->slide3['s' . ($i + 1)] * $this->slide3['q45'] : 0);

            $this->slide3['ab' . ($i + 1)] = ($this->slide3['b' . $i] === 2 ? $this->slide3['b' . ($i + 1)] * $this->slide3['r46'] : ($this->slide3['b' . $i] === 4 ? $this->slide3['b' . ($i + 1)] * $this->slide3['q46'] : 0));
            $this->slide3['ac' . ($i + 1)] = ($this->slide3['b' . $i] === 2 ? $this->slide3['m' . ($i + 1)] * $this->slide3['r46'] : ($this->slide3['b' . $i] === 4 ? $this->slide3['m' . ($i + 1)] * $this->slide3['q46'] : 0));
            $this->slide3['ad' . ($i + 1)] = ($this->slide3['b' . $i] === 2 ? $this->slide3['n' . ($i + 1)] * $this->slide3['r46'] : ($this->slide3['b' . $i] === 4 ? $this->slide3['n' . ($i + 1)] * $this->slide3['q46'] : 0));
            $this->slide3['ae' . ($i + 1)] = ($this->slide3['b' . $i] === 2 ? $this->slide3['o' . ($i + 1)] * $this->slide3['r46'] : ($this->slide3['b' . $i] === 4 ? $this->slide3['o' . ($i + 1)] * $this->slide3['q46'] : 0));
            $this->slide3['af' . ($i + 1)] = ($this->slide3['b' . $i] === 2 ? $this->slide3['p' . ($i + 1)] * $this->slide3['r46'] : ($this->slide3['b' . $i] === 4 ? $this->slide3['p' . ($i + 1)] * $this->slide3['q46'] : 0));
            $this->slide3['ag' . ($i + 1)] = ($this->slide3['b' . $i] === 2 ? $this->slide3['q' . ($i + 1)] * $this->slide3['r46'] : ($this->slide3['b' . $i] === 4 ? $this->slide3['q' . ($i + 1)] * $this->slide3['q46'] : 0));
            $this->slide3['ah' . ($i + 1)] = ($this->slide3['b' . $i] === 2 ? $this->slide3['r' . ($i + 1)] * $this->slide3['r46'] : ($this->slide3['b' . $i] === 4 ? $this->slide3['r' . ($i + 1)] * $this->slide3['q46'] : 0));
            $this->slide3['ai' . ($i + 1)] = ($this->slide3['b' . $i] === 2 ? $this->slide3['s' . ($i + 1)] * $this->slide3['r46'] : ($this->slide3['b' . $i] === 4 ? $this->slide3['s' . ($i + 1)] * $this->slide3['q46'] : 0));

            $this->slide3['aj' . ($i + 1)] = ($this->slide3['b' . $i] === 2 || $this->slide3['b' . $i] === 3 || $this->slide3['b' . $i] === 6 ? $this->slide3['b' . ($i + 1)] * $this->slide3['q47'] : 0);
            $this->slide3['ak' . ($i + 1)] = ($this->slide3['b' . $i] === 2 || $this->slide3['b' . $i] === 3 || $this->slide3['b' . $i] === 6 ? $this->slide3['m' . ($i + 1)] * $this->slide3['q47'] : 0);
            $this->slide3['al' . ($i + 1)] = ($this->slide3['b' . $i] === 2 || $this->slide3['b' . $i] === 3 || $this->slide3['b' . $i] === 6 ? $this->slide3['n' . ($i + 1)] * $this->slide3['q47'] : 0);
            $this->slide3['am' . ($i + 1)] = ($this->slide3['b' . $i] === 2 || $this->slide3['b' . $i] === 3 || $this->slide3['b' . $i] === 6 ? $this->slide3['o' . ($i + 1)] * $this->slide3['q47'] : 0);
            $this->slide3['an' . ($i + 1)] = ($this->slide3['b' . $i] === 2 || $this->slide3['b' . $i] === 3 || $this->slide3['b' . $i] === 6 ? $this->slide3['p' . ($i + 1)] * $this->slide3['q47'] : 0);
            $this->slide3['ao' . ($i + 1)] = ($this->slide3['b' . $i] === 2 || $this->slide3['b' . $i] === 3 || $this->slide3['b' . $i] === 6 ? $this->slide3['q' . ($i + 1)] * $this->slide3['q47'] : 0);
            $this->slide3['ap' . ($i + 1)] = ($this->slide3['b' . $i] === 2 || $this->slide3['b' . $i] === 3 || $this->slide3['b' . $i] === 6 ? $this->slide3['r' . ($i + 1)] * $this->slide3['q47'] : 0);
            $this->slide3['aq' . ($i + 1)] = ($this->slide3['b' . $i] === 2 || $this->slide3['b' . $i] === 3 || $this->slide3['b' . $i] === 6 ? $this->slide3['s' . ($i + 1)] * $this->slide3['q47'] : 0);

            $this->slide3['ar' . ($i + 1)] = ($this->slide3['b' . $i] === 6 ? $this->slide3['b' . ($i + 1)] * $this->slide3['q48'] : 0);
            $this->slide3['as' . ($i + 1)] = ($this->slide3['b' . $i] === 6 ? $this->slide3['m' . ($i + 1)] * $this->slide3['q48'] : 0);
            $this->slide3['at' . ($i + 1)] = ($this->slide3['b' . $i] === 6 ? $this->slide3['n' . ($i + 1)] * $this->slide3['q48'] : 0);
            $this->slide3['au' . ($i + 1)] = ($this->slide3['b' . $i] === 6 ? $this->slide3['o' . ($i + 1)] * $this->slide3['q48'] : 0);
            $this->slide3['av' . ($i + 1)] = ($this->slide3['b' . $i] === 6 ? $this->slide3['p' . ($i + 1)] * $this->slide3['q48'] : 0);
            $this->slide3['aw' . ($i + 1)] = ($this->slide3['b' . $i] === 6 ? $this->slide3['q' . ($i + 1)] * $this->slide3['q48'] : 0);
            $this->slide3['ax' . ($i + 1)] = ($this->slide3['b' . $i] === 6 ? $this->slide3['r' . ($i + 1)] * $this->slide3['q48'] : 0);
            $this->slide3['ay' . ($i + 1)] = ($this->slide3['b' . $i] === 6 ? $this->slide3['s' . ($i + 1)] * $this->slide3['q48'] : 0);

            $this->slide3['az'.($i+1)] = $this->slide3['b'.($i + 1)] * $this->slide3['q49'];
            $this->slide3['ba'.($i+1)] = $this->slide3['m'.($i + 1)] * $this->slide3['q49'];
            $this->slide3['bb'.($i+1)] = $this->slide3['n'.($i + 1)] * $this->slide3['q49'];
            $this->slide3['bc'.($i+1)] = $this->slide3['o'.($i + 1)] * $this->slide3['q49'];
            $this->slide3['bd'.($i+1)] = $this->slide3['p'.($i + 1)] * $this->slide3['q49'];
            $this->slide3['be'.($i+1)] = $this->slide3['q'.($i + 1)] * $this->slide3['q49'];
            $this->slide3['bf'.($i+1)] = $this->slide3['r'.($i + 1)] * $this->slide3['q49'];
            $this->slide3['bg'.($i+1)] = $this->slide3['s'.($i + 1)] * $this->slide3['q49'];

            $this->slide3['bi'.($i+1)] = $this->slide3['b'.($i + 1)] * $this->slide3['b47'];

            $this->slide3['bl'.($i+1)] = $this->slide3['b'.($i + 1)] * $this->slide3['b47'] - $this->slide3['b'.($i + 1)] * $this->slide3['b47'] * ($this->slide3['b50'] + $this->slide3['b51'] + $this->slide3['b52']);
            $this->slide3['bm'.($i+1)] = $this->slide3['b'.($i + 1)] * $this->slide3['b47'] - $this->slide3['b'.($i + 1)] * $this->slide3['b47'] * ($this->slide3['b55'] + $this->slide3['b56']);

            $this->slide3['bo'.($i+1)] = $this->slide3['b'.($i + 1)] * $this->slide3['b47'] - $this->slide3['b'.($i + 1)] * $this->slide3['b47'] * ($this->slide3['b55'] + $this->slide3['b56']) - $this->slide3['b'.($i + 1)] * $this->slide3['b47'] * ($this->slide3['b50'] + $this->slide3['b51'] + $this->slide3['b52']);

//          Строка ом/с
            $this->slide3['b' . ($i + 2)] = $this->slide1['b' . $keySlide1] * $this->slide3['b2'];
            $this->slide3['c' . ($i + 2)] = $this->slide3['b' . ($i + 2)] * $this->slide3['c45'] + $this->slide3['b' . ($i + 2)] * $this->slide3['c46'];
            $this->slide3['d' . ($i + 2)] = $this->slide3['b' . ($i + 2)] * $this->slide3['b50'] + $this->slide3['b' . ($i + 2)] * $this->slide3['b51'] + $this->slide3['b' . ($i + 2)] * $this->slide3['b52'];
            $this->slide3['e' . ($i + 2)] = $this->slide3['b' . ($i + 2)] * ($this->slide3['c45'] + $this->slide3['c46']) * ($this->slide3['b50'] + $this->slide3['b51'] + $this->slide3['b52']);
            $this->slide3['f' . ($i + 2)] = $this->slide3['d' . ($i + 2)] - $this->slide3['e' . ($i + 2)];
            $this->slide3['g' . ($i + 2)] = $this->slide3['c' . ($i + 2)] - $this->slide3['e' . ($i + 2)];

            $this->slide3['k' . ($i + 2)] = $this->slide3['c' . ($i + 2)] - $this->slide3['i' . ($i + 2)];
            $this->slide3['l' . ($i + 2)] = $this->slide3['c' . ($i + 2)] - $this->slide3['e' . ($i + 2)] - $this->slide3['i' . ($i + 1)];
            $this->slide3['m' . ($i + 2)] = $this->slide3['b' . ($i + 2)] - $this->slide3['c' . ($i + 2)];
            $this->slide3['n' . ($i + 2)] = $this->slide3['b' . ($i + 2)] - $this->slide3['d' . ($i + 2)];

            $this->slide3['p' . ($i + 2)] = $this->slide3['b' . ($i + 2)] - $this->slide3['e' . ($i + 2)] - $this->slide3['f' . ($i + 2)] - $this->slide3['g' . ($i + 2)];
            $this->slide3['q' . ($i + 2)] = $this->slide3['b' . ($i + 2)] - $this->slide3['k' . ($i + 2)];
            $this->slide3['r' . ($i + 2)] = $this->slide3['b' . ($i + 2)] - $this->slide3['d' . ($i + 2)];
            $this->slide3['s' . ($i + 2)] = $this->slide3['b' . ($i + 2)] - $this->slide3['e' . ($i + 2)] - $this->slide3['f' . ($i + 2)] - $this->slide3['l' . ($i + 2)];

            $this->slide3['bi' . ($i + 2)] = $this->slide3['b' . ($i + 2)] * $this->slide3['c47'];
            $this->slide3['bl' . ($i + 2)] = $this->slide3['b' . ($i + 2)] * $this->slide3['c47'] * $this->slide3['b' . ($i + 2)] * $this->slide3['c47'] * ( $this->slide3['b50'] + $this->slide3['b51'] + $this->slide3['b52'] );
            $this->slide3['bm' . ($i + 2)] = $this->slide3['b' . ($i + 2)] * $this->slide3['c47'];
            $this->slide3['bo' . ($i + 2)] = $this->slide3['b' . ($i + 2)] * $this->slide3['c47'] - $this->slide3['b' . ($i + 2)] * $this->slide3['c47'] * ( $this->slide3['b50'] + $this->slide3['b51'] + $this->slide3['b52'] );


        }

        //        Пересчет итого
        for ($i = 1 ; $i <= 67 ; $i++){
            $char = $this->intToChar($i);
            $this->slide3[$char.'40'] = 0;
            $this->slide3[$char.'41'] = 0;
            for ($j = 3; $j<=36 ; $j +=3 ){
                $this->slide3[$char.'40'] += ( $this->slide3[$char.($j+1)] ? $this->slide3[$char.($j+1)] : 0 );
                $this->slide3[$char.'41'] += ( $this->slide3[$char.($j+2)] ? $this->slide3[$char.($j+2)] : 0 );
            }
        }

        return $this->slide3;
    }

    public function intToChar($number){
        $chars = array(
            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'aa', 'ab', 'ac', 'ad', 'ae', 'af', 'ag', 'ah', 'ai', 'aj', 'ak', 'al', 'am', 'an', 'ao', 'ap', 'aq', 'ar', 'as', 'at', 'au', 'av', 'aw', 'ax', 'ay', 'az', 'ba', 'bb', 'bc', 'bd', 'be', 'bf', 'bg', 'bh', 'bi', 'bj', 'bk', 'bl', 'bm', 'bn', 'bo', 'bp', 'bq', 'br', 'bs', 'bt', 'bu', 'bv', 'bw', 'bx', 'by', 'bz'
        );
        return $chars[$number];
    }
}