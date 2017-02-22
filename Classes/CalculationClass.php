<?php

/**
 * Created by PhpStorm.
 * User: maxim
 * Date: 22.10.16
 * Time: 23:04
 */
class CalculationClass
{
    protected $slide1;

    protected $slide2;

    protected $slide3;

    protected $slide4;

    public function __construct()
    {
        $duration = new DurationClass();
        $this->slide1 = $duration->slide1();
        $this->slide2 = $duration->slide2();
        $this->slide3 = $duration->slide3();
    }

    public function slide1(){
        return $this->slide1;
    }

    public function slide2(){
        return $this->slide2;
    }

    public function slide3(){
        return $this->slide3;
    }

    public function slide4(){
        $this->slide4['b1']  = 'высокий сегмент';
        $this->slide4['b2']  = 'с увлажнителем';
        $this->slide4['b3']  = 'средний сегмент неопудренные ';
        $this->slide4['b4']  = 'средний сегмент опудренные ';
        $this->slide4['b5']  = 'низкий сегмент неопудренные';
        $this->slide4['b6']  = 'низкий сегмент опудренные';
        $this->slide4['b7']  = 'текстурированные';
        $this->slide4['b8']  = 'акушерские';
        $this->slide4['b9']  = 'повышенной прочности';
        $this->slide4['b10'] = 'повышенной чувствительности';
        $this->slide4['b11'] = '';
        $this->slide4['b12'] = 'синтетические';
        $this->slide4['b13'] = 'система двойных';
        $this->slide4['b14'] = 'система двойных';
        $this->slide4['b15'] = 'АМТ';

        $this->slide4['c1']  = 'Encore Acclaim';
        $this->slide4['c2']  = 'Encore Underglove';
        $this->slide4['c3']  = 'Medi-Grip PF';
        $this->slide4['c4']  = 'Encore Style 42';
        $this->slide4['c5']  = 'Basic Surgical pf';
        $this->slide4['c6']  = 'Basic Surgical pwd';
        $this->slide4['c7']  = 'Biogel M';
        $this->slide4['c8']  = 'Dona 410 pf';
        $this->slide4['c9']  = 'Encore Orthopaedic';
        $this->slide4['c10'] = 'Encore MicrOptic';
        $this->slide4['c11'] = '';
        $this->slide4['c12'] = 'Encore Ultra';
        $this->slide4['c13'] = 'Encore Acclaim';
        $this->slide4['c14'] = 'Biogel Eclipse Indicator';
        $this->slide4['c15'] = 'BioClean Extra';

        $this->slide4['d1']  = 0.053;
        $this->slide4['d2']  = 0.132;
        $this->slide4['d3']  = 0.104;
        $this->slide4['d4']  = 0.104;
        $this->slide4['d5']  = 0.198;
        $this->slide4['d6']  = 0.198;
        $this->slide4['d7']  = 0.08;
        $this->slide4['d8']  = 0.053;
        $this->slide4['d9']  = 0.071;
        $this->slide4['d10'] = 0.058;
        $this->slide4['d11'] = 0.037;
        $this->slide4['d12'] = 0.02;
        $this->slide4['d13'] = 0.053;
        $this->slide4['d14'] = 0.027;
        $this->slide4['d15'] = 0;


//      Аллергии-ГКИ-ИСМП-Специализация

//      Объем
        $this->slide4['d19'] = $this->r($this->slide2['l40']);
        $this->slide4['d20'] = $this->r($this->slide2['e40']);
        $this->slide4['d21'] = $this->r($this->slide2['i40']);
        $this->slide4['d24'] = $this->r($this->slide2['f40']);
        $this->slide4['d25'] = $this->r($this->slide2['j40']+$this->slide2['ay40']);
        $this->slide4['d26'] = $this->r($this->slide2['aa40']);
        $this->slide4['d27'] = $this->r($this->slide2['ai40']);
        $this->slide4['d28'] = $this->r($this->slide2['aq40']);
        $this->slide4['d29'] = $this->r($this->slide2['bg40']);
        $this->slide4['d30'] = $this->r($this->slide2['bo40']);
        $this->slide4['d31'] = $this->r($this->slide2['l41']);
        $this->slide4['d32'] = $this->r($this->slide2['e41']);
        $this->slide4['d35'] = $this->r($this->slide2['f41']);
        $this->slide4['d36'] = $this->r($this->slide2['bo41']);

        $this->slide4['d22'] = $this->r((
            $this->slide2['b40'] - $this->slide4['d19'] - $this->slide4['d20'] - $this->slide4['d21'] - $this->slide4['d24'] -
            $this->slide4['d25'] - $this->slide4['d26'] - $this->slide4['d27'] - $this->slide4['d28'] - $this->slide4['d29'] -
            $this->slide4['d30']) * $this->slide2['q50']
        );
        $this->slide4['d23'] = $this->r((
                $this->slide2['b40'] - $this->slide4['d19'] - $this->slide4['d20'] - $this->slide4['d21'] - $this->slide4['d24'] -
                $this->slide4['d25'] - $this->slide4['d26'] - $this->slide4['d27'] - $this->slide4['d28'] - $this->slide4['d29'] -
                $this->slide4['d30']) * $this->slide2['q51']
        );

        $this->slide4['d33'] = $this->r(
            ($this->slide2['b41'] - $this->slide4['d31'] - $this->slide4['d32'] - $this->slide4['d35'] - $this->slide4['d36']) * $this->slide2['q50']
        );

        $this->slide4['d34'] = $this->r(
            ($this->slide2['b41'] - $this->slide4['d31'] - $this->slide4['d32'] - $this->slide4['d35'] - $this->slide4['d36']) * $this->slide2['q51']
        );

//      Длительность
        $this->slide4['e19'] = $this->r($this->slide3['l40']);
        $this->slide4['e20'] = $this->r($this->slide3['e40']);
        $this->slide4['e21'] = $this->r($this->slide3['i40']);
        $this->slide4['e24'] = $this->r($this->slide3['f40']);
        $this->slide4['e25'] = $this->r($this->slide3['j40']+$this->slide3['ay40']);
        $this->slide4['e26'] = $this->r($this->slide3['aa40']);
        $this->slide4['e27'] = $this->r($this->slide3['ai40']);
        $this->slide4['e28'] = $this->r($this->slide3['aq40']);
        $this->slide4['e29'] = $this->r($this->slide3['bg40']);
        $this->slide4['e30'] = $this->r($this->slide3['bo40']);
        $this->slide4['e31'] = $this->r($this->slide3['l41']);
        $this->slide4['e32'] = $this->r($this->slide3['e41']);
        $this->slide4['e35'] = $this->r($this->slide3['f41']);
        $this->slide4['e36'] = $this->r($this->slide3['bo41']);

        $this->slide4['e22'] = $this->r((
                $this->slide3['b40'] - $this->slide4['e19'] - $this->slide4['e20'] - $this->slide4['e21'] - $this->slide4['e24'] -
                $this->slide4['e25'] - $this->slide4['e26'] - $this->slide4['e27'] - $this->slide4['e28'] - $this->slide4['e29'] -
                $this->slide4['e30']) * $this->slide3['q50']
        );
        $this->slide4['e23'] = $this->r((
                $this->slide3['b40'] - $this->slide4['e19'] - $this->slide4['e20'] - $this->slide4['e21'] - $this->slide4['e24'] -
                $this->slide4['e25'] - $this->slide4['e26'] - $this->slide4['e27'] - $this->slide4['e28'] - $this->slide4['e29'] -
                $this->slide4['e30']) * $this->slide3['q51']
        );

        $this->slide4['e33'] = $this->r(
            ($this->slide3['b41'] - $this->slide4['e31'] - $this->slide4['e32'] - $this->slide4['e35'] - $this->slide4['e36']) * $this->slide3['q50']
        );

        $this->slide4['e34'] = $this->r(
            ($this->slide3['b41'] - $this->slide4['e31'] - $this->slide4['e32'] - $this->slide4['e35'] - $this->slide4['e36']) * $this->slide3['q51']
        );

//      Объем-повреждения
        $this->slide4['f19'] = $this->r($this->slide4['d19']/(1-$this->slide4['d12']));
        $this->slide4['f20'] = $this->r($this->slide4['d20']/(1-$this->slide4['d13']));
        $this->slide4['f21'] = $this->r($this->slide4['d21']/(1-$this->slide4['d15']));
        $this->slide4['f22'] = $this->r($this->slide4['d22']/(1-$this->slide4['d3']));
        $this->slide4['f23'] = $this->r($this->slide4['d23']/(1-$this->slide4['d4']));
        $this->slide4['f24'] = $this->r($this->slide4['d24']/(1-$this->slide4['d13']));
        $this->slide4['f25'] = $this->r($this->slide4['d25']/(1-$this->slide4['d15']));
        $this->slide4['f26'] = $this->r($this->slide4['d26']/(1-$this->slide4['d8']));
        $this->slide4['f27'] = $this->r($this->slide4['d27']/(1-$this->slide4['d9']));
        $this->slide4['f28'] = $this->r($this->slide4['d28']/(1-$this->slide4['d10']));
        $this->slide4['f29'] = $this->r($this->slide4['d29']/(1-$this->slide4['d7']));
        $this->slide4['f30'] = $this->r($this->slide4['d30']/(1-$this->slide4['d2']));
        $this->slide4['f31'] = $this->r($this->slide4['d31']/(1-$this->slide4['d12']));
        $this->slide4['f32'] = $this->r($this->slide4['d32']/(1-$this->slide4['d13']));
        $this->slide4['f33'] = $this->r($this->slide4['d33']/(1-$this->slide4['d3']));
        $this->slide4['f34'] = $this->r($this->slide4['d34']/(1-$this->slide4['d4']));
        $this->slide4['f35'] = $this->r($this->slide4['d35']/(1-$this->slide4['d13']));
        $this->slide4['f36'] = $this->r($this->slide4['d36']/(1-$this->slide4['d2']));

//      Длительность - Повреждения
        $this->slide4['g19'] = $this->r($this->slide4['e19']/(1-$this->slide4['d12']));
        $this->slide4['g20'] = $this->r($this->slide4['e20']/(1-$this->slide4['d13']));
        $this->slide4['g21'] = $this->r($this->slide4['e21']/(1-$this->slide4['d15']));
        $this->slide4['g22'] = $this->r($this->slide4['e22']/(1-$this->slide4['d3']));
        $this->slide4['g23'] = $this->r($this->slide4['e23']/(1-$this->slide4['d4']));
        $this->slide4['g24'] = $this->r($this->slide4['e24']/(1-$this->slide4['d13']));
        $this->slide4['g25'] = $this->r($this->slide4['e25']/(1-$this->slide4['d15']));
        $this->slide4['g26'] = $this->r($this->slide4['e26']/(1-$this->slide4['d8']));
        $this->slide4['g27'] = $this->r($this->slide4['e27']/(1-$this->slide4['d9']));
        $this->slide4['g28'] = $this->r($this->slide4['e28']/(1-$this->slide4['d10']));
        $this->slide4['g29'] = $this->r($this->slide4['e29']/(1-$this->slide4['d7']));
        $this->slide4['g30'] = $this->r($this->slide4['e30']/(1-$this->slide4['d2']));
        $this->slide4['g31'] = $this->r($this->slide4['e31']/(1-$this->slide4['d12']));
        $this->slide4['g32'] = $this->r($this->slide4['e32']/(1-$this->slide4['d13']));
        $this->slide4['g33'] = $this->r($this->slide4['e33']/(1-$this->slide4['d3']));
        $this->slide4['g34'] = $this->r($this->slide4['e34']/(1-$this->slide4['d4']));
        $this->slide4['g35'] = $this->r($this->slide4['e35']/(1-$this->slide4['d13']));
        $this->slide4['g36'] = $this->r($this->slide4['e36']/(1-$this->slide4['d2']));


//      Аллергии-0-ИСМП-Специализация

//      Объем
        $this->slide4['d39'] = $this->r($this->slide2['k40']);
        $this->slide4['d40'] = $this->r($this->slide2['i40']);
        $this->slide4['d43'] = $this->r($this->slide2['j40'] + $this->slide2['aw40']);
        $this->slide4['d44'] = $this->r($this->slide2['y40']);
        $this->slide4['d45'] = $this->r($this->slide2['ag40']);
        $this->slide4['d46'] = $this->r($this->slide2['ao40']);
        $this->slide4['d47'] = $this->r($this->slide2['be40']);
        $this->slide4['d48'] = $this->r($this->slide2['bm40']);
        $this->slide4['d49'] = $this->r($this->slide2['c41']);
        $this->slide4['d52'] = $this->r($this->slide2['bi41']);

        $this->slide4['d41'] = $this->r((
            $this->slide2['b40'] - $this->slide4['d39'] - $this->slide4['d40'] - $this->slide4['d43'] - $this->slide4['d44'] -
            $this->slide4['d45'] - $this->slide4['d46'] - $this->slide4['d47'] - $this->slide4['d48']) * $this->slide2['q50']
        );
        $this->slide4['d42'] = $this->r((
                $this->slide2['b40'] - $this->slide4['d39'] - $this->slide4['d40'] - $this->slide4['d43'] - $this->slide4['d44'] -
                $this->slide4['d45'] - $this->slide4['d46'] - $this->slide4['d47'] - $this->slide4['d48']) * $this->slide2['q51']
        );

        $this->slide4['d50'] = $this->r((
            $this->slide2['b41'] - $this->slide4['d49'] - $this->slide4['d52']) * $this->slide2['q50']
        );

        $this->slide4['d51'] = $this->r((
                $this->slide2['b41'] - $this->slide4['d49'] - $this->slide4['d52']) * $this->slide2['q51']
        );

//      Длительность
        $this->slide4['e39'] = $this->r($this->slide3['k40']);
        $this->slide4['e40'] = $this->r($this->slide3['i40']);
        $this->slide4['e43'] = $this->r($this->slide3['j40'] + $this->slide3['aw40']);
        $this->slide4['e44'] = $this->r($this->slide3['y40']);
        $this->slide4['e45'] = $this->r($this->slide3['ag40']);
        $this->slide4['e46'] = $this->r($this->slide3['ao40']);
        $this->slide4['e47'] = $this->r($this->slide3['be40']);
        $this->slide4['e48'] = $this->r($this->slide3['bm41']);
        $this->slide4['e49'] = $this->r($this->slide3['c41']);
        $this->slide4['e52'] = $this->r($this->slide3['bi41']);

        $this->slide4['e41'] = $this->r((
                $this->slide3['b40'] - $this->slide4['e39'] - $this->slide4['e40'] - $this->slide4['e43'] - $this->slide4['e44'] -
                $this->slide4['e45'] - $this->slide4['e46'] - $this->slide4['e47'] - $this->slide4['e48']) * $this->slide3['q50']
        );
        $this->slide4['e42'] = $this->r((
                $this->slide3['b40'] - $this->slide4['e39'] - $this->slide4['e40'] - $this->slide4['e43'] - $this->slide4['e44'] -
                $this->slide4['e45'] - $this->slide4['e46'] - $this->slide4['e47'] - $this->slide4['e48']) * $this->slide3['q51']
        );

        $this->slide4['e50'] = $this->r((
                $this->slide3['b41'] - $this->slide4['e49'] - $this->slide4['e52']) * $this->slide3['q50']
        );

        $this->slide4['e51'] = $this->r((
                $this->slide3['b41'] - $this->slide4['e49'] - $this->slide4['e52']) * $this->slide3['q51']
        );

//      Объем - Повреждения
        $this->slide4['f39'] = $this->r($this->slide4['d39']/(1-$this->slide4['d12']));
        $this->slide4['f40'] = $this->r($this->slide4['d40']/(1-$this->slide4['d15']));
        $this->slide4['f41'] = $this->r($this->slide4['d41']/(1-$this->slide4['d3']));
        $this->slide4['f42'] = $this->r($this->slide4['d42']/(1-$this->slide4['d4']));
        $this->slide4['f43'] = $this->r($this->slide4['d43']/(1-$this->slide4['d15']));
        $this->slide4['f44'] = $this->r($this->slide4['d44']/(1-$this->slide4['d8']));
        $this->slide4['f45'] = $this->r($this->slide4['d45']/(1-$this->slide4['d9']));
        $this->slide4['f46'] = $this->r($this->slide4['d46']/(1-$this->slide4['d10']));
        $this->slide4['f47'] = $this->r($this->slide4['d47']/(1-$this->slide4['d7']));
        $this->slide4['f48'] = $this->r($this->slide4['d48']/(1-$this->slide4['d2']));
        $this->slide4['f49'] = $this->r($this->slide4['d49']/(1-$this->slide4['d12']));
        $this->slide4['f50'] = $this->r($this->slide4['d50']/(1-$this->slide4['d3']));
        $this->slide4['f51'] = $this->r($this->slide4['d51']/(1-$this->slide4['d4']));
        $this->slide4['f52'] = $this->r($this->slide4['d52']/(1-$this->slide4['d2']));

//      Длительность - Повреждения
        $this->slide4['g39'] = $this->r($this->slide4['e39']/(1-$this->slide4['d12']));
        $this->slide4['g40'] = $this->r($this->slide4['e40']/(1-$this->slide4['d15']));
        $this->slide4['g41'] = $this->r($this->slide4['e41']/(1-$this->slide4['d3']));
        $this->slide4['g42'] = $this->r($this->slide4['e42']/(1-$this->slide4['d4']));
        $this->slide4['g43'] = $this->r($this->slide4['e43']/(1-$this->slide4['d15']));
        $this->slide4['g44'] = $this->r($this->slide4['e44']/(1-$this->slide4['d8']));
        $this->slide4['g45'] = $this->r($this->slide4['e45']/(1-$this->slide4['d9']));
        $this->slide4['g46'] = $this->r($this->slide4['e46']/(1-$this->slide4['d10']));
        $this->slide4['g47'] = $this->r($this->slide4['e47']/(1-$this->slide4['d7']));
        $this->slide4['g48'] = $this->r($this->slide4['e48']/(1-$this->slide4['d2']));
        $this->slide4['g49'] = $this->r($this->slide4['e49']/(1-$this->slide4['d12']));
        $this->slide4['g50'] = $this->r($this->slide4['e50']/(1-$this->slide4['d3']));
        $this->slide4['g51'] = $this->r($this->slide4['e51']/(1-$this->slide4['d4']));
        $this->slide4['g52'] = $this->r($this->slide4['e52']/(1-$this->slide4['d2']));

//      0-ГКИ-ИСМП-Специализация

//      Объем
        $this->slide4['d57'] = $this->r($this->slide2['d40']);
        $this->slide4['d58'] = $this->r($this->slide2['h40'] + $this->slide2['ax40']);
        $this->slide4['d59'] = $this->r($this->slide2['z40']);
        $this->slide4['d60'] = $this->r($this->slide2['ah40']);
        $this->slide4['d61'] = $this->r($this->slide2['ap40']);
        $this->slide4['d62'] = $this->r($this->slide2['bf40']);
        $this->slide4['d65'] = $this->r($this->slide2['d41']);
        $this->slide4['d55'] = $this->r((
            $this->slide2['b40'] - $this->slide4['d57'] - $this->slide4['d58'] - $this->slide4['d59'] - $this->slide4['d60'] -
            $this->slide4['d61'] - $this->slide4['d62']) * $this->slide2['q50']
        );
        $this->slide4['d56'] = $this->r((
                $this->slide2['b40'] - $this->slide4['d57'] - $this->slide4['d58'] - $this->slide4['d59'] - $this->slide4['d60'] -
                $this->slide4['d61'] - $this->slide4['d62']) * $this->slide2['q51']
        );
        $this->slide4['d63'] = $this->r((
                $this->slide2['b41'] - $this->slide4['d65']) * $this->slide2['q50']
        );
        $this->slide4['d64'] = $this->r((
                $this->slide2['b41'] - $this->slide4['d65']) * $this->slide2['q51']
        );

//      Длительность
        $this->slide4['e57'] = $this->r($this->slide3['d40']);
        $this->slide4['e58'] = $this->r($this->slide3['h40'] + $this->slide3['ax40']);
        $this->slide4['e59'] = $this->r($this->slide3['z40']);
        $this->slide4['e60'] = $this->r($this->slide3['ah40']);
        $this->slide4['e61'] = $this->r($this->slide3['ap40']);
        $this->slide4['e62'] = $this->r($this->slide3['bf40']);
        $this->slide4['e65'] = $this->r($this->slide3['d41']);
        $this->slide4['e55'] = $this->r((
                $this->slide3['b40'] - $this->slide4['e57'] - $this->slide4['e58'] - $this->slide4['e59'] - $this->slide4['e60'] -
                $this->slide4['e61'] - $this->slide4['e62']) * $this->slide3['q50']
        );
        $this->slide4['e56'] = $this->r((
                $this->slide3['b40'] - $this->slide4['e57'] - $this->slide4['e58'] - $this->slide4['e59'] - $this->slide4['e60'] -
                $this->slide4['e61'] - $this->slide4['e62']) * $this->slide3['q51']
        );
        $this->slide4['e63'] = $this->r((
                $this->slide3['b41'] - $this->slide4['e65']) * $this->slide3['q50']
        );
        $this->slide4['e64'] = $this->r((
                $this->slide3['b41'] - $this->slide4['e65']) * $this->slide3['q51']
        );

//      Объем - Повреждения
        $this->slide4['f55'] = $this->r($this->slide4['d55']/(1-$this->slide4['d3']));
        $this->slide4['f56'] = $this->r($this->slide4['d56']/(1-$this->slide4['d4']));
        $this->slide4['f57'] = $this->r($this->slide4['d57']/(1-$this->slide4['d13']));
        $this->slide4['f58'] = $this->r($this->slide4['d58']/(1-$this->slide4['d15']));
        $this->slide4['f59'] = $this->r($this->slide4['d59']/(1-$this->slide4['d8']));
        $this->slide4['f60'] = $this->r($this->slide4['d60']/(1-$this->slide4['d9']));
        $this->slide4['f61'] = $this->r($this->slide4['d61']/(1-$this->slide4['d10']));
        $this->slide4['f62'] = $this->r($this->slide4['d62']/(1-$this->slide4['d7']));
        $this->slide4['f63'] = $this->r($this->slide4['d63']/(1-$this->slide4['d3']));
        $this->slide4['f64'] = $this->r($this->slide4['d64']/(1-$this->slide4['d4']));
        $this->slide4['f65'] = $this->r($this->slide4['d65']/(1-$this->slide4['d13']));

//      Длительность - Повреждения
        $this->slide4['g55'] = $this->r($this->slide4['e55']/(1-$this->slide4['d3']));
        $this->slide4['g56'] = $this->r($this->slide4['e56']/(1-$this->slide4['d4']));
        $this->slide4['g57'] = $this->r($this->slide4['e57']/(1-$this->slide4['d13']));
        $this->slide4['g58'] = $this->r($this->slide4['e58']/(1-$this->slide4['d15']));
        $this->slide4['g59'] = $this->r($this->slide4['e59']/(1-$this->slide4['d8']));
        $this->slide4['g60'] = $this->r($this->slide4['e60']/(1-$this->slide4['d9']));
        $this->slide4['g61'] = $this->r($this->slide4['e61']/(1-$this->slide4['d10']));
        $this->slide4['g62'] = $this->r($this->slide4['e62']/(1-$this->slide4['d7']));
        $this->slide4['g63'] = $this->r($this->slide4['e63']/(1-$this->slide4['d3']));
        $this->slide4['g64'] = $this->r($this->slide4['e64']/(1-$this->slide4['d4']));
        $this->slide4['g65'] = $this->r($this->slide4['e65']/(1-$this->slide4['d13']));

//      Аллергии-0-0-Специализация

//      Объем
        $this->slide4['d68'] = $this->r($this->slide2['c40']);
        $this->slide4['d71'] = $this->r($this->slide2['as40']);
        $this->slide4['d72'] = $this->r($this->slide2['u40']);
        $this->slide4['d73'] = $this->r($this->slide2['ac40']);
        $this->slide4['d74'] = $this->r($this->slide2['ak40']);
        $this->slide4['d75'] = $this->r($this->slide2['ba40']);
        $this->slide4['d76'] = $this->r($this->slide2['bi40']);
        $this->slide4['d77'] = $this->r($this->slide2['c41']);
        $this->slide4['d80'] = $this->r($this->slide2['bi41']);

        $this->slide4['d69'] = $this->r((
                $this->slide2['b40'] - $this->slide4['d68'] - $this->slide4['d71'] - $this->slide4['d72'] - $this->slide4['d73'] -
                $this->slide4['d74'] - $this->slide4['d75'] - $this->slide4['d76']) * $this->slide2['q50']
        );
        $this->slide4['d70'] = $this->r((
                $this->slide2['b40'] - $this->slide4['d68'] - $this->slide4['d71'] - $this->slide4['d72'] - $this->slide4['d73'] -
                $this->slide4['d74'] - $this->slide4['d75'] - $this->slide4['d76']) * $this->slide2['q51']
        );
        $this->slide4['d78'] = $this->r((
                $this->slide2['b41'] - $this->slide4['d77'] - $this->slide4['d80']) * $this->slide2['q50']
        );
        $this->slide4['d79'] = $this->r((
                $this->slide2['b41'] - $this->slide4['d77'] - $this->slide4['d80']) * $this->slide2['q51']
        );

//      Длительность
        $this->slide4['e68'] = $this->r($this->slide3['c40']);
        $this->slide4['e71'] = $this->r($this->slide3['as40']);
        $this->slide4['e72'] = $this->r($this->slide3['u40']);
        $this->slide4['e73'] = $this->r($this->slide3['ac40']);
        $this->slide4['e74'] = $this->r($this->slide3['ak40']);
        $this->slide4['e75'] = $this->r($this->slide3['ba40']);
        $this->slide4['e76'] = $this->r($this->slide3['bi40']);
        $this->slide4['e77'] = $this->r($this->slide3['c41']);
        $this->slide4['e80'] = $this->r($this->slide3['bi41']);

        $this->slide4['e69'] = $this->r((
                $this->slide2['b40'] - $this->slide4['e68'] - $this->slide4['e71'] - $this->slide4['e72'] - $this->slide4['e73'] -
                $this->slide4['e74'] - $this->slide4['e75'] - $this->slide4['e76']) * $this->slide3['q50']
        );
        $this->slide4['e70'] = $this->r((
                $this->slide2['b40'] - $this->slide4['e68'] - $this->slide4['e71'] - $this->slide4['e72'] - $this->slide4['e73'] -
                $this->slide4['e74'] - $this->slide4['e75'] - $this->slide4['e76']) * $this->slide3['q51']
        );
        $this->slide4['e78'] = $this->r((
                $this->slide2['b41'] - $this->slide4['e77'] - $this->slide4['e80']) * $this->slide3['q50']
        );
        $this->slide4['e79'] = $this->r((
                $this->slide2['b41'] - $this->slide4['e77'] - $this->slide4['e80']) * $this->slide3['q51']
        );

//      Объем - Повреждения
        $this->slide4['f68'] = $this->r($this->slide4['d68']/(1-$this->slide4['d12']));
        $this->slide4['f69'] = $this->r($this->slide4['d69']/(1-$this->slide4['d3']));
        $this->slide4['f70'] = $this->r($this->slide4['d70']/(1-$this->slide4['d4']));
        $this->slide4['f71'] = $this->r($this->slide4['d71']/(1-$this->slide4['d15']));
        $this->slide4['f72'] = $this->r($this->slide4['d72']/(1-$this->slide4['d8']));
        $this->slide4['f73'] = $this->r($this->slide4['d73']/(1-$this->slide4['d9']));
        $this->slide4['f74'] = $this->r($this->slide4['d74']/(1-$this->slide4['d10']));
        $this->slide4['f75'] = $this->r($this->slide4['d75']/(1-$this->slide4['d7']));
        $this->slide4['f76'] = $this->r($this->slide4['d76']/(1-$this->slide4['d2']));
        $this->slide4['f77'] = $this->r($this->slide4['d77']/(1-$this->slide4['d12']));
        $this->slide4['f78'] = $this->r($this->slide4['d78']/(1-$this->slide4['d3']));
        $this->slide4['f79'] = $this->r($this->slide4['d79']/(1-$this->slide4['d4']));
        $this->slide4['f80'] = $this->r($this->slide4['d80']/(1-$this->slide4['d2']));

//      Длительность - Повреждения
        $this->slide4['g68'] = $this->r($this->slide4['e68']/(1-$this->slide4['d12']));
        $this->slide4['g69'] = $this->r($this->slide4['e69']/(1-$this->slide4['d3']));
        $this->slide4['g70'] = $this->r($this->slide4['e70']/(1-$this->slide4['d4']));
        $this->slide4['g71'] = $this->r($this->slide4['e71']/(1-$this->slide4['d15']));
        $this->slide4['g72'] = $this->r($this->slide4['e72']/(1-$this->slide4['d8']));
        $this->slide4['g73'] = $this->r($this->slide4['e73']/(1-$this->slide4['d9']));
        $this->slide4['g74'] = $this->r($this->slide4['e74']/(1-$this->slide4['d10']));
        $this->slide4['g75'] = $this->r($this->slide4['e75']/(1-$this->slide4['d7']));
        $this->slide4['g76'] = $this->r($this->slide4['e76']/(1-$this->slide4['d2']));
        $this->slide4['g77'] = $this->r($this->slide4['e77']/(1-$this->slide4['d12']));
        $this->slide4['g78'] = $this->r($this->slide4['e78']/(1-$this->slide4['d3']));
        $this->slide4['g79'] = $this->r($this->slide4['e79']/(1-$this->slide4['d4']));
        $this->slide4['g80'] = $this->r($this->slide4['e80']/(1-$this->slide4['d2']));

//      Аллергии-0-ИСМП-0

//      Объем
        $this->slide4['d83'] = $this->r($this->slide2['k40']);
        $this->slide4['d84'] = $this->r($this->slide2['i40']);
        $this->slide4['d87'] = $this->r($this->slide2['j40']);
        $this->slide4['d88'] = $this->r($this->slide2['bm40']);
        $this->slide4['d89'] = $this->r($this->slide2['k40']);
        $this->slide4['d92'] = $this->r($this->slide2['bm41']);
        $this->slide4['d85'] = $this->r((
                $this->slide2['b40'] - $this->slide4['d83'] - $this->slide4['d84'] - $this->slide4['d87'] - $this->slide4['d88']) * $this->slide2['q50']
        );
        $this->slide4['d86'] = $this->r((
                $this->slide2['b40'] - $this->slide4['d83'] - $this->slide4['d84'] - $this->slide4['d87'] - $this->slide4['d88']) * $this->slide2['q51']
        );
        $this->slide4['d90'] = $this->r((
                $this->slide2['b41'] - $this->slide4['d89'] - $this->slide4['d92']) * $this->slide2['q50']
        );
        $this->slide4['d91'] = $this->r((
                $this->slide2['b41'] - $this->slide4['d89'] - $this->slide4['d92']) * $this->slide2['q51']
        );

//      Длительность
        $this->slide4['e83'] = $this->r($this->slide3['k40']);
        $this->slide4['e84'] = $this->r($this->slide3['i40']);
        $this->slide4['e87'] = $this->r($this->slide3['j40']);
        $this->slide4['e88'] = $this->r($this->slide3['bm40']);
        $this->slide4['e89'] = $this->r($this->slide3['k40']);
        $this->slide4['e92'] = $this->r($this->slide3['bm41']);
        $this->slide4['e85'] = $this->r((
                $this->slide3['e40'] - $this->slide4['e83'] - $this->slide4['e84'] - $this->slide4['e87'] - $this->slide4['e88']) * $this->slide3['q50']
        );
        $this->slide4['e86'] = $this->r((
                $this->slide3['e40'] - $this->slide4['e83'] - $this->slide4['e84'] - $this->slide4['e87'] - $this->slide4['e88']) * $this->slide3['q51']
        );
        $this->slide4['e90'] = $this->r((
                $this->slide3['b41'] - $this->slide4['e89'] - $this->slide4['e92']) * $this->slide3['q50']
        );
        $this->slide4['e91'] = $this->r((
                $this->slide3['b41'] - $this->slide4['e89'] - $this->slide4['e92']) * $this->slide3['q51']
        );

//      Объем - Повреждения
        $this->slide4['f83'] = $this->r($this->slide4['d83']/(1-$this->slide4['d12']));
        $this->slide4['f84'] = $this->r($this->slide4['d84']/(1-$this->slide4['d15']));
        $this->slide4['f85'] = $this->r($this->slide4['d85']/(1-$this->slide4['d3']));
        $this->slide4['f86'] = $this->r($this->slide4['d86']/(1-$this->slide4['d4']));
        $this->slide4['f87'] = $this->r($this->slide4['d87']/(1-$this->slide4['d15']));
        $this->slide4['f88'] = $this->r($this->slide4['d88']/(1-$this->slide4['d2']));
        $this->slide4['f89'] = $this->r($this->slide4['d89']/(1-$this->slide4['d12']));
        $this->slide4['f90'] = $this->r($this->slide4['d90']/(1-$this->slide4['d3']));
        $this->slide4['f91'] = $this->r($this->slide4['d91']/(1-$this->slide4['d4']));
        $this->slide4['f92'] = $this->r($this->slide4['d92']/(1-$this->slide4['d2']));

//      Длительность - Повреждения
        $this->slide4['g83'] = $this->r($this->slide4['e83']/(1-$this->slide4['d12']));
        $this->slide4['g84'] = $this->r($this->slide4['e84']/(1-$this->slide4['d15']));
        $this->slide4['g85'] = $this->r($this->slide4['e85']/(1-$this->slide4['d3']));
        $this->slide4['g86'] = $this->r($this->slide4['e86']/(1-$this->slide4['d4']));
        $this->slide4['g87'] = $this->r($this->slide4['e87']/(1-$this->slide4['d15']));
        $this->slide4['g88'] = $this->r($this->slide4['e88']/(1-$this->slide4['d2']));
        $this->slide4['g89'] = $this->r($this->slide4['e89']/(1-$this->slide4['d12']));
        $this->slide4['g90'] = $this->r($this->slide4['e90']/(1-$this->slide4['d3']));
        $this->slide4['g91'] = $this->r($this->slide4['e91']/(1-$this->slide4['d4']));
        $this->slide4['g92'] = $this->r($this->slide4['e92']/(1-$this->slide4['d2']));

//      0-ГКИ-ИСМП-0

//      Объем
        $this->slide4['d97'] =  $this->r($this->slide2['d40']);
        $this->slide4['d98'] =  $this->r($this->slide2['h40']);
        $this->slide4['d101'] = $this->r($this->slide2['d41']);
        $this->slide4['d95'] = $this->r((
                $this->slide2['b40'] - $this->slide4['d97'] - $this->slide4['d98']) * $this->slide2['q50']
        );
        $this->slide4['d96'] = $this->r((
                $this->slide2['b40'] - $this->slide4['d97'] - $this->slide4['d98']) * $this->slide2['q51']
        );
        $this->slide4['d99'] = $this->r((
                $this->slide2['b41'] - $this->slide4['d101']) * $this->slide2['q50']
        );
        $this->slide4['d100'] = $this->r((
                $this->slide2['b41'] - $this->slide4['d101']) * $this->slide2['q51']
        );

//      Длительность
        $this->slide4['e97'] =  $this->r($this->slide3['d40']);
        $this->slide4['e98'] =  $this->r($this->slide3['h40']);
        $this->slide4['e101'] = $this->r($this->slide3['d41']);
        $this->slide4['e95'] = $this->r((
                $this->slide3['b40'] - $this->slide4['e97'] - $this->slide4['e98']) * $this->slide3['q50']
        );
        $this->slide4['e96'] = $this->r((
                $this->slide3['b40'] - $this->slide4['e97'] - $this->slide4['e98']) * $this->slide3['q50']
        );
        $this->slide4['e99'] = $this->r((
                $this->slide3['b41'] - $this->slide4['e101']) * $this->slide3['q50']
        );
        $this->slide4['e100'] = $this->r((
                $this->slide3['b41'] - $this->slide4['e101']) * $this->slide3['q51']
        );

//      Объем - Повреждения
        $this->slide4['f95'] =  $this->r($this->slide4['d95'] /(1-$this->slide4['d3']));
        $this->slide4['f96'] =  $this->r($this->slide4['d96'] /(1-$this->slide4['d4']));
        $this->slide4['f97'] =  $this->r($this->slide4['d97'] /(1-$this->slide4['d13']));
        $this->slide4['f98'] =  $this->r($this->slide4['d98'] /(1-$this->slide4['d15']));
        $this->slide4['f99'] =  $this->r($this->slide4['d99'] /(1-$this->slide4['d3']));
        $this->slide4['f100'] = $this->r($this->slide4['d100']/(1-$this->slide4['d4']));
        $this->slide4['f101'] = $this->r($this->slide4['d101']/(1-$this->slide4['d13']));

//      Длительность - Повреждения
        $this->slide4['g95'] =  $this->r($this->slide4['e95'] /(1-$this->slide4['d3']));
        $this->slide4['g96'] =  $this->r($this->slide4['e96'] /(1-$this->slide4['d4']));
        $this->slide4['g97'] =  $this->r($this->slide4['e97'] /(1-$this->slide4['d13']));
        $this->slide4['g98'] =  $this->r($this->slide4['e98'] /(1-$this->slide4['d15']));
        $this->slide4['g99'] =  $this->r($this->slide4['e99'] /(1-$this->slide4['d3']));
        $this->slide4['g100'] = $this->r($this->slide4['e100']/(1-$this->slide4['d4']));
        $this->slide4['g101'] = $this->r($this->slide4['e101']/(1-$this->slide4['d13']));

//      0-0-0-Специализация

//      Объем
        $this->slide4['d106'] = $this->r($this->slide2['ar40']);
        $this->slide4['d107'] = $this->r($this->slide2['t40']);
        $this->slide4['d108'] = $this->r($this->slide2['ab40']);
        $this->slide4['d109'] = $this->r($this->slide2['aj40']);
        $this->slide4['d110'] = $this->r($this->slide2['az40']);
        $this->slide4['d104'] = $this->r((
                $this->slide2['b40'] - $this->slide4['d106'] - $this->slide4['d107'] - $this->slide4['d108'] - $this->slide4['d109'] - $this->slide4['d110']) * $this->slide2['q50']
        );
        $this->slide4['d105'] = $this->r((
                $this->slide2['b40'] - $this->slide4['d106'] - $this->slide4['d107'] - $this->slide4['d108'] - $this->slide4['d109'] - $this->slide4['d110']) * $this->slide2['q51']
        );
        $this->slide4['d111'] = $this->r( $this->slide2['b41'] * $this->slide2['q50']);
        $this->slide4['d112'] = $this->r( $this->slide2['b41'] * $this->slide2['q51']);

//      Длительность
        $this->slide4['e106'] = $this->r($this->slide3['ar40']);
        $this->slide4['e107'] = $this->r($this->slide3['t40']);
        $this->slide4['e108'] = $this->r($this->slide3['ab40']);
        $this->slide4['e109'] = $this->r($this->slide3['aj40']);
        $this->slide4['e110'] = $this->r($this->slide3['az40']);
        $this->slide4['e104'] = $this->r((
                $this->slide3['b40'] - $this->slide4['e106'] - $this->slide4['e107'] - $this->slide4['e108'] - $this->slide4['e109'] - $this->slide4['e110']) * $this->slide3['q50']
        );
        $this->slide4['e105'] = $this->r((
                $this->slide3['b40'] - $this->slide4['e106'] - $this->slide4['e107'] - $this->slide4['e108'] - $this->slide4['e109'] - $this->slide4['e110']) * $this->slide3['q51']
        );
        $this->slide4['e111'] = $this->r( $this->slide3['b41'] * $this->slide3['q50']);
        $this->slide4['e112'] = $this->r( $this->slide3['b41'] * $this->slide3['q51']);

//      Объем - Повреждения
        $this->slide4['f104'] = $this->r($this->slide4['d104'] /(1-$this->slide4['d3']));
        $this->slide4['f105'] = $this->r($this->slide4['d105'] /(1-$this->slide4['d4']));
        $this->slide4['f106'] = $this->r($this->slide4['d106'] /(1-$this->slide4['d15']));
        $this->slide4['f107'] = $this->r($this->slide4['d107'] /(1-$this->slide4['d8']));
        $this->slide4['f108'] = $this->r($this->slide4['d108'] /(1-$this->slide4['d9']));
        $this->slide4['f109'] = $this->r($this->slide4['d109'] /(1-$this->slide4['d10']));
        $this->slide4['f110'] = $this->r($this->slide4['d110'] /(1-$this->slide4['d7']));
        $this->slide4['f111'] = $this->r($this->slide4['d111'] /(1-$this->slide4['d3']));
        $this->slide4['f112'] = $this->r($this->slide4['d112'] /(1-$this->slide4['d4']));

//      Длительность - Повреждения
        $this->slide4['g104'] = $this->r($this->slide4['e104'] /(1-$this->slide4['d3']));
        $this->slide4['g105'] = $this->r($this->slide4['e105'] /(1-$this->slide4['d4']));
        $this->slide4['g106'] = $this->r($this->slide4['e106'] /(1-$this->slide4['d15']));
        $this->slide4['g107'] = $this->r($this->slide4['e107'] /(1-$this->slide4['d8']));
        $this->slide4['g108'] = $this->r($this->slide4['e108'] /(1-$this->slide4['d9']));
        $this->slide4['g109'] = $this->r($this->slide4['e109'] /(1-$this->slide4['d10']));
        $this->slide4['g110'] = $this->r($this->slide4['e110'] /(1-$this->slide4['d7']));
        $this->slide4['g111'] = $this->r($this->slide4['e111'] /(1-$this->slide4['d3']));
        $this->slide4['g112'] = $this->r($this->slide4['e112'] /(1-$this->slide4['d4']));

//      0-0-ИСМП-0

//      Объем
        $this->slide4['d117'] = $this->r($this->slide2['h40']);
        $this->slide4['d115'] = $this->r((
                $this->slide2['b40'] - $this->slide4['d117']) * $this->slide2['q50']
        );
        $this->slide4['d116'] = $this->r((
                $this->slide2['b40'] - $this->slide4['d117']) * $this->slide2['q51']
        );
        $this->slide4['d118'] = $this->r( $this->slide2['b41'] * $this->slide2['q50']);
        $this->slide4['d119'] = $this->r( $this->slide2['b41'] * $this->slide2['q51']);

//      Длительность
        $this->slide4['e117'] = $this->r($this->slide3['h40']);
        $this->slide4['e115'] = $this->r((
                $this->slide3['b40'] - $this->slide4['e117']) * $this->slide3['q50']
        );
        $this->slide4['e116'] = $this->r((
                $this->slide3['b40'] - $this->slide4['e117']) * $this->slide3['q51']
        );
        $this->slide4['e118'] = $this->r( $this->slide3['b41'] * $this->slide3['q50']);
        $this->slide4['e119'] = $this->r( $this->slide3['b41'] * $this->slide3['q51']);

//      Объем - Повреждения
        $this->slide4['f115'] = $this->r($this->slide4['d115'] /(1-$this->slide4['d3']));
        $this->slide4['f116'] = $this->r($this->slide4['d116'] /(1-$this->slide4['d4']));
        $this->slide4['f117'] = $this->r($this->slide4['d117'] /(1-$this->slide4['d15']));
        $this->slide4['f118'] = $this->r($this->slide4['d118'] /(1-$this->slide4['d3']));
        $this->slide4['f119'] = $this->r($this->slide4['d119'] /(1-$this->slide4['d4']));

//      Длительность - Повреждения
        $this->slide4['g115'] = $this->r($this->slide4['e115'] /(1-$this->slide4['d3']));
        $this->slide4['g116'] = $this->r($this->slide4['e116'] /(1-$this->slide4['d4']));
        $this->slide4['g117'] = $this->r($this->slide4['e117'] /(1-$this->slide4['d15']));
        $this->slide4['g118'] = $this->r($this->slide4['e118'] /(1-$this->slide4['d3']));
        $this->slide4['g119'] = $this->r($this->slide4['e119'] /(1-$this->slide4['d4']));

#######################
##    Второй ряд    ###
#######################

//      Аллергии-ГКИ-0-Специализация

//      Объем
        $this->slide4['l19'] = $this->r($this->slide2['g40']);
        $this->slide4['l20'] = $this->r($this->slide2['e40']);
        $this->slide4['l23'] = $this->r($this->slide2['f40']);
        $this->slide4['l24'] = $this->r($this->slide2['av40']);
        $this->slide4['l25'] = $this->r($this->slide2['x40']);
        $this->slide4['l26'] = $this->r($this->slide2['af40']);
        $this->slide4['l27'] = $this->r($this->slide2['an40']);
        $this->slide4['l28'] = $this->r($this->slide2['bd40']);
        $this->slide4['l29'] = $this->r($this->slide2['bl40']);
        $this->slide4['l30'] = $this->r($this->slide2['g41']);
        $this->slide4['l31'] = $this->r($this->slide2['e41']);
        $this->slide4['l34'] = $this->r($this->slide2['f41']);
        $this->slide4['l35'] = $this->r($this->slide2['bl41']);


        $this->slide4['l21'] = $this->r((
                $this->slide2['b40'] - $this->slide4['l19'] - $this->slide4['l20'] - $this->slide4['l23'] - $this->slide4['l24'] -
                $this->slide4['l25'] - $this->slide4['l26'] - $this->slide4['l27'] - $this->slide4['l28'] - $this->slide4['l29']
                ) * $this->slide2['q50']
        );
        $this->slide4['l22'] = $this->r((
                $this->slide2['b40'] - $this->slide4['l19'] - $this->slide4['l20'] - $this->slide4['l23'] - $this->slide4['l24'] -
                $this->slide4['l25'] - $this->slide4['l26'] - $this->slide4['l27'] - $this->slide4['l28'] - $this->slide4['l29']
                ) * $this->slide2['q51']
        );

        $this->slide4['l32'] = $this->r(
            ($this->slide2['b41'] - $this->slide4['l30'] - $this->slide4['l31'] - $this->slide4['l34'] - $this->slide4['l35']) * $this->slide2['q50']
        );

        $this->slide4['l33'] = $this->r(
            ($this->slide2['b41'] - $this->slide4['l30'] - $this->slide4['l31'] - $this->slide4['l34'] - $this->slide4['l35']) * $this->slide2['q51']
        );

//      Длительность
        $this->slide4['m19'] = $this->r($this->slide3['g40']);
        $this->slide4['m20'] = $this->r($this->slide3['e40']);
        $this->slide4['m23'] = $this->r($this->slide3['f40']);
        $this->slide4['m24'] = $this->r($this->slide3['av40']);
        $this->slide4['m25'] = $this->r($this->slide3['x40']);
        $this->slide4['m26'] = $this->r($this->slide3['af40']);
        $this->slide4['m27'] = $this->r($this->slide3['an40']);
        $this->slide4['m28'] = $this->r($this->slide3['bd40']);
        $this->slide4['m29'] = $this->r($this->slide3['bl40']);
        $this->slide4['m30'] = $this->r($this->slide3['g41']);
        $this->slide4['m31'] = $this->r($this->slide3['e41']);
        $this->slide4['m34'] = $this->r($this->slide3['f41']);
        $this->slide4['m35'] = $this->r($this->slide3['bl41']);


        $this->slide4['m21'] = $this->r((
                $this->slide3['b40'] - $this->slide4['m19'] - $this->slide4['m20'] - $this->slide4['m23'] - $this->slide4['m24'] -
                $this->slide4['m25'] - $this->slide4['m26'] - $this->slide4['m27'] - $this->slide4['m28'] - $this->slide4['m29']
                ) * $this->slide3['q50']
        );
        $this->slide4['m22'] = $this->r((
                $this->slide3['b40'] - $this->slide4['m19'] - $this->slide4['m20'] - $this->slide4['m23'] - $this->slide4['m24'] -
                $this->slide4['m25'] - $this->slide4['m26'] - $this->slide4['m27'] - $this->slide4['m28'] - $this->slide4['m29']
                ) * $this->slide3['q51']
        );

        $this->slide4['m32'] = $this->r(
            ($this->slide3['b41'] - $this->slide4['m30'] - $this->slide4['m31'] - $this->slide4['m34'] - $this->slide4['m35']) * $this->slide3['q50']
        );

        $this->slide4['m33'] = $this->r(
            ($this->slide3['b41'] - $this->slide4['m30'] - $this->slide4['m31'] - $this->slide4['m34'] - $this->slide4['m35']) * $this->slide3['q51']
        );

//      Объем-повреждения
        $this->slide4['n19'] = $this->r($this->slide4['l19']/(1-$this->slide4['d12']));
        $this->slide4['n20'] = $this->r($this->slide4['l20']/(1-$this->slide4['d13']));
        $this->slide4['n21'] = $this->r($this->slide4['l22']/(1-$this->slide4['d3']));
        $this->slide4['n22'] = $this->r($this->slide4['l23']/(1-$this->slide4['d4']));
        $this->slide4['n23'] = $this->r($this->slide4['l24']/(1-$this->slide4['d13']));
        $this->slide4['n24'] = $this->r($this->slide4['l25']/(1-$this->slide4['d15']));
        $this->slide4['n25'] = $this->r($this->slide4['l26']/(1-$this->slide4['d8']));
        $this->slide4['n26'] = $this->r($this->slide4['l27']/(1-$this->slide4['d9']));
        $this->slide4['n27'] = $this->r($this->slide4['l28']/(1-$this->slide4['d10']));
        $this->slide4['n28'] = $this->r($this->slide4['l29']/(1-$this->slide4['d7']));
        $this->slide4['n29'] = $this->r($this->slide4['l30']/(1-$this->slide4['d2']));
        $this->slide4['n30'] = $this->r($this->slide4['l31']/(1-$this->slide4['d12']));
        $this->slide4['n31'] = $this->r($this->slide4['l32']/(1-$this->slide4['d13']));
        $this->slide4['n32'] = $this->r($this->slide4['l33']/(1-$this->slide4['d3']));
        $this->slide4['n33'] = $this->r($this->slide4['l34']/(1-$this->slide4['d4']));
        $this->slide4['n34'] = $this->r($this->slide4['l35']/(1-$this->slide4['d13']));
        $this->slide4['n35'] = $this->r($this->slide4['l36']/(1-$this->slide4['d2']));

//      Длительность - Повреждения
        $this->slide4['o19'] = $this->r($this->slide4['m19']/(1-$this->slide4['d12']));
        $this->slide4['o20'] = $this->r($this->slide4['m20']/(1-$this->slide4['d13']));
        $this->slide4['o21'] = $this->r($this->slide4['m22']/(1-$this->slide4['d3']));
        $this->slide4['o22'] = $this->r($this->slide4['m23']/(1-$this->slide4['d4']));
        $this->slide4['o23'] = $this->r($this->slide4['m24']/(1-$this->slide4['d13']));
        $this->slide4['o24'] = $this->r($this->slide4['m25']/(1-$this->slide4['d15']));
        $this->slide4['o25'] = $this->r($this->slide4['m26']/(1-$this->slide4['d8']));
        $this->slide4['o26'] = $this->r($this->slide4['m27']/(1-$this->slide4['d9']));
        $this->slide4['o27'] = $this->r($this->slide4['m28']/(1-$this->slide4['d10']));
        $this->slide4['o28'] = $this->r($this->slide4['m29']/(1-$this->slide4['d7']));
        $this->slide4['o29'] = $this->r($this->slide4['m30']/(1-$this->slide4['d2']));
        $this->slide4['o30'] = $this->r($this->slide4['m31']/(1-$this->slide4['d12']));
        $this->slide4['o31'] = $this->r($this->slide4['m32']/(1-$this->slide4['d13']));
        $this->slide4['o32'] = $this->r($this->slide4['m33']/(1-$this->slide4['d3']));
        $this->slide4['o33'] = $this->r($this->slide4['m34']/(1-$this->slide4['d4']));
        $this->slide4['o34'] = $this->r($this->slide4['m35']/(1-$this->slide4['d13']));
        $this->slide4['o35'] = $this->r($this->slide4['m36']/(1-$this->slide4['d2']));

//      Аллергии-ГКИ-ИСМП-0

//      Объем
        $this->slide4['l39'] = $this->r($this->slide2['l40']);
        $this->slide4['l40'] = $this->r($this->slide2['e40']);
        $this->slide4['l41'] = $this->r($this->slide2['i40']);
        $this->slide4['l44'] = $this->r($this->slide2['f40']);
        $this->slide4['l45'] = $this->r($this->slide2['j40']);
        $this->slide4['l46'] = $this->r($this->slide2['bo40']);
        $this->slide4['l47'] = $this->r($this->slide2['l41']);
        $this->slide4['l48'] = $this->r($this->slide2['e41']);
        $this->slide4['l51'] = $this->r($this->slide2['f41']);
        $this->slide4['l52'] = $this->r($this->slide2['bo41']);

        $this->slide4['l42'] = $this->r((
                $this->slide2['b40'] - $this->slide4['l39'] - $this->slide4['l40'] - $this->slide4['l41'] - $this->slide4['l44'] -
                $this->slide4['l45'] - $this->slide4['l46']) * $this->slide2['q50']
        );
        $this->slide4['l43'] = $this->r((
                $this->slide2['b40'] - $this->slide4['l39'] - $this->slide4['l40'] - $this->slide4['l41'] - $this->slide4['l44'] -
                $this->slide4['l45'] - $this->slide4['l46']) * $this->slide2['q51']
        );

        $this->slide4['l49'] = $this->r((
                $this->slide2['b41'] - $this->slide4['l47'] - $this->slide4['l48'] - $this->slide4['l51'] - $this->slide4['l52']) * $this->slide2['q50']
        );

        $this->slide4['l50'] = $this->r((
                $this->slide2['b41'] - $this->slide4['l47'] - $this->slide4['l48'] - $this->slide4['l51'] - $this->slide4['l52']) * $this->slide2['q51']
        );

//      Длительность
        $this->slide4['m39'] = $this->r($this->slide3['l40']);
        $this->slide4['m40'] = $this->r($this->slide3['e40']);
        $this->slide4['m41'] = $this->r($this->slide3['i40']);
        $this->slide4['m44'] = $this->r($this->slide3['f40']);
        $this->slide4['m45'] = $this->r($this->slide3['j40']);
        $this->slide4['m46'] = $this->r($this->slide3['bo40']);
        $this->slide4['m47'] = $this->r($this->slide3['l41']);
        $this->slide4['m48'] = $this->r($this->slide3['e41']);
        $this->slide4['m51'] = $this->r($this->slide3['f41']);
        $this->slide4['m52'] = $this->r($this->slide3['bo41']);

        $this->slide4['m42'] = $this->r((
                $this->slide3['b40'] - $this->slide4['m39'] - $this->slide4['m40'] - $this->slide4['m41'] - $this->slide4['m44'] -
                $this->slide4['m45'] - $this->slide4['m46']) * $this->slide3['q50']
        );
        $this->slide4['m43'] = $this->r((
                $this->slide3['b40'] - $this->slide4['m39'] - $this->slide4['m40'] - $this->slide4['m41'] - $this->slide4['m44'] -
                $this->slide4['m45'] - $this->slide4['m46']) * $this->slide3['q51']
        );

        $this->slide4['m49'] = $this->r((
                $this->slide3['b41'] - $this->slide4['m47'] - $this->slide4['m48'] - $this->slide4['m51'] - $this->slide4['m52']) * $this->slide3['q50']
        );

        $this->slide4['m50'] = $this->r((
                $this->slide3['b41'] - $this->slide4['m47'] - $this->slide4['m48'] - $this->slide4['m51'] - $this->slide4['m52']) * $this->slide3['q51']
        );

//      Объем - Повреждения
        $this->slide4['n39'] = $this->r($this->slide4['l39']/(1-$this->slide4['d12']));
        $this->slide4['n40'] = $this->r($this->slide4['l40']/(1-$this->slide4['d13']));
        $this->slide4['n41'] = $this->r($this->slide4['l41']/(1-$this->slide4['d15']));
        $this->slide4['n42'] = $this->r($this->slide4['l42']/(1-$this->slide4['d3']));
        $this->slide4['n43'] = $this->r($this->slide4['l43']/(1-$this->slide4['d4']));
        $this->slide4['n44'] = $this->r($this->slide4['l44']/(1-$this->slide4['d13']));
        $this->slide4['n45'] = $this->r($this->slide4['l45']/(1-$this->slide4['d15']));
        $this->slide4['n46'] = $this->r($this->slide4['l46']/(1-$this->slide4['d2']));
        $this->slide4['n47'] = $this->r($this->slide4['l47']/(1-$this->slide4['d12']));
        $this->slide4['n48'] = $this->r($this->slide4['l48']/(1-$this->slide4['d13']));
        $this->slide4['n49'] = $this->r($this->slide4['l49']/(1-$this->slide4['d3']));
        $this->slide4['n50'] = $this->r($this->slide4['l50']/(1-$this->slide4['d4']));
        $this->slide4['n51'] = $this->r($this->slide4['l51']/(1-$this->slide4['d13']));
        $this->slide4['n52'] = $this->r($this->slide4['l52']/(1-$this->slide4['d2']));

//      Длительность - Повреждения
        $this->slide4['o39'] = $this->r($this->slide4['m39']/(1-$this->slide4['d12']));
        $this->slide4['o40'] = $this->r($this->slide4['m40']/(1-$this->slide4['d13']));
        $this->slide4['o41'] = $this->r($this->slide4['m41']/(1-$this->slide4['d15']));
        $this->slide4['o42'] = $this->r($this->slide4['m42']/(1-$this->slide4['d3']));
        $this->slide4['o43'] = $this->r($this->slide4['m43']/(1-$this->slide4['d4']));
        $this->slide4['o44'] = $this->r($this->slide4['m44']/(1-$this->slide4['d13']));
        $this->slide4['o45'] = $this->r($this->slide4['m45']/(1-$this->slide4['d15']));
        $this->slide4['o46'] = $this->r($this->slide4['m46']/(1-$this->slide4['d2']));
        $this->slide4['o47'] = $this->r($this->slide4['m47']/(1-$this->slide4['d12']));
        $this->slide4['o48'] = $this->r($this->slide4['m48']/(1-$this->slide4['d13']));
        $this->slide4['o49'] = $this->r($this->slide4['m49']/(1-$this->slide4['d3']));
        $this->slide4['o50'] = $this->r($this->slide4['m50']/(1-$this->slide4['d4']));
        $this->slide4['o51'] = $this->r($this->slide4['m51']/(1-$this->slide4['d13']));
        $this->slide4['o52'] = $this->r($this->slide4['m52']/(1-$this->slide4['d2']));

//      0-ГКИ-0-Специализация

//      Объем
        $this->slide4['l57'] = $this->r($this->slide2['d40']);
        $this->slide4['l58'] = $this->r($this->slide2['at40']);
        $this->slide4['l59'] = $this->r($this->slide2['v40']);
        $this->slide4['l60'] = $this->r($this->slide2['ad40']);
        $this->slide4['l61'] = $this->r($this->slide2['al40']);
        $this->slide4['l62'] = $this->r($this->slide2['bb40']);
        $this->slide4['l65'] = $this->r($this->slide2['d41']);
        $this->slide4['l55'] = $this->r((
                $this->slide2['b40'] - $this->slide4['l57'] - $this->slide4['l58'] - $this->slide4['l59'] - $this->slide4['l60'] -
                $this->slide4['l61'] - $this->slide4['l62']) * $this->slide2['q50']
        );
        $this->slide4['l56'] = $this->r((
                $this->slide2['b40'] - $this->slide4['l57'] - $this->slide4['l58'] - $this->slide4['l59'] - $this->slide4['l60'] -
                $this->slide4['l61'] - $this->slide4['l62']) * $this->slide2['q51']
        );
        $this->slide4['l63'] = $this->r((
                $this->slide2['b41'] - $this->slide4['l65']) * $this->slide2['q50']
        );
        $this->slide4['l64'] = $this->r((
                $this->slide2['b41'] - $this->slide4['l65']) * $this->slide2['q51']
        );

//      Длительность
        $this->slide4['m57'] = $this->r($this->slide3['d40']);
        $this->slide4['m58'] = $this->r($this->slide3['at40']);
        $this->slide4['m59'] = $this->r($this->slide3['v40']);
        $this->slide4['m60'] = $this->r($this->slide3['ad40']);
        $this->slide4['m61'] = $this->r($this->slide3['al40']);
        $this->slide4['m62'] = $this->r($this->slide3['bb40']);
        $this->slide4['m65'] = $this->r($this->slide3['d41']);
        $this->slide4['m55'] = $this->r((
                $this->slide3['b40'] - $this->slide4['m57'] - $this->slide4['m58'] - $this->slide4['m59'] - $this->slide4['m60'] -
                $this->slide4['m61'] - $this->slide4['m62']) * $this->slide3['q50']
        );
        $this->slide4['m56'] = $this->r((
                $this->slide3['b40'] - $this->slide4['m57'] - $this->slide4['m58'] - $this->slide4['m59'] - $this->slide4['m60'] -
                $this->slide4['m61'] - $this->slide4['m62']) * $this->slide3['q51']
        );
        $this->slide4['m63'] = $this->r((
                $this->slide3['b41'] - $this->slide4['m65']) * $this->slide3['q50']
        );
        $this->slide4['m64'] = $this->r((
                $this->slide3['b41'] - $this->slide4['m65']) * $this->slide3['q51']
        );

//      Объем - Повреждения
        $this->slide4['n55'] = $this->r($this->slide4['l55']/(1-$this->slide4['d3']));
        $this->slide4['n56'] = $this->r($this->slide4['l56']/(1-$this->slide4['d4']));
        $this->slide4['n57'] = $this->r($this->slide4['l57']/(1-$this->slide4['d13']));
        $this->slide4['n58'] = $this->r($this->slide4['l58']/(1-$this->slide4['d15']));
        $this->slide4['n59'] = $this->r($this->slide4['l59']/(1-$this->slide4['d8']));
        $this->slide4['n60'] = $this->r($this->slide4['l60']/(1-$this->slide4['d9']));
        $this->slide4['n61'] = $this->r($this->slide4['l61']/(1-$this->slide4['d10']));
        $this->slide4['n62'] = $this->r($this->slide4['l62']/(1-$this->slide4['d7']));
        $this->slide4['n63'] = $this->r($this->slide4['l63']/(1-$this->slide4['d3']));
        $this->slide4['n64'] = $this->r($this->slide4['l64']/(1-$this->slide4['d4']));
        $this->slide4['n65'] = $this->r($this->slide4['l65']/(1-$this->slide4['d13']));

//      Длительность - Повреждения
        $this->slide4['o55'] = $this->r($this->slide4['m55']/(1-$this->slide4['d3']));
        $this->slide4['o56'] = $this->r($this->slide4['m56']/(1-$this->slide4['d4']));
        $this->slide4['o57'] = $this->r($this->slide4['m57']/(1-$this->slide4['d13']));
        $this->slide4['o58'] = $this->r($this->slide4['m58']/(1-$this->slide4['d15']));
        $this->slide4['o59'] = $this->r($this->slide4['m59']/(1-$this->slide4['d8']));
        $this->slide4['o60'] = $this->r($this->slide4['m60']/(1-$this->slide4['d9']));
        $this->slide4['o61'] = $this->r($this->slide4['m61']/(1-$this->slide4['d10']));
        $this->slide4['o62'] = $this->r($this->slide4['m62']/(1-$this->slide4['d7']));
        $this->slide4['o63'] = $this->r($this->slide4['m63']/(1-$this->slide4['d3']));
        $this->slide4['o64'] = $this->r($this->slide4['m64']/(1-$this->slide4['d4']));
        $this->slide4['o65'] = $this->r($this->slide4['m65']/(1-$this->slide4['d13']));

//      Аллергии-ГКИ-0-0

//      Объем
        $this->slide4['l68'] = $this->r($this->slide2['g40']);
        $this->slide4['l69'] = $this->r($this->slide2['e40']);
        $this->slide4['l72'] = $this->r($this->slide2['f40']);
        $this->slide4['l73'] = $this->r($this->slide2['bl40']);
        $this->slide4['l74'] = $this->r($this->slide2['g41']);
        $this->slide4['l75'] = $this->r($this->slide2['e41']);
        $this->slide4['l78'] = $this->r($this->slide2['f41']);
        $this->slide4['l79'] = $this->r($this->slide2['bl41']);

        $this->slide4['l70'] = $this->r((
                $this->slide2['b40'] - $this->slide4['l68'] - $this->slide4['l69'] - $this->slide4['l72'] - $this->slide4['l73']
                ) * $this->slide2['q50']
        );
        $this->slide4['l71'] = $this->r((
                $this->slide2['b40'] - $this->slide4['l68'] - $this->slide4['l69'] - $this->slide4['l72'] - $this->slide4['l73']
            ) * $this->slide2['q51']
        );
        $this->slide4['l76'] = $this->r((
                $this->slide2['b41'] - $this->slide4['l74'] - $this->slide4['l75'] - $this->slide4['l78'] - $this->slide4['l79']) * $this->slide2['q50']
        );
        $this->slide4['l77'] = $this->r((
                $this->slide2['b41'] - $this->slide4['l74'] - $this->slide4['l75'] - $this->slide4['l78'] - $this->slide4['l79']) * $this->slide2['q51']
        );

//      Длительность
        $this->slide4['m68'] = $this->r($this->slide3['g40']);
        $this->slide4['m69'] = $this->r($this->slide3['e40']);
        $this->slide4['m72'] = $this->r($this->slide3['f40']);
        $this->slide4['m73'] = $this->r($this->slide3['bl40']);
        $this->slide4['m74'] = $this->r($this->slide3['g41']);
        $this->slide4['m75'] = $this->r($this->slide3['e41']);
        $this->slide4['m78'] = $this->r($this->slide3['f41']);
        $this->slide4['m79'] = $this->r($this->slide3['bl41']);

        $this->slide4['m70'] = $this->r((
                $this->slide3['b40'] - $this->slide4['m68'] - $this->slide4['m69'] - $this->slide4['m72'] - $this->slide4['m73']
            ) * $this->slide3['q50']
        );
        $this->slide4['m71'] = $this->r((
                $this->slide3['b40'] - $this->slide4['m68'] - $this->slide4['m69'] - $this->slide4['m72'] - $this->slide4['m73']
            ) * $this->slide3['q51']
        );
        $this->slide4['m76'] = $this->r((
                $this->slide3['b41'] - $this->slide4['m74'] - $this->slide4['m75'] - $this->slide4['m78'] - $this->slide4['m79']) * $this->slide3['q50']
        );
        $this->slide4['m77'] = $this->r((
                $this->slide3['b41'] - $this->slide4['m74'] - $this->slide4['m75'] - $this->slide4['m78'] - $this->slide4['m79']) * $this->slide3['q51']
        );

//      Объем - Повреждения
        $this->slide4['n68'] = $this->r($this->slide4['l68']/(1-$this->slide4['d12']));
        $this->slide4['n69'] = $this->r($this->slide4['l69']/(1-$this->slide4['d13']));
        $this->slide4['n70'] = $this->r($this->slide4['l70']/(1-$this->slide4['d3']));
        $this->slide4['n71'] = $this->r($this->slide4['l71']/(1-$this->slide4['d4']));
        $this->slide4['n72'] = $this->r($this->slide4['l72']/(1-$this->slide4['d13']));
        $this->slide4['n73'] = $this->r($this->slide4['l73']/(1-$this->slide4['d2']));
        $this->slide4['n74'] = $this->r($this->slide4['l74']/(1-$this->slide4['d12']));
        $this->slide4['n75'] = $this->r($this->slide4['l75']/(1-$this->slide4['d13']));
        $this->slide4['n76'] = $this->r($this->slide4['l76']/(1-$this->slide4['d3']));
        $this->slide4['n77'] = $this->r($this->slide4['l77']/(1-$this->slide4['d4']));
        $this->slide4['n78'] = $this->r($this->slide4['l78']/(1-$this->slide4['d13']));
        $this->slide4['n79'] = $this->r($this->slide4['l79']/(1-$this->slide4['d2']));

//      Длительность - Повреждения
        $this->slide4['o68'] = $this->r($this->slide4['m68']/(1-$this->slide4['d12']));
        $this->slide4['o69'] = $this->r($this->slide4['m69']/(1-$this->slide4['d13']));
        $this->slide4['o70'] = $this->r($this->slide4['m70']/(1-$this->slide4['d3']));
        $this->slide4['o71'] = $this->r($this->slide4['m71']/(1-$this->slide4['d4']));
        $this->slide4['o72'] = $this->r($this->slide4['m72']/(1-$this->slide4['d13']));
        $this->slide4['o73'] = $this->r($this->slide4['m73']/(1-$this->slide4['d2']));
        $this->slide4['o74'] = $this->r($this->slide4['m74']/(1-$this->slide4['d12']));
        $this->slide4['o75'] = $this->r($this->slide4['m75']/(1-$this->slide4['d13']));
        $this->slide4['o76'] = $this->r($this->slide4['m76']/(1-$this->slide4['d3']));
        $this->slide4['o77'] = $this->r($this->slide4['m77']/(1-$this->slide4['d4']));
        $this->slide4['o78'] = $this->r($this->slide4['m78']/(1-$this->slide4['d13']));
        $this->slide4['o79'] = $this->r($this->slide4['m79']/(1-$this->slide4['d2']));

//      0-0-ИСМП-Специализация

//      Объем
        $this->slide4['l85'] = $this->r($this->slide2['h40'] + $this->slide2['au40']);
        $this->slide4['l86'] = $this->r($this->slide2['w40']);
        $this->slide4['l87'] = $this->r($this->slide2['ae40']);
        $this->slide4['l88'] = $this->r($this->slide2['am40']);
        $this->slide4['l89'] = $this->r($this->slide2['bc40']);

        $this->slide4['l83'] = $this->r((
                $this->slide2['b40'] - $this->slide4['l85'] - $this->slide4['l86'] - $this->slide4['l87'] -
                $this->slide4['l88'] - $this->slide4['l89']
            ) * $this->slide2['q50']
        );
        $this->slide4['l84'] = $this->r((
                $this->slide2['b40'] - $this->slide4['l85'] - $this->slide4['l86'] - $this->slide4['l87'] -
                $this->slide4['l88'] - $this->slide4['l89']
            ) * $this->slide2['q51']
        );
        $this->slide4['l90'] = $this->r($this->slide2['b41'] * $this->slide2['q50']);
        $this->slide4['l91'] = $this->r($this->slide2['b41'] * $this->slide2['q51']);

//      Длительность
        $this->slide4['m85'] = $this->r($this->slide3['h40'] + $this->slide3['au40']);
        $this->slide4['m86'] = $this->r($this->slide3['w40']);
        $this->slide4['m87'] = $this->r($this->slide3['ae40']);
        $this->slide4['m88'] = $this->r($this->slide3['am40']);
        $this->slide4['m89'] = $this->r($this->slide3['bc40']);

        $this->slide4['m83'] = $this->r((
                $this->slide3['b40'] - $this->slide4['m85'] - $this->slide4['m86'] - $this->slide4['m87'] -
                $this->slide4['m88'] - $this->slide4['m89']
            ) * $this->slide3['q50']
        );
        $this->slide4['m84'] = $this->r((
                $this->slide3['b40'] - $this->slide4['m85'] - $this->slide4['m86'] - $this->slide4['m87'] -
                $this->slide4['m88'] - $this->slide4['m89']
            ) * $this->slide3['q51']
        );
        $this->slide4['m90'] = $this->r($this->slide3['b41'] * $this->slide3['q50']);
        $this->slide4['m91'] = $this->r($this->slide3['b41'] * $this->slide3['q51']);


//      Объем - Повреждения
        $this->slide4['n83'] = $this->r($this->slide4['l83']/(1-$this->slide4['d3']));
        $this->slide4['n84'] = $this->r($this->slide4['l84']/(1-$this->slide4['d4']));
        $this->slide4['n85'] = $this->r($this->slide4['l85']/(1-$this->slide4['d15']));
        $this->slide4['n86'] = $this->r($this->slide4['l86']/(1-$this->slide4['d8']));
        $this->slide4['n87'] = $this->r($this->slide4['l87']/(1-$this->slide4['d9']));
        $this->slide4['n88'] = $this->r($this->slide4['l88']/(1-$this->slide4['d10']));
        $this->slide4['n89'] = $this->r($this->slide4['l89']/(1-$this->slide4['d7']));
        $this->slide4['n90'] = $this->r($this->slide4['l90']/(1-$this->slide4['d3']));
        $this->slide4['n91'] = $this->r($this->slide4['l91']/(1-$this->slide4['d4']));

//      Длительность - Повреждения
        $this->slide4['o83'] = $this->r($this->slide4['m83']/(1-$this->slide4['d3']));
        $this->slide4['o84'] = $this->r($this->slide4['m84']/(1-$this->slide4['d4']));
        $this->slide4['o85'] = $this->r($this->slide4['m85']/(1-$this->slide4['d15']));
        $this->slide4['o86'] = $this->r($this->slide4['m86']/(1-$this->slide4['d8']));
        $this->slide4['o87'] = $this->r($this->slide4['m87']/(1-$this->slide4['d9']));
        $this->slide4['o88'] = $this->r($this->slide4['m88']/(1-$this->slide4['d10']));
        $this->slide4['o89'] = $this->r($this->slide4['m89']/(1-$this->slide4['d7']));
        $this->slide4['o90'] = $this->r($this->slide4['m90']/(1-$this->slide4['d3']));
        $this->slide4['o91'] = $this->r($this->slide4['m91']/(1-$this->slide4['d4']));

//      0-ГКИ-0-0

//      Объем
        $this->slide4['l97']  = $this->r($this->slide2['d40']);
        $this->slide4['l100'] = $this->r($this->slide2['d41']);
        $this->slide4['l95']  = $this->r(($this->slide2['b40'] - $this->slide4['l97']) * $this->slide2['q50']);
        $this->slide4['l96']  = $this->r(($this->slide2['b40'] - $this->slide4['l97']) * $this->slide2['q51']);
        $this->slide4['l98']  = $this->r(($this->slide2['b41'] - $this->slide4['l100']) * $this->slide2['q50']);
        $this->slide4['l99']  = $this->r(($this->slide2['b41'] - $this->slide4['l100']) * $this->slide2['q51']);

//      Длительность
        $this->slide4['m97']  = $this->r($this->slide3['d40']);
        $this->slide4['m100'] = $this->r($this->slide3['d41']);
        $this->slide4['m95']  = $this->r(($this->slide3['b40'] - $this->slide4['m97']) * $this->slide3['q50']);
        $this->slide4['m96']  = $this->r(($this->slide3['b40'] - $this->slide4['m97']) * $this->slide3['q51']);
        $this->slide4['m98']  = $this->r(($this->slide3['b41'] - $this->slide4['m100']) * $this->slide3['q50']);
        $this->slide4['m99']  = $this->r(($this->slide3['b41'] - $this->slide4['m100']) * $this->slide3['q51']);

//      Объем - Повреждения
        $this->slide4['n95']  = $this->r($this->slide4['l95']/(1-$this->slide4['d3']));
        $this->slide4['n96']  = $this->r($this->slide4['l96']/(1-$this->slide4['d4']));
        $this->slide4['n97']  = $this->r($this->slide4['l97']/(1-$this->slide4['d13']));
        $this->slide4['n98']  = $this->r($this->slide4['l98']/(1-$this->slide4['d3']));
        $this->slide4['n99']  = $this->r($this->slide4['l99']/(1-$this->slide4['d4']));
        $this->slide4['n100'] = $this->r($this->slide4['l100']/(1-$this->slide4['d13']));

//      Длительность - Повреждения
        $this->slide4['o95']  = $this->r($this->slide4['m95']/(1-$this->slide4['d3']));
        $this->slide4['o96']  = $this->r($this->slide4['m96']/(1-$this->slide4['d4']));
        $this->slide4['o97']  = $this->r($this->slide4['m97']/(1-$this->slide4['d13']));
        $this->slide4['o98']  = $this->r($this->slide4['m98']/(1-$this->slide4['d3']));
        $this->slide4['o99']  = $this->r($this->slide4['m99']/(1-$this->slide4['d4']));
        $this->slide4['o100'] = $this->r($this->slide4['m100']/(1-$this->slide4['d13']));

//      0-ГКИ-0-0

//      Объем
        $this->slide4['l104'] = $this->r($this->slide2['c40']);
        $this->slide4['l107'] = $this->r($this->slide2['as40']);
        $this->slide4['l108'] = $this->r($this->slide2['c41']);
        $this->slide4['l111'] = $this->r($this->slide2['ci41']);
        $this->slide4['l105'] = $this->r(($this->slide2['b40'] - $this->slide4['l104'] - $this->slide4['l107']) * $this->slide2['q50']);
        $this->slide4['l106'] = $this->r(($this->slide2['b40'] - $this->slide4['l104'] - $this->slide4['l107']) * $this->slide2['q51']);
        $this->slide4['l109'] = $this->r(($this->slide2['b41'] - $this->slide4['l108'] - $this->slide4['l111']) * $this->slide2['q50']);
        $this->slide4['l110'] = $this->r(($this->slide2['b41'] - $this->slide4['l108'] - $this->slide4['l111']) * $this->slide2['q51']);

//      Длительность
        $this->slide4['m104'] = $this->r($this->slide3['c40']);
        $this->slide4['m107'] = $this->r($this->slide3['as40']);
        $this->slide4['m108'] = $this->r($this->slide3['c41']);
        $this->slide4['m111'] = $this->r($this->slide3['ci41']);
        $this->slide4['m105'] = $this->r(($this->slide3['b40'] - $this->slide4['m104'] - $this->slide4['m107']) * $this->slide3['q50']);
        $this->slide4['m106'] = $this->r(($this->slide3['b40'] - $this->slide4['m104'] - $this->slide4['m107']) * $this->slide3['q51']);
        $this->slide4['m109'] = $this->r(($this->slide3['b41'] - $this->slide4['m108'] - $this->slide4['m111']) * $this->slide3['q50']);
        $this->slide4['m110'] = $this->r(($this->slide3['b41'] - $this->slide4['m108'] - $this->slide4['m111']) * $this->slide3['q51']);

//      Объем - Повреждения
        $this->slide4['n104'] = $this->r($this->slide4['l104']/(1-$this->slide4['d12']));
        $this->slide4['n105'] = $this->r($this->slide4['l105']/(1-$this->slide4['d3']));
        $this->slide4['n106'] = $this->r($this->slide4['l106']/(1-$this->slide4['d4']));
        $this->slide4['n107'] = $this->r($this->slide4['l107']/(1-$this->slide4['d2']));
        $this->slide4['n108'] = $this->r($this->slide4['l108']/(1-$this->slide4['d12']));
        $this->slide4['n109'] = $this->r($this->slide4['l109']/(1-$this->slide4['d3']));
        $this->slide4['n110'] = $this->r($this->slide4['l110']/(1-$this->slide4['d4']));
        $this->slide4['n111'] = $this->r($this->slide4['l111']/(1-$this->slide4['d2']));

//      Длительность - Повреждения
        $this->slide4['o104'] = $this->r($this->slide4['m104']/(1-$this->slide4['d12']));
        $this->slide4['o105'] = $this->r($this->slide4['m105']/(1-$this->slide4['d3']));
        $this->slide4['o106'] = $this->r($this->slide4['m106']/(1-$this->slide4['d4']));
        $this->slide4['o107'] = $this->r($this->slide4['m107']/(1-$this->slide4['d2']));
        $this->slide4['o108'] = $this->r($this->slide4['m108']/(1-$this->slide4['d12']));
        $this->slide4['o109'] = $this->r($this->slide4['m109']/(1-$this->slide4['d3']));
        $this->slide4['o110'] = $this->r($this->slide4['m110']/(1-$this->slide4['d4']));
        $this->slide4['o111'] = $this->r($this->slide4['m111']/(1-$this->slide4['d2']));

//      0-0-0-0

//      Объем
        $this->slide4['l115'] = $this->r($this->slide2['b40'] * $this->slide2['q50']);
        $this->slide4['l116'] = $this->r($this->slide2['b40'] * $this->slide2['q51']);
        $this->slide4['l117'] = $this->r($this->slide2['b41'] * $this->slide2['q50']);
        $this->slide4['l118'] = $this->r($this->slide2['b41'] * $this->slide2['q51']);

//      Длительность
        $this->slide4['m115'] = $this->r($this->slide3['b40'] * $this->slide3['q50']);
        $this->slide4['m116'] = $this->r($this->slide3['b40'] * $this->slide3['q51']);
        $this->slide4['m117'] = $this->r($this->slide3['b41'] * $this->slide3['q50']);
        $this->slide4['m118'] = $this->r($this->slide3['b41'] * $this->slide3['q51']);

//      Объем - Повреждения
        $this->slide4['n115'] = $this->r($this->slide4['l115']/(1-$this->slide4['d3']));
        $this->slide4['n116'] = $this->r($this->slide4['l116']/(1-$this->slide4['d4']));
        $this->slide4['n117'] = $this->r($this->slide4['l117']/(1-$this->slide4['d3']));
        $this->slide4['n118'] = $this->r($this->slide4['l118']/(1-$this->slide4['d4']));

//      Длительность - Повреждения
        $this->slide4['o115'] = $this->r($this->slide4['m115']/(1-$this->slide4['d3']));
        $this->slide4['o116'] = $this->r($this->slide4['m116']/(1-$this->slide4['d4']));
        $this->slide4['o117'] = $this->r($this->slide4['m117']/(1-$this->slide4['d3']));
        $this->slide4['o118'] = $this->r($this->slide4['m118']/(1-$this->slide4['d4']));

//        echo '<pre>';
//        print_r($this->slide4);
//        echo '</pre>';

        return $this->slide4;
    }

    public function r($value){
        return round($value);
    }
}