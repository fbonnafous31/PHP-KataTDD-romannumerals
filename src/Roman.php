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

                // Gestion du 50
                if ($total >= 50) {
                    $result[$i] = 'L';
                    $total -= 50;
                    $i ++;
                }

                // Cas particulier 40
                if ($total >= 40) {
                    $result[$i] = 'X';
                    $result[$i+1] = 'L';
                    $total -= 40;
                    $i +=2;
                }

                // Gestion du 10
                if ($total >= 10) {
                    $result[$i] = 'X';
                    $total -= 10;
                    $i ++;
                }

                // Cas particulier 9
                if ($total == 9) {
                    $result[$i] = 'I';
                    $result[$i+1] = 'X';
                    $total -= 9;
                }

                // Cas particulier 4
                if ($total == 4) {
                    $result[$i] = 'I';
                    $result[$i+1] = 'V';
                    $total -= 4;
                }

                // Gestion du 5
                if ($total >= 5) {
                    $result[$i] = 'V';
                    $total -= 5;
                    $i ++;
                }

                // Gestoin des unités
                if ($total >= 1) {
                    $result[$i] = 'I';
                    $total -= 1;
                    $i ++;
                }

            }
            return $result;
        }

    }

?>