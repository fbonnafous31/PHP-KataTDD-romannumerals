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

    }

?>