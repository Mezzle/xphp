<?php

require "rna-transcription.php";

class ComplementTest extends \PHPUnit_Framework_TestCase
{
    public function testRNAComplementOfCytosineIsGuanine()
    {
        $this->assertSame(Complement::ofDna('C'), 'G');
    }

    public function testRNAComplementOfGuanineIsCytosine()
    {
        $this->markTestSkipped();

        $this->assertSame(Complement::ofDna('G'), 'C');
    }

    public function testRNAComplementOfThymineIsAdenine()
    {
        $this->markTestSkipped();

        $this->assertSame(Complement::ofDna('T'), 'A');
    }

    public function testRNAComplementOfAdenineIsUracil()
    {
        $this->markTestSkipped();

        $this->assertSame(Complement::ofDna('A'), 'U');
    }

    public function testRNAComplement()
    {
        $this->markTestSkipped();

        $this->assertSame(Complement::ofDna('ACGTGGTCTTAA'), 'UGCACCAGAAUU');
    }

    public function testDNAComplementOfCytosineIsGuanine()
    {
        $this->markTestSkipped();

        $this->assertSame(Complement::ofRna('C'), 'G');
    }

    public function testDNAComplementOfGuanineIsCytosine()
    {
        $this->markTestSkipped();

        $this->assertSame(Complement::ofRna('G'), 'C');
    }

    public function testDNAComplementOfUracilIsAdenine()
    {
        $this->markTestSkipped();

        $this->assertSame(Complement::ofRna('U'), 'A');
    }

    public function testDNAComplementOfAdenineIsThymine()
    {
        $this->markTestSkipped();

        $this->assertSame(Complement::ofRna('A'), 'T');
    }

    public function testDNAComplement()
    {
        $this->markTestSkipped();

        $this->assertSame(Complement::ofRna('UGAACCCGACAUG'), 'ACTTGGGCTGTAC');
    }
}
