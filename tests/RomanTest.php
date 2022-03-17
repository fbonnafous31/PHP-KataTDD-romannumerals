<?php

    namespace App;

use App\Roman;

use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

    class RomanTest extends TestCase {

        protected function setUp(): void {
            $this->value = new Roman();
        }

        // Conversion chiffre romain vers chiffres
        // Gestion du caractère I
        public function testTranslateIReturn1() {
            assertEquals('1', $this->value->toNumeric('I'));
        }

        public function testTranslateIIReturn2() {
            assertEquals('2', $this->value->toNumeric('II'));
        }

        public function testTranslateIIIReturn3() {
            assertEquals('3', $this->value->toNumeric('III'));
        }

        // Gestion du caractère V
        public function testTranslateVReturn5() {
            assertEquals('5', $this->value->toNumeric('V'));
        }

        public function testTranslateVIReturn6() {
            assertEquals('6', $this->value->toNumeric('VI'));
        }

        public function testTranslateIVReturn4() {
            assertEquals('4', $this->value->toNumeric('IV'));
        }

        // Gestion du caractère X
        public function testTranslateXReturn10() {
            assertEquals('10', $this->value->toNumeric('X'));
        }

        public function testTranslateXIReturn11() {
            assertEquals('11', $this->value->toNumeric('XI'));
        }

        public function testTranslateIXReturn9() {
            assertEquals('9', $this->value->toNumeric('IX'));
        }

        // Gestion du caractère L
        public function testTranslateLReturn50() {
            assertEquals('50', $this->value->toNumeric('L'));
        }

        public function testTranslateLXReturn60() {
            assertEquals('60', $this->value->toNumeric('LX'));
        }  
        
        public function testTranslateXLReturn40() {
            assertEquals('40', $this->value->toNumeric('XL'));
        }

        // Gestion du caractère C
        public function testTranslateCReturn100() {
            assertEquals('100', $this->value->toNumeric('C'));
        }

        public function testTranslateCXReturn110() {
            assertEquals('110', $this->value->toNumeric('CX'));
        }

        public function testTranslateXCReturn90() {
            assertEquals('90', $this->value->toNumeric('XC'));
        }

        public function testTranslateCCCLXIXReturn369() {
            assertEquals('369', $this->value->toNumeric('CCCLXIX'));
        }

        // Gestion du caractère D
        public function testTranslateDReturn500() {
            assertEquals('500', $this->value->toNumeric('D'));
        }

        public function testTranslateDCReturn600() {
            assertEquals('600', $this->value->toNumeric('DC'));
        }

        public function testTranslateCDReturn400() {
            assertEquals('400', $this->value->toNumeric('CD'));
        }

        public function testTranslateCDXLVIIIReturn448() {
            assertEquals('448', $this->value->toNumeric('CDXLVIII'));
        }

        // Gestion du M
        public function testTranslateMReturn1000() {
            assertEquals('1000', $this->value->toNumeric('M'));
        }

        public function testTranslateMCReturn1100() {
            assertEquals('1100', $this->value->toNumeric('MC'));
        }

        public function testTranslateCMReturn900() {
            assertEquals('900', $this->value->toNumeric('CM'));
        }

        public function testTranslateMCMXCVIIIReturn1998() {
            assertEquals('1998', $this->value->toNumeric('MCMXCVIII'));
        }

        public function testTranslateMMDCCLIReturn2751() {
            assertEquals('2751', $this->value->toNumeric('MMDCCLI'));
        }


        // Conversion chiffre vers chiffre romain
        // Gestion du caractère I
        public function testTranslate1ReturnI() {
            assertEquals('I', $this->value->toRoman('1'));
        }

        public function testTranslate2ReturnII() {
            assertEquals('II', $this->value->toRoman('2'));
        }

        public function testTranslate3ReturnIII() {
            assertEquals('III', $this->value->toRoman('3'));
        }

        // Gestion du caractère V
        public function testTranslate5ReturnV() {
            assertEquals('V', $this->value->toRoman('5'));
        }

        public function testTranslate6ReturnVI() {
            assertEquals('VI', $this->value->toRoman('6'));
        }

        public function testTranslate4ReturnIV() {
            assertEquals('IV', $this->value->toRoman('4'));
        }

        // Gestion du caractère X
        public function testTranslate10ReturnX() {
            assertEquals('X', $this->value->toRoman('10'));
        }

        public function testTranslate11ReturnXI() {
            assertEquals('XI', $this->value->toRoman('11'));
        }

        public function testTranslate9ReturnIX() {
            assertEquals('IX', $this->value->toRoman('9'));
        } 

        public function testTranslate14ReturnXIV() {
            assertEquals('XIV', $this->value->toRoman('14'));
        }

        public function testTranslate19ReturnXIX() {
            assertEquals('XIX', $this->value->toRoman('19'));
        }

        // Gestion du caractère L
        public function testTranslate50ReturnL() {
            assertEquals('L', $this->value->toRoman('50'));
        }

        public function testTranslate54ReturnLIV() {
            assertEquals('LIV', $this->value->toRoman('54'));
        }

        public function testTranslate60ReturnLX() {
            assertEquals('LX', $this->value->toRoman('60'));
        }  
        
        public function testTranslate89ReturnLXXXIX() {
            assertEquals('LXXXIX', $this->value->toRoman('89'));
        }
        
        public function testTranslate40ReturnXL() {
            assertEquals('XL', $this->value->toRoman('40'));
        } 

        public function testTranslate44ReturnXLIV() {
            assertEquals('XLIV', $this->value->toRoman('44'));
        } 

        public function testTranslate45ReturnXLV() {
            assertEquals('XLV', $this->value->toRoman('45'));
        } 

        public function testTranslate47ReturnXLVII() {
            assertEquals('XLVII', $this->value->toRoman('47'));
        }

        public function testTranslate49ReturnXLIX() {
            assertEquals('XLIX', $this->value->toRoman('49'));
        } 

        // Gestion du caractère C
        public function testTranslate100ReturnC() {
            assertEquals('C', $this->value->toRoman('100'));
        }

        public function testTranslate110ReturnCX() {
            assertEquals('CX', $this->value->toRoman('110'));
        }

        public function testTranslate90ReturnXC() {
            assertEquals('XC', $this->value->toRoman('90'));
        }

        public function testTranslate369ReturnCCCLXIX() {
            assertEquals('CCCLXIX', $this->value->toRoman('369'));
        }

        // Gestion du caractère D
        public function testTranslate500ReturnD() {
            assertEquals('D', $this->value->toRoman('500'));
        }

        public function testTranslate600ReturnDC() {
            assertEquals('DC', $this->value->toRoman('600'));
        }

        public function testTranslate400ReturnCD() {
            assertEquals('CD', $this->value->toRoman('400'));
        }

        public function testTranslate448ReturnCDXLVIII() {
            assertEquals('CDXLVIII', $this->value->toRoman('448'));
        }

        // Gestion du M
        public function testTranslate1000ReturnM() {
            assertEquals('M', $this->value->toRoman('1000'));
        }

        public function testTranslate1100ReturnMC(){
            assertEquals('MC', $this->value->toRoman('1100'));
        }

        public function testTranslate900ReturnCM() {
            assertEquals('CM', $this->value->toRoman('900'));
        }

        public function testTranslate1998ReturnMCMXCVIII() {
            assertEquals('MCMXCVIII', $this->value->toRoman('1998'));
        }

        public function testTranslate2751ReturnMMDCCLI() {
            assertEquals('MMDCCLI', $this->value->toRoman('2751'));
        }

    }

?>