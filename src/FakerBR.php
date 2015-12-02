<?php

namespace JansenFelipe\FakerBR;

use Faker\Provider\Base;

/**
 * FakeBR: Provider do Faker <https://github.com/fzaninotto/Faker> para gerar dados brasileiros falsos com o intuito de testar softwares
 *
 * @author Jansen Felipe <jansen.felipe@gmail.com>
 */
class FakerBR extends Base
{

    /*
     * Gerador de CNPJ
     */
    public static function cnpj($verdadeiro = true)
    {

        $cnpj = rand(10000000, 99999999) . '0001';

        //Primeiro digito verificador
        $aux = [5,4,3,2,9,8,7,6,5,4,3,2];
        $total = 0;

        foreach(str_split($cnpj) as $key => $char)
            $total += $char * $aux[$key];

        $d1 = 11 - ($total % 11);

        $cnpj .= ($d1 >= 10)?'0':$d1;

        //Segundo digito verificador
        $aux = [6,5,4,3,2,9,8,7,6,5,4,3,2];
        $total = 0;

        foreach(str_split($cnpj) as $key => $char)
            $total += $char * $aux[$key];

        $d2= 11 - ($total % 11);

        $cnpj .= ($d2 >= 10)?'0':$d2;

        if(!$verdadeiro)
            return self::shuffleString($cnpj);

        return $cnpj;
    }

    /*
     * Gerador de CPF
     */
    public static function cpf($verdadeiro = true)
    {

        $cpf = rand(100000000, 999999999);

        //Primeiro digito verificador
        $aux = [10,9,8,7,6,5,4,3,2];
        $total = 0;

        foreach(str_split($cpf) as $key => $char)
            $total += $char * $aux[$key];

        $d1 = 11 - ($total % 11);

        $cpf .= ($d1 >= 10)?'0':$d1;

        //Segundo digito verificador
        $aux = [11,10,9,8,7,6,5,4,3,2];
        $total = 0;

        foreach(str_split($cpf) as $key => $char)
            $total += $char * $aux[$key];

        $d2= 11 - ($total % 11);

        $cpf .= ($d2 >= 10)?'0':$d2;

        if(!$verdadeiro)
            return self::shuffleString($cpf);

        return $cpf;
    }

}