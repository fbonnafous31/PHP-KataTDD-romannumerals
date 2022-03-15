<?php
    
    namespace App;

    class Roman {

        public function translate(string $value): int {
            $result = 0;
            $previous = '';
            for($i = 0; $i < strlen($value); $i++) {

                if ($value[$i] == 'I') $result += 1;

                if ($value[$i] == 'V') $result += 5;

                if ($value[$i] == 'X') $result += 10;

                if ($value[$i] == 'L') $result += 50;

                if ($value[$i] == 'C') $result += 100;

                // IV
                if (($previous == 'I') and ($value[$i] == 'V')) $result -= 2;

                // IX
                if (($previous == 'I') and ($value[$i] == 'X')) $result -= 2;

                // XL
                if (($previous == 'X') and ($value[$i] == 'L')) $result -= 20;

                // XC
                if (($previous == 'X') and ($value[$i] == 'C')) $result -= 20;
                
                $previous = $value[$i];
            }
            return $result;
        }

    }

?>