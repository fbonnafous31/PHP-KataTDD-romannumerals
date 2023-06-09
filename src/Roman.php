<?php
    
    namespace App;

    class Roman {

        public function toNumeric(string $value): int {
            $result = 0;
            $previous = '';
            for($i = 0; $i < strlen($value); $i++) {

                if ($value[$i] == 'I') $result += 1;

                if ($value[$i] == 'V') $result += 5;

                if ($value[$i] == 'X') $result += 10;

                if ($value[$i] == 'L') $result += 50;

                if ($value[$i] == 'C') $result += 100;

                if ($value[$i] == 'D') $result += 500;

                if ($value[$i] == 'M') $result += 1000;

                // IV
                if (($previous == 'I') and ($value[$i] == 'V')) $result -= 2;

                // IX
                if (($previous == 'I') and ($value[$i] == 'X')) $result -= 2;

                // XL
                if (($previous == 'X') and ($value[$i] == 'L')) $result -= 20;

                // XC
                if (($previous == 'X') and ($value[$i] == 'C')) $result -= 20;

                // CD
                if (($previous == 'C') and ($value[$i] == 'D')) $result -= 200;

                // CM
                if (($previous == 'C') and ($value[$i] == 'M')) $result -= 200;

                $previous = $value[$i];
            }
            return $result;
        }

        public function toRoman(int $value): string {
            $total  = $value;
            $result = '';
            $i = 0;

            while ($total > 0) {

                $this->buildResult('M', '', 1000, $total, $result, $i, 1000, 10000);

                $this->exception(900, 'C', 'M', $total, $result, $i, 999);

                $this->buildResult('D', '', 500, $total, $result, $i, 500, 1000);

                $this->exception(400, 'C', 'D', $total, $result, $i, 499);

                $this->buildResult('C', '', 100, $total, $result, $i, 100, 500);

                $this->exception(90, 'X', 'C', $total, $result, $i, 99);

                $this->buildResult('L', '', 50, $total, $result, $i, 50, 100);

                $this->exception(40, 'X', 'L', $total, $result, $i, 49);

                $this->buildResult('X', '', 10, $total, $result, $i, 10, 50);

                $this->exception(9, 'I', 'X', $total, $result, $i);

                $this->exception(4, 'I', 'V', $total, $result, $i);

                $this->buildResult('V', '', 5, $total, $result, $i, 5, 10);

                $this->buildResult('I', '', 1, $total, $result, $i, 1, 5);

            }
            return $result;
        }

        private function buildResult(string $romanCaracter1, string $romanCaracter2, int $value, int &$total, string &$result, int &$i, int $minvalue = 1, int $maxvalue = 10000): void {
            if ($total >= $minvalue and $total < $maxvalue) {
                $result[$i] = $romanCaracter1;
                if (!empty($romanCaracter2)) {
                    $result[$i+1] = $romanCaracter2;
                }
                $total -= $value;
                $i ++;
            }
        }

        private function exception(int $exceptionvalue, string $romanCaracter1, string $romanCaracter2, int &$total, string &$result, int &$i, $limit = 1): void {
            if ($exceptionvalue < 10 ) {
                if ($total == $exceptionvalue) {
                    $this->buildResult($romanCaracter1, $romanCaracter2, $exceptionvalue, $total, $result, $i);
                }
            } 
            if ($exceptionvalue >= 10) {
                if ($total >= $exceptionvalue and $total <= $limit) {
                    $this->buildResult($romanCaracter1, $romanCaracter2, $exceptionvalue, $total, $result, $i);
                    $i++;
                }
            }
        }

    }

?>