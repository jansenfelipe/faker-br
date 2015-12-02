<?php

namespace JansenFelipe\FakerBR;

use Faker\Factory;
use JansenFelipe\Utils\Utils;
use PHPUnit_Framework_TestCase;

class FakerBRTest extends PHPUnit_Framework_TestCase {

    public function testCallByFaker(){

        $faker = Factory::create();
        $faker->addProvider(new FakerBR($faker));
echo $faker->cnpj; die;
        $this->assertTrue(Utils::isCnpj($faker->cnpj));
        $this->assertTrue(Utils::isCpf($faker->cpf));
    }

    public function testCnpjVerdadeiro() {
        $this->assertTrue(Utils::isCnpj(FakerBR::cnpj(true)));
    }

    public function testCnpjFalso() {
        $this->assertFalse(Utils::isCnpj(FakerBR::cnpj(false)));
    }

    public function testCpfVerdadeiro() {
        $this->assertTrue(Utils::isCpf(FakerBR::cpf(true)));
    }

    public function testCpfFalso() {
        $this->assertFalse(Utils::isCpf(FakerBR::cpf(false)));
    }
}