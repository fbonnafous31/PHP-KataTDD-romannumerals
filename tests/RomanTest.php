<?php

    namespace App;

use App\Roman;

use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

    class RomanTest extends TestCase {

        protected function setUp(): void {
            $this->roman = new Roman();
        }

        // Gestion du caractère I
        public function testTranslateIReturn1() {
            assertEquals('1', $this->roman->translate('I'));
        }

        public function testTranslateIIReturn2() {
            assertEquals('2', $this->roman->translate('II'));
        }

        public function testTranslateIIIReturn3() {
            assertEquals('3', $this->roman->translate('III'));
        }

        // Gestion du caractère V
        public function testTranslateVReturn5() {
            assertEquals('5', $this->roman->translate('V'));
        }

        public function testTranslateVIReturn6() {
            assertEquals('6', $this->roman->translate('VI'));
        }

        public function testTranslateIVReturn4() {
            assertEquals('4', $this->roman->translate('IV'));
        }

        // Gestion du caractère X
        public function testTranslateXReturn10() {
            assertEquals('10', $this->roman->translate('X'));
        }

        public function testTranslateXIReturn11() {
            assertEquals('11', $this->roman->translate('XI'));
        }

        public function testTranslateIXReturn9() {
            assertEquals('9', $this->roman->translate('IX'));
        }

        // Gestion du caractère L
        public function testTranslateLReturn50() {
            assertEquals('50', $this->roman->translate('L'));
        }

        public function testTranslateLXReturn60() {
            assertEquals('60', $this->roman->translate('LX'));
        }  
        
        public function testTranslateXLReturn40() {
            assertEquals('40', $this->roman->translate('XL'));
        }

        // Gestion du caractère C
        public function testTranslateCReturn100() {
            assertEquals('100', $this->roman->translate('C'));
        }

        public function testTranslateCXReturn110() {
            assertEquals('110', $this->roman->translate('CX'));
        }

        public function testTranslateXCReturn90() {
            assertEquals('90', $this->roman->translate('XC'));
        }

        public function testTranslateCCCLXIXReturn369() {
            assertEquals('369', $this->roman->translate('CCCLXIX'));
        }

        // Gestion du caractère D
        public function testTranslateDReturn500() {
            assertEquals('500', $this->roman->translate('D'));
        }

        public function testTranslateDCReturn600() {
            assertEquals('600', $this->roman->translate('DC'));
        }

        public function testTranslateCDReturn400() {
            assertEquals('400', $this->roman->translate('CD'));
        }

        public function testTranslateCDXLVIIIReturn448() {
            assertEquals('448', $this->roman->translate('CDXLVIII'));
        }

        // Gestion du M
        public function testTranslateMReturn1000() {
            assertEquals('1000', $this->roman->translate('M'));
        }

        public function testTranslateMCReturn1100() {
            assertEquals('1100', $this->roman->translate('MC'));
        }

        public function testTranslateCMReturn900() {
            assertEquals('900', $this->roman->translate('CM'));
        }

        public function testTranslateMCMXCVIIIReturn1998() {
            assertEquals('1998', $this->roman->translate('MCMXCVIII'));
        }

        public function testTranslateMMDCCLIReturn2751() {
            assertEquals('2751', $this->roman->translate('MMDCCLI'));
        }

    }

?>