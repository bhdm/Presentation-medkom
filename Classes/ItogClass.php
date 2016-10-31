<?php
/**
 * Created by PhpStorm.
 * User: maxim
 * Date: 22.10.16
 * Time: 23:04
 */
class ItogClass
{
    protected $slide1;

    protected $slide2;

    protected $slide3;

    protected $slide4;

    protected $slide5;

    public function __construct()
    {
        $calc = new CalculationClass();
        $this->slide1 = $calc->slide1();
        $this->slide2 = $calc->slide2();
        $this->slide3 = $calc->slide3();
        $this->slide4 = $calc->slide4();
    }

    public function slide1()
    {
        return $this->slide1;
    }

    public function slide2()
    {
        return $this->slide2;
    }

    public function slide3()
    {
        return $this->slide3;
    }

    public function slide4()
    {
        return $this->slide4;
    }

    public function slide5()
    {
        $this->slide5['b3'] = 1;
        $this->slide5['b4'] = 1;
        $this->slide5['b5'] = 1;
        $this->slide5['b6'] = 1;
        $this->slide5['b7'] = 1;
        $this->slide5['b8'] = 1;

        $this->slide5['c3'] = $this->slide5['b3'] + $this->slide5['b4'];

        if ($this->slide5['b8'] = $this->slide5['b8'] + $this->slide5['b6'] + $this->slide5['b7'] == 4){
            $this->slide5['d5'] = 1;
        }elseif ($this->slide5['b5'] = $this->slide5['b6'] + $this->slide5['b8'] == 3){
            $this->slide5['d5'] = 2;
        }elseif ($this->slide5['b5'] = $this->slide5['b7'] + $this->slide5['b8'] == 3){
            $this->slide5['d5'] = 3;
        }elseif ($this->slide5['b5'] = $this->slide5['b6'] + $this->slide5['b7'] == 3){
            $this->slide5['d5'] = 4;
        }elseif ($this->slide5['b6'] = $this->slide5['b7'] + $this->slide5['b8'] == 3){
            $this->slide5['d5'] = 5;
        }elseif ($this->slide5['b6'] = $this->slide5['b8'] == 2){
            $this->slide5['d5'] = 6;
        }elseif ($this->slide5['b5'] = $this->slide5['b8'] == 2){
            $this->slide5['d5'] = 7;
        }elseif ($this->slide5['b5'] = $this->slide5['b6'] == 2){
            $this->slide5['d5'] = 8;
        }elseif ($this->slide5['b5'] = $this->slide5['b7'] == 2){
            $this->slide5['d5'] = 9;
        }elseif ($this->slide5['b7'] = $this->slide5['b8'] == 2){
            $this->slide5['d5'] = 10;
        }elseif ($this->slide5['b6'] = $this->slide5['b7'] == 2){
            $this->slide5['d5'] = 11;
        }elseif ($this->slide5['b6']== 1){
            $this->slide5['d5'] = 12;
        }elseif ($this->slide5['b8']== 1){
            $this->slide5['d5'] = 13;
        }elseif ($this->slide5['b5']== 1){
            $this->slide5['d5'] = 14;
        }elseif ($this->slide5['b7']== 1){
            $this->slide5['d5'] = 15;
        }else{
            $this->slide5['d5'] = 16;
        }

//      Аллергии-ГКИ-ИСМП-Специализация
        $this->slide5['d14'] = ($this->slide5['c3'] == 2 ? $this->slide4['g19'] + $this->slide4['g31'] : ($this->slide5['b3'] == 1 ? $this->slide4['e19'] + $this->slide4['e31'] : ($this->slide5['b4'] == 1 ? $this->slide4['f19'] + $this->slide4['f31'] : ($this->slide4['d19'] + $this->slide4['d31']))));
        $this->slide5['d15'] = ($this->slide5['c3'] == 2 ? $this->slide4['g20'] + $this->slide4['g32'] : ($this->slide5['b3'] == 1 ? $this->slide4['e20'] + $this->slide4['e32'] : ($this->slide5['b4'] == 1 ? $this->slide4['f20'] + $this->slide4['f32'] : ($this->slide4['d20'] + $this->slide4['d32']))));
        $this->slide5['d16'] = ($this->slide5['c3'] == 2 ? $this->slide4['g21'] : ($this->slide5['b3'] == 1 ? $this->slide4['e21']  : ($this->slide5['b4'] == 1 ? $this->slide4['f21'] : ($this->slide4['d21'] ))));
        $this->slide5['d17'] = ($this->slide5['c3'] == 2 ? $this->slide4['g22'] + $this->slide4['g33'] : ($this->slide5['b3'] == 1 ? $this->slide4['e22'] + $this->slide4['e33'] : ($this->slide5['b4'] == 1 ? $this->slide4['f22'] + $this->slide4['f33'] : ($this->slide4['d22'] + $this->slide4['d33']))));
        $this->slide5['d18'] = ($this->slide5['c3'] == 2 ? $this->slide4['g23'] + $this->slide4['g34'] : ($this->slide5['b3'] == 1 ? $this->slide4['e23'] + $this->slide4['e34'] : ($this->slide5['b4'] == 1 ? $this->slide4['f23'] + $this->slide4['f34'] : ($this->slide4['d23'] + $this->slide4['d34']))));
        $this->slide5['d19'] = ($this->slide5['c3'] == 2 ? $this->slide4['g24'] + $this->slide4['g35'] : ($this->slide5['b3'] == 1 ? $this->slide4['e24'] + $this->slide4['e35'] : ($this->slide5['b4'] == 1 ? $this->slide4['f24'] + $this->slide4['f35'] : ($this->slide4['d24'] + $this->slide4['d35']))));
        $this->slide5['d20'] = ($this->slide5['c3'] == 2 ? $this->slide4['g25'] : ($this->slide5['b3'] == 1 ? $this->slide4['e25']  : ($this->slide5['b4'] == 1 ? $this->slide4['f25'] : ($this->slide4['d25'] ))));
        $this->slide5['d21'] = ($this->slide5['c3'] == 2 ? $this->slide4['g26'] : ($this->slide5['b3'] == 1 ? $this->slide4['e26']  : ($this->slide5['b4'] == 1 ? $this->slide4['f26'] : ($this->slide4['d26'] ))));
        $this->slide5['d22'] = ($this->slide5['c3'] == 2 ? $this->slide4['g27'] : ($this->slide5['b3'] == 1 ? $this->slide4['e27']  : ($this->slide5['b4'] == 1 ? $this->slide4['f27'] : ($this->slide4['d27'] ))));
        $this->slide5['d23'] = ($this->slide5['c3'] == 2 ? $this->slide4['g28'] : ($this->slide5['b3'] == 1 ? $this->slide4['e28']  : ($this->slide5['b4'] == 1 ? $this->slide4['f28'] : ($this->slide4['d28'] ))));
        $this->slide5['d24'] = ($this->slide5['c3'] == 2 ? $this->slide4['g29'] : ($this->slide5['b3'] == 1 ? $this->slide4['e29']  : ($this->slide5['b4'] == 1 ? $this->slide4['f29'] : ($this->slide4['d29'] ))));
        $this->slide5['d25'] = ($this->slide5['c3'] == 2 ? $this->slide4['g30'] + $this->slide4['g36'] : ($this->slide5['b3'] == 1 ? $this->slide4['e30'] + $this->slide4['e36'] : ($this->slide5['b4'] == 1 ? $this->slide4['f30'] + $this->slide4['f36'] : ($this->slide4['d30'] + $this->slide4['d36']))));

//      Аллергии-0-ИСМП-Специализация
        $this->slide5['d29'] = ($this->slide5['c3'] == 2 ? $this->slide4['g39'] + $this->slide4['g49'] : ($this->slide5['b3'] == 1 ? $this->slide4['e39'] + $this->slide4['e49'] : ($this->slide5['b4'] == 1 ? $this->slide4['f39'] + $this->slide4['f49'] : ($this->slide4['d39'] + $this->slide4['d49']))));
        $this->slide5['d30'] = ($this->slide5['c3'] == 2 ? $this->slide4['g40'] : ($this->slide5['b3'] == 1 ? $this->slide4['e40']  : ($this->slide5['b4'] == 1 ? $this->slide4['f40'] : ($this->slide4['d40'] ))));
        $this->slide5['d31'] = ($this->slide5['c3'] == 2 ? $this->slide4['g41'] + $this->slide4['g50'] : ($this->slide5['b3'] == 1 ? $this->slide4['e41'] + $this->slide4['e50'] : ($this->slide5['b4'] == 1 ? $this->slide4['f41'] + $this->slide4['f50'] : ($this->slide4['d41'] + $this->slide4['d50']))));
        $this->slide5['d32'] = ($this->slide5['c3'] == 2 ? $this->slide4['g42'] + $this->slide4['g51'] : ($this->slide5['b3'] == 1 ? $this->slide4['e42'] + $this->slide4['e51'] : ($this->slide5['b4'] == 1 ? $this->slide4['f42'] + $this->slide4['f51'] : ($this->slide4['d42'] + $this->slide4['d51']))));
        $this->slide5['d33'] = ($this->slide5['c3'] == 2 ? $this->slide4['g43'] : ($this->slide5['b3'] == 1 ? $this->slide4['e43']  : ($this->slide5['b4'] == 1 ? $this->slide4['f43'] : ($this->slide4['d43'] ))));
        $this->slide5['d34'] = ($this->slide5['c3'] == 2 ? $this->slide4['g44'] : ($this->slide5['b3'] == 1 ? $this->slide4['e44']  : ($this->slide5['b4'] == 1 ? $this->slide4['f44'] : ($this->slide4['d44'] ))));
        $this->slide5['d35'] = ($this->slide5['c3'] == 2 ? $this->slide4['g45'] : ($this->slide5['b3'] == 1 ? $this->slide4['e45']  : ($this->slide5['b4'] == 1 ? $this->slide4['f45'] : ($this->slide4['d45'] ))));
        $this->slide5['d36'] = ($this->slide5['c3'] == 2 ? $this->slide4['g46'] : ($this->slide5['b3'] == 1 ? $this->slide4['e46']  : ($this->slide5['b4'] == 1 ? $this->slide4['f46'] : ($this->slide4['d46'] ))));
        $this->slide5['d37'] = ($this->slide5['c3'] == 2 ? $this->slide4['g47'] : ($this->slide5['b3'] == 1 ? $this->slide4['e47']  : ($this->slide5['b4'] == 1 ? $this->slide4['f47'] : ($this->slide4['d47'] ))));
        $this->slide5['d38'] = ($this->slide5['c3'] == 2 ? $this->slide4['g48'] + $this->slide4['g52'] : ($this->slide5['b3'] == 1 ? $this->slide4['e48'] + $this->slide4['e52'] : ($this->slide5['b4'] == 1 ? $this->slide4['f48'] + $this->slide4['f52'] : ($this->slide4['d48'] + $this->slide4['d52']))));

//      0-ГКИ-ИСМП-Специализация
        $this->slide5['d42'] = ($this->slide5['c3'] == 2 ? $this->slide4['g55'] + $this->slide4['g63'] : ($this->slide5['b3'] == 1 ? $this->slide4['e55'] + $this->slide4['e63'] : ($this->slide5['b4'] == 1 ? $this->slide4['f55'] + $this->slide4['f63'] : ($this->slide4['d55'] + $this->slide4['d63']))));
        $this->slide5['d43'] = ($this->slide5['c3'] == 2 ? $this->slide4['g56'] + $this->slide4['g64'] : ($this->slide5['b3'] == 1 ? $this->slide4['e56'] + $this->slide4['e64'] : ($this->slide5['b4'] == 1 ? $this->slide4['f56'] + $this->slide4['f64'] : ($this->slide4['d56'] + $this->slide4['d64']))));
        $this->slide5['d44'] = ($this->slide5['c3'] == 2 ? $this->slide4['g57'] + $this->slide4['g65'] : ($this->slide5['b3'] == 1 ? $this->slide4['e57'] + $this->slide4['e65'] : ($this->slide5['b4'] == 1 ? $this->slide4['f57'] + $this->slide4['f65'] : ($this->slide4['d57'] + $this->slide4['d65']))));
        $this->slide5['d45'] = ($this->slide5['c3'] == 2 ? $this->slide4['g58'] : ($this->slide5['b3'] == 1 ? $this->slide4['e58']  : ($this->slide5['b4'] == 1 ? $this->slide4['f58'] : ($this->slide4['d58'] ))));
        $this->slide5['d46'] = ($this->slide5['c3'] == 2 ? $this->slide4['g59'] : ($this->slide5['b3'] == 1 ? $this->slide4['e59']  : ($this->slide5['b4'] == 1 ? $this->slide4['f59'] : ($this->slide4['d59'] ))));
        $this->slide5['d47'] = ($this->slide5['c3'] == 2 ? $this->slide4['g60'] : ($this->slide5['b3'] == 1 ? $this->slide4['e60']  : ($this->slide5['b4'] == 1 ? $this->slide4['f60'] : ($this->slide4['d60'] ))));
        $this->slide5['d48'] = ($this->slide5['c3'] == 2 ? $this->slide4['g61'] : ($this->slide5['b3'] == 1 ? $this->slide4['e61']  : ($this->slide5['b4'] == 1 ? $this->slide4['f61'] : ($this->slide4['d61'] ))));
        $this->slide5['d49'] = ($this->slide5['c3'] == 2 ? $this->slide4['g62'] : ($this->slide5['b3'] == 1 ? $this->slide4['e62']  : ($this->slide5['b4'] == 1 ? $this->slide4['f62'] : ($this->slide4['d62'] ))));

//      Аллергии-0-0-Специализация
        $this->slide5['d53'] = ($this->slide5['c3'] == 2 ? $this->slide4['g68'] + $this->slide4['g77'] : ($this->slide5['b3'] == 1 ? $this->slide4['e68'] + $this->slide4['e77'] : ($this->slide5['b4'] == 1 ? $this->slide4['f68'] + $this->slide4['f77'] : ($this->slide4['d68'] + $this->slide4['d77']))));
        $this->slide5['d54'] = ($this->slide5['c3'] == 2 ? $this->slide4['g69'] + $this->slide4['g78'] : ($this->slide5['b3'] == 1 ? $this->slide4['e69'] + $this->slide4['e78'] : ($this->slide5['b4'] == 1 ? $this->slide4['f69'] + $this->slide4['f78'] : ($this->slide4['d69'] + $this->slide4['d78']))));
        $this->slide5['d55'] = ($this->slide5['c3'] == 2 ? $this->slide4['g70'] + $this->slide4['g79'] : ($this->slide5['b3'] == 1 ? $this->slide4['e70'] + $this->slide4['e79'] : ($this->slide5['b4'] == 1 ? $this->slide4['f70'] + $this->slide4['f79'] : ($this->slide4['d70'] + $this->slide4['d79']))));
        $this->slide5['d56'] = ($this->slide5['c3'] == 2 ? $this->slide4['g71'] : ($this->slide5['b3'] == 1 ? $this->slide4['e71']  : ($this->slide5['b4'] == 1 ? $this->slide4['f71'] : ($this->slide4['d71'] ))));
        $this->slide5['d57'] = ($this->slide5['c3'] == 2 ? $this->slide4['g72'] : ($this->slide5['b3'] == 1 ? $this->slide4['e72']  : ($this->slide5['b4'] == 1 ? $this->slide4['f72'] : ($this->slide4['d72'] ))));
        $this->slide5['d73'] = ($this->slide5['c3'] == 2 ? $this->slide4['g73'] : ($this->slide5['b3'] == 1 ? $this->slide4['e73']  : ($this->slide5['b4'] == 1 ? $this->slide4['f73'] : ($this->slide4['d73'] ))));
        $this->slide5['d59'] = ($this->slide5['c3'] == 2 ? $this->slide4['g74'] : ($this->slide5['b3'] == 1 ? $this->slide4['e74']  : ($this->slide5['b4'] == 1 ? $this->slide4['f74'] : ($this->slide4['d74'] ))));
        $this->slide5['d60'] = ($this->slide5['c3'] == 2 ? $this->slide4['g75'] : ($this->slide5['b3'] == 1 ? $this->slide4['e75']  : ($this->slide5['b4'] == 1 ? $this->slide4['f75'] : ($this->slide4['d75'] ))));
        $this->slide5['d61'] = ($this->slide5['c3'] == 2 ? $this->slide4['g76'] + $this->slide4['g80'] : ($this->slide5['b3'] == 1 ? $this->slide4['e76'] + $this->slide4['e80'] : ($this->slide5['b4'] == 1 ? $this->slide4['f76'] + $this->slide4['f80'] : ($this->slide4['d76'] + $this->slide4['d80']))));

//      Аллергии-0-ИСМП-0
        $this->slide5['d65'] = ($this->slide5['c3'] == 2 ? $this->slide4['g83'] + $this->slide4['g89'] : ($this->slide5['b3'] == 1 ? $this->slide4['e83'] + $this->slide4['e89'] : ($this->slide5['b4'] == 1 ? $this->slide4['f83'] + $this->slide4['f89'] : ($this->slide4['d83'] + $this->slide4['d89']))));
        $this->slide5['d66'] = ($this->slide5['c3'] == 2 ? $this->slide4['g84'] : ($this->slide5['b3'] == 1 ? $this->slide4['e84']  : ($this->slide5['b4'] == 1 ? $this->slide4['f84'] : ($this->slide4['d84'] ))));
        $this->slide5['d67'] = ($this->slide5['c3'] == 2 ? $this->slide4['g85'] + $this->slide4['g90'] : ($this->slide5['b3'] == 1 ? $this->slide4['e85'] + $this->slide4['e90'] : ($this->slide5['b4'] == 1 ? $this->slide4['f85'] + $this->slide4['f90'] : ($this->slide4['d85'] + $this->slide4['d90']))));
        $this->slide5['d68'] = ($this->slide5['c3'] == 2 ? $this->slide4['g86'] + $this->slide4['g91'] : ($this->slide5['b3'] == 1 ? $this->slide4['e86'] + $this->slide4['e91'] : ($this->slide5['b4'] == 1 ? $this->slide4['f86'] + $this->slide4['f91'] : ($this->slide4['d86'] + $this->slide4['d91']))));
        $this->slide5['d69'] = ($this->slide5['c3'] == 2 ? $this->slide4['g87'] : ($this->slide5['b3'] == 1 ? $this->slide4['e87']  : ($this->slide5['b4'] == 1 ? $this->slide4['f87'] : ($this->slide4['d87'] ))));
        $this->slide5['d70'] = ($this->slide5['c3'] == 2 ? $this->slide4['g88'] + $this->slide4['g92'] : ($this->slide5['b3'] == 1 ? $this->slide4['e88'] + $this->slide4['e92'] : ($this->slide5['b4'] == 1 ? $this->slide4['f88'] + $this->slide4['f92'] : ($this->slide4['d88'] + $this->slide4['d92']))));
        
//      0-ГКИ-ИСМП-0
        $this->slide5['d75'] = ($this->slide5['c3'] == 2 ? $this->slide4['g95'] + $this->slide4['g99'] : ($this->slide5['b3'] == 1 ? $this->slide4['e95'] + $this->slide4['e99'] : ($this->slide5['b4'] == 1 ? $this->slide4['f95'] + $this->slide4['f99'] : ($this->slide4['d95'] + $this->slide4['d99']))));
        $this->slide5['d76'] = ($this->slide5['c3'] == 2 ? $this->slide4['g96'] + $this->slide4['g100'] : ($this->slide5['b3'] == 1 ? $this->slide4['e96'] + $this->slide4['e100'] : ($this->slide5['b4'] == 1 ? $this->slide4['f96'] + $this->slide4['f100'] : ($this->slide4['d96'] + $this->slide4['d100']))));
        $this->slide5['d77'] = ($this->slide5['c3'] == 2 ? $this->slide4['g97'] + $this->slide4['g101'] : ($this->slide5['b3'] == 1 ? $this->slide4['e97'] + $this->slide4['e101'] : ($this->slide5['b4'] == 1 ? $this->slide4['f97'] + $this->slide4['f101'] : ($this->slide4['d97'] + $this->slide4['d101']))));
        $this->slide5['d78'] = ($this->slide5['c3'] == 2 ? $this->slide4['g98'] : ($this->slide5['b3'] == 1 ? $this->slide4['e98']  : ($this->slide5['b4'] == 1 ? $this->slide4['f98'] : ($this->slide4['d98'] ))));

//      0-0-0-Специализация
        $this->slide5['d82'] = ($this->slide5['c3'] == 2 ? $this->slide4['g104'] + $this->slide4['g111'] : ($this->slide5['b3'] == 1 ? $this->slide4['e104'] + $this->slide4['e111'] : ($this->slide5['b4'] == 1 ? $this->slide4['f104'] + $this->slide4['f111'] : ($this->slide4['d104'] + $this->slide4['d111']))));
        $this->slide5['d83'] = ($this->slide5['c3'] == 2 ? $this->slide4['g105'] + $this->slide4['g112'] : ($this->slide5['b3'] == 1 ? $this->slide4['e105'] + $this->slide4['e112'] : ($this->slide5['b4'] == 1 ? $this->slide4['f105'] + $this->slide4['f112'] : ($this->slide4['d105'] + $this->slide4['d112']))));
        $this->slide5['d84'] = ($this->slide5['c3'] == 2 ? $this->slide4['g106'] : ($this->slide5['b3'] == 1 ? $this->slide4['e106']  : ($this->slide5['b4'] == 1 ? $this->slide4['f106'] : ($this->slide4['d106'] ))));
        $this->slide5['d85'] = ($this->slide5['c3'] == 2 ? $this->slide4['g107'] : ($this->slide5['b3'] == 1 ? $this->slide4['e107']  : ($this->slide5['b4'] == 1 ? $this->slide4['f107'] : ($this->slide4['d107'] ))));
        $this->slide5['d86'] = ($this->slide5['c3'] == 2 ? $this->slide4['g108'] : ($this->slide5['b3'] == 1 ? $this->slide4['e108']  : ($this->slide5['b4'] == 1 ? $this->slide4['f108'] : ($this->slide4['d108'] ))));
        $this->slide5['d87'] = ($this->slide5['c3'] == 2 ? $this->slide4['g109'] : ($this->slide5['b3'] == 1 ? $this->slide4['e109']  : ($this->slide5['b4'] == 1 ? $this->slide4['f109'] : ($this->slide4['d109'] ))));
        $this->slide5['d88'] = ($this->slide5['c3'] == 2 ? $this->slide4['g110'] : ($this->slide5['b3'] == 1 ? $this->slide4['e110']  : ($this->slide5['b4'] == 1 ? $this->slide4['f110'] : ($this->slide4['d110'] ))));

//      0-0-ИСМП-0
        $this->slide5['d92'] = ($this->slide5['c3'] == 2 ? $this->slide4['g115'] + $this->slide4['g118'] : ($this->slide5['b3'] == 1 ? $this->slide4['e115'] + $this->slide4['e118'] : ($this->slide5['b4'] == 1 ? $this->slide4['f115'] + $this->slide4['f118'] : ($this->slide4['d115'] + $this->slide4['d118']))));
        $this->slide5['d93'] = ($this->slide5['c3'] == 2 ? $this->slide4['g116'] + $this->slide4['g119'] : ($this->slide5['b3'] == 1 ? $this->slide4['e116'] + $this->slide4['e119'] : ($this->slide5['b4'] == 1 ? $this->slide4['f116'] + $this->slide4['f119'] : ($this->slide4['d116'] + $this->slide4['d119']))));
        $this->slide5['d94'] = ($this->slide5['c3'] == 2 ? $this->slide4['g117'] : ($this->slide5['b3'] == 1 ? $this->slide4['e117']  : ($this->slide5['b4'] == 1 ? $this->slide4['f117'] : ($this->slide4['d117'] ))));


########################
#### Вторая колонка ####
########################

//      Аллергии-ГКИ-0-Специализация
        $this->slide5['i14'] = ($this->slide5['c3'] == 2 ? $this->slide4['o19'] + $this->slide4['o30'] : ($this->slide5['b3'] == 1 ? $this->slide4['m19'] + $this->slide4['m30'] : ($this->slide5['b4'] == 1 ? $this->slide4['n19'] + $this->slide4['n30'] : ($this->slide4['l19'] + $this->slide4['l30']))));
        $this->slide5['i15'] = ($this->slide5['c3'] == 2 ? $this->slide4['o20'] + $this->slide4['o31'] : ($this->slide5['b3'] == 1 ? $this->slide4['m20'] + $this->slide4['m31'] : ($this->slide5['b4'] == 1 ? $this->slide4['n20'] + $this->slide4['n31'] : ($this->slide4['l20'] + $this->slide4['l31']))));
        $this->slide5['i16'] = ($this->slide5['c3'] == 2 ? $this->slide4['o21'] + $this->slide4['o32'] : ($this->slide5['b3'] == 1 ? $this->slide4['m21'] + $this->slide4['m32'] : ($this->slide5['b4'] == 1 ? $this->slide4['n21'] + $this->slide4['n32'] : ($this->slide4['l21'] + $this->slide4['l32']))));
        $this->slide5['i17'] = ($this->slide5['c3'] == 2 ? $this->slide4['o22'] + $this->slide4['o33'] : ($this->slide5['b3'] == 1 ? $this->slide4['m22'] + $this->slide4['m33'] : ($this->slide5['b4'] == 1 ? $this->slide4['n22'] + $this->slide4['n33'] : ($this->slide4['l22'] + $this->slide4['l33']))));
        $this->slide5['i18'] = ($this->slide5['c3'] == 2 ? $this->slide4['o23'] + $this->slide4['o34'] : ($this->slide5['b3'] == 1 ? $this->slide4['m23'] + $this->slide4['m34'] : ($this->slide5['b4'] == 1 ? $this->slide4['n23'] + $this->slide4['n34'] : ($this->slide4['l23'] + $this->slide4['l34']))));
        $this->slide5['i19'] = ($this->slide5['c3'] == 2 ? $this->slide4['o24'] : ($this->slide5['b3'] == 1 ? $this->slide4['m24']  : ($this->slide5['b4'] == 1 ? $this->slide4['n24'] : ($this->slide4['l24'] ))));
        $this->slide5['i20'] = ($this->slide5['c3'] == 2 ? $this->slide4['o25'] : ($this->slide5['b3'] == 1 ? $this->slide4['m25']  : ($this->slide5['b4'] == 1 ? $this->slide4['n25'] : ($this->slide4['l25'] ))));
        $this->slide5['i21'] = ($this->slide5['c3'] == 2 ? $this->slide4['o26'] : ($this->slide5['b3'] == 1 ? $this->slide4['m26']  : ($this->slide5['b4'] == 1 ? $this->slide4['n26'] : ($this->slide4['l26'] ))));
        $this->slide5['i22'] = ($this->slide5['c3'] == 2 ? $this->slide4['o27'] : ($this->slide5['b3'] == 1 ? $this->slide4['m27']  : ($this->slide5['b4'] == 1 ? $this->slide4['n27'] : ($this->slide4['l27'] ))));
        $this->slide5['i23'] = ($this->slide5['c3'] == 2 ? $this->slide4['o28'] : ($this->slide5['b3'] == 1 ? $this->slide4['m28']  : ($this->slide5['b4'] == 1 ? $this->slide4['n28'] : ($this->slide4['l28'] ))));
        $this->slide5['i24'] = ($this->slide5['c3'] == 2 ? $this->slide4['o29'] + $this->slide4['o35'] : ($this->slide5['b3'] == 1 ? $this->slide4['m29'] + $this->slide4['m35'] : ($this->slide5['b4'] == 1 ? $this->slide4['n29'] + $this->slide4['n35'] : ($this->slide4['l29'] + $this->slide4['l35']))));

//      Аллергии-ГКИ-ИСМП-0
        $this->slide5['i29'] = ($this->slide5['c3'] == 2 ? $this->slide4['o39'] + $this->slide4['o47'] : ($this->slide5['b3'] == 1 ? $this->slide4['m39'] + $this->slide4['m47'] : ($this->slide5['b4'] == 1 ? $this->slide4['n39'] + $this->slide4['n47'] : ($this->slide4['l39'] + $this->slide4['l47']))));
        $this->slide5['i30'] = ($this->slide5['c3'] == 2 ? $this->slide4['o40'] + $this->slide4['o48'] : ($this->slide5['b3'] == 1 ? $this->slide4['m40'] + $this->slide4['m48'] : ($this->slide5['b4'] == 1 ? $this->slide4['n40'] + $this->slide4['n48'] : ($this->slide4['l40'] + $this->slide4['l48']))));
        $this->slide5['i31'] = ($this->slide5['c3'] == 2 ? $this->slide4['o41'] : ($this->slide5['b3'] == 1 ? $this->slide4['m41']  : ($this->slide5['b4'] == 1 ? $this->slide4['n41'] : ($this->slide4['l41'] ))));
        $this->slide5['i32'] = ($this->slide5['c3'] == 2 ? $this->slide4['o42'] + $this->slide4['o49'] : ($this->slide5['b3'] == 1 ? $this->slide4['m42'] + $this->slide4['m49'] : ($this->slide5['b4'] == 1 ? $this->slide4['n42'] + $this->slide4['n49'] : ($this->slide4['l42'] + $this->slide4['l49']))));
        $this->slide5['i33'] = ($this->slide5['c3'] == 2 ? $this->slide4['o43'] + $this->slide4['o50'] : ($this->slide5['b3'] == 1 ? $this->slide4['m43'] + $this->slide4['m50'] : ($this->slide5['b4'] == 1 ? $this->slide4['n43'] + $this->slide4['n50'] : ($this->slide4['l43'] + $this->slide4['l50']))));
        $this->slide5['i34'] = ($this->slide5['c3'] == 2 ? $this->slide4['o44'] + $this->slide4['o51'] : ($this->slide5['b3'] == 1 ? $this->slide4['m44'] + $this->slide4['m51'] : ($this->slide5['b4'] == 1 ? $this->slide4['n44'] + $this->slide4['n51'] : ($this->slide4['l44'] + $this->slide4['l51']))));
        $this->slide5['i35'] = ($this->slide5['c3'] == 2 ? $this->slide4['o45'] : ($this->slide5['b3'] == 1 ? $this->slide4['m45']  : ($this->slide5['b4'] == 1 ? $this->slide4['n45'] : ($this->slide4['l45'] ))));
        $this->slide5['i36'] = ($this->slide5['c3'] == 2 ? $this->slide4['o46'] + $this->slide4['o52'] : ($this->slide5['b3'] == 1 ? $this->slide4['m46'] + $this->slide4['m52'] : ($this->slide5['b4'] == 1 ? $this->slide4['n46'] + $this->slide4['n52'] : ($this->slide4['l46'] + $this->slide4['l52']))));

//      0-ГКИ-0-Специализация
        $this->slide5['i42'] = ($this->slide5['c3'] == 2 ? $this->slide4['o55'] + $this->slide4['o63'] : ($this->slide5['b3'] == 1 ? $this->slide4['m55'] + $this->slide4['m63'] : ($this->slide5['b4'] == 1 ? $this->slide4['n55'] + $this->slide4['n63'] : ($this->slide4['l55'] + $this->slide4['l63']))));
        $this->slide5['i43'] = ($this->slide5['c3'] == 2 ? $this->slide4['o56'] + $this->slide4['o64'] : ($this->slide5['b3'] == 1 ? $this->slide4['m56'] + $this->slide4['m64'] : ($this->slide5['b4'] == 1 ? $this->slide4['n56'] + $this->slide4['n64'] : ($this->slide4['l56'] + $this->slide4['l64']))));
        $this->slide5['i44'] = ($this->slide5['c3'] == 2 ? $this->slide4['o57'] + $this->slide4['o65'] : ($this->slide5['b3'] == 1 ? $this->slide4['m57'] + $this->slide4['m65'] : ($this->slide5['b4'] == 1 ? $this->slide4['n57'] + $this->slide4['n65'] : ($this->slide4['l57'] + $this->slide4['l65']))));
        $this->slide5['i45'] = ($this->slide5['c3'] == 2 ? $this->slide4['o58'] : ($this->slide5['b3'] == 1 ? $this->slide4['m58']  : ($this->slide5['b4'] == 1 ? $this->slide4['n58'] : ($this->slide4['l58'] ))));
        $this->slide5['i46'] = ($this->slide5['c3'] == 2 ? $this->slide4['o59'] : ($this->slide5['b3'] == 1 ? $this->slide4['m59']  : ($this->slide5['b4'] == 1 ? $this->slide4['n59'] : ($this->slide4['l59'] ))));
        $this->slide5['i47'] = ($this->slide5['c3'] == 2 ? $this->slide4['o60'] : ($this->slide5['b3'] == 1 ? $this->slide4['m60']  : ($this->slide5['b4'] == 1 ? $this->slide4['n60'] : ($this->slide4['l60'] ))));
        $this->slide5['i48'] = ($this->slide5['c3'] == 2 ? $this->slide4['o61'] : ($this->slide5['b3'] == 1 ? $this->slide4['m61']  : ($this->slide5['b4'] == 1 ? $this->slide4['n61'] : ($this->slide4['l61'] ))));
        $this->slide5['i49'] = ($this->slide5['c3'] == 2 ? $this->slide4['o62'] : ($this->slide5['b3'] == 1 ? $this->slide4['m62']  : ($this->slide5['b4'] == 1 ? $this->slide4['n62'] : ($this->slide4['l62'] ))));

//      Аллергии-ГКИ-0-0
        $this->slide5['i53'] = ($this->slide5['c3'] == 2 ? $this->slide4['o68'] + $this->slide4['o74'] : ($this->slide5['b3'] == 1 ? $this->slide4['m68'] + $this->slide4['m74'] : ($this->slide5['b4'] == 1 ? $this->slide4['n68'] + $this->slide4['n74'] : ($this->slide4['l68'] + $this->slide4['l74']))));
        $this->slide5['i54'] = ($this->slide5['c3'] == 2 ? $this->slide4['o69'] + $this->slide4['o75'] : ($this->slide5['b3'] == 1 ? $this->slide4['m69'] + $this->slide4['m75'] : ($this->slide5['b4'] == 1 ? $this->slide4['n69'] + $this->slide4['n75'] : ($this->slide4['l69'] + $this->slide4['l75']))));
        $this->slide5['i70'] = ($this->slide5['c3'] == 2 ? $this->slide4['o70'] + $this->slide4['o76'] : ($this->slide5['b3'] == 1 ? $this->slide4['m70'] + $this->slide4['m76'] : ($this->slide5['b4'] == 1 ? $this->slide4['n70'] + $this->slide4['n76'] : ($this->slide4['l70'] + $this->slide4['l76']))));
        $this->slide5['i56'] = ($this->slide5['c3'] == 2 ? $this->slide4['o71'] + $this->slide4['o77'] : ($this->slide5['b3'] == 1 ? $this->slide4['m71'] + $this->slide4['m77'] : ($this->slide5['b4'] == 1 ? $this->slide4['n71'] + $this->slide4['n77'] : ($this->slide4['l71'] + $this->slide4['l77']))));
        $this->slide5['i57'] = ($this->slide5['c3'] == 2 ? $this->slide4['o72'] + $this->slide4['o78'] : ($this->slide5['b3'] == 1 ? $this->slide4['m72'] + $this->slide4['m78'] : ($this->slide5['b4'] == 1 ? $this->slide4['n72'] + $this->slide4['n78'] : ($this->slide4['l72'] + $this->slide4['l78']))));
        $this->slide5['i58'] = ($this->slide5['c3'] == 2 ? $this->slide4['o73'] + $this->slide4['o79'] : ($this->slide5['b3'] == 1 ? $this->slide4['m73'] + $this->slide4['m79'] : ($this->slide5['b4'] == 1 ? $this->slide4['n73'] + $this->slide4['n79'] : ($this->slide4['l73'] + $this->slide4['l79']))));

//      0-0-ИСМП-Специализация
        $this->slide5['i65'] = ($this->slide5['c3'] == 2 ? $this->slide4['o83'] + $this->slide4['o90'] : ($this->slide5['b3'] == 1 ? $this->slide4['m83'] + $this->slide4['m90'] : ($this->slide5['b4'] == 1 ? $this->slide4['n83'] + $this->slide4['n90'] : ($this->slide4['l83'] + $this->slide4['l90']))));
        $this->slide5['i66'] = ($this->slide5['c3'] == 2 ? $this->slide4['o84'] + $this->slide4['o91'] : ($this->slide5['b3'] == 1 ? $this->slide4['m84'] + $this->slide4['m91'] : ($this->slide5['b4'] == 1 ? $this->slide4['n84'] + $this->slide4['n91'] : ($this->slide4['l84'] + $this->slide4['l91']))));
        $this->slide5['i67'] = ($this->slide5['c3'] == 2 ? $this->slide4['o85'] : ($this->slide5['b3'] == 1 ? $this->slide4['m85']  : ($this->slide5['b4'] == 1 ? $this->slide4['n85'] : ($this->slide4['l85'] ))));
        $this->slide5['i68'] = ($this->slide5['c3'] == 2 ? $this->slide4['o86'] : ($this->slide5['b3'] == 1 ? $this->slide4['m86']  : ($this->slide5['b4'] == 1 ? $this->slide4['n86'] : ($this->slide4['l86'] ))));
        $this->slide5['i69'] = ($this->slide5['c3'] == 2 ? $this->slide4['o87'] : ($this->slide5['b3'] == 1 ? $this->slide4['m87']  : ($this->slide5['b4'] == 1 ? $this->slide4['n87'] : ($this->slide4['l87'] ))));
        $this->slide5['i70'] = ($this->slide5['c3'] == 2 ? $this->slide4['o88'] : ($this->slide5['b3'] == 1 ? $this->slide4['m88']  : ($this->slide5['b4'] == 1 ? $this->slide4['n88'] : ($this->slide4['l88'] ))));
        $this->slide5['i71'] = ($this->slide5['c3'] == 2 ? $this->slide4['o89'] : ($this->slide5['b3'] == 1 ? $this->slide4['m89']  : ($this->slide5['b4'] == 1 ? $this->slide4['n89'] : ($this->slide4['l89'] ))));

//      0-ГКИ-0-0
        $this->slide5['i75'] = ($this->slide5['c3'] == 2 ? $this->slide4['o95'] + $this->slide4['o98'] : ($this->slide5['b3'] == 1 ? $this->slide4['m95'] + $this->slide4['m98'] : ($this->slide5['b4'] == 1 ? $this->slide4['n95'] + $this->slide4['n98'] : ($this->slide4['l95'] + $this->slide4['l98']))));
        $this->slide5['i76'] = ($this->slide5['c3'] == 2 ? $this->slide4['o96'] + $this->slide4['o99'] : ($this->slide5['b3'] == 1 ? $this->slide4['m96'] + $this->slide4['m99'] : ($this->slide5['b4'] == 1 ? $this->slide4['n96'] + $this->slide4['n99'] : ($this->slide4['l96'] + $this->slide4['l99']))));
        $this->slide5['i77'] = ($this->slide5['c3'] == 2 ? $this->slide4['o97'] + $this->slide4['o100'] : ($this->slide5['b3'] == 1 ? $this->slide4['m97'] + $this->slide4['m100'] : ($this->slide5['b4'] == 1 ? $this->slide4['n97'] + $this->slide4['n100'] : ($this->slide4['l97'] + $this->slide4['l100']))));

//      Аллергии-0-0-0
        $this->slide5['i82'] = ($this->slide5['c3'] == 2 ? $this->slide4['o104'] + $this->slide4['o108'] : ($this->slide5['b3'] == 1 ? $this->slide4['m104'] + $this->slide4['m108'] : ($this->slide5['b4'] == 1 ? $this->slide4['n104'] + $this->slide4['n108'] : ($this->slide4['l104'] + $this->slide4['l108']))));
        $this->slide5['i83'] = ($this->slide5['c3'] == 2 ? $this->slide4['o105'] + $this->slide4['o109'] : ($this->slide5['b3'] == 1 ? $this->slide4['m105'] + $this->slide4['m109'] : ($this->slide5['b4'] == 1 ? $this->slide4['n105'] + $this->slide4['n109'] : ($this->slide4['l105'] + $this->slide4['l109']))));
        $this->slide5['i84'] = ($this->slide5['c3'] == 2 ? $this->slide4['o106'] + $this->slide4['o110'] : ($this->slide5['b3'] == 1 ? $this->slide4['m106'] + $this->slide4['m110'] : ($this->slide5['b4'] == 1 ? $this->slide4['n106'] + $this->slide4['n110'] : ($this->slide4['l106'] + $this->slide4['l110']))));
        $this->slide5['i85'] = ($this->slide5['c3'] == 2 ? $this->slide4['o107'] + $this->slide4['o111'] : ($this->slide5['b3'] == 1 ? $this->slide4['m107'] + $this->slide4['m111'] : ($this->slide5['b4'] == 1 ? $this->slide4['n107'] + $this->slide4['n111'] : ($this->slide4['l107'] + $this->slide4['l111']))));

//      0-0-0-0
        $this->slide5['i92'] = ($this->slide5['c3'] == 2 ? $this->slide4['o115'] + $this->slide4['o117'] : ($this->slide5['b3'] == 1 ? $this->slide4['m115'] + $this->slide4['m117'] : ($this->slide5['b4'] == 1 ? $this->slide4['n115'] + $this->slide4['n117'] : ($this->slide4['l115'] + $this->slide4['l117']))));
        $this->slide5['i93'] = ($this->slide5['c3'] == 2 ? $this->slide4['o116'] + $this->slide4['o118'] : ($this->slide5['b3'] == 1 ? $this->slide4['m116'] + $this->slide4['m118'] : ($this->slide5['b4'] == 1 ? $this->slide4['n116'] + $this->slide4['n118'] : ($this->slide4['l116'] + $this->slide4['l118']))));


        return $this->slide5;
    }

    public function getVolumeSurgeons(){
        return $this->slide4['g19'] +
        $this->slide4['g20'] +
        $this->slide4['g21'] +
        $this->slide4['g22'] +
        $this->slide4['g23'] +
        $this->slide4['g24'] +
        $this->slide4['g25'] +
        $this->slide4['g26'] +
        $this->slide4['g27'] +
        $this->slide4['g28'] +
        $this->slide4['g29'] +
        $this->slide4['g30'];
    }

    public function getVolumeNurses(){
        return $this->slide4['g31'] +
        $this->slide4['g32'] +
        $this->slide4['g33'] +
        $this->slide4['g34'] +
        $this->slide4['g35'] +
        $this->slide4['g36'];
    }
}