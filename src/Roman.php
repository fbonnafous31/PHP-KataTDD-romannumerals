<?php
    
    namespace App;

    class Roman {

        public function translate(string $value): int {
            $result = 0;
            $previous = '';
            for($i = 0; $i < strlen($value); $i++) {

                // Cas particulier IV
                if (($previous == 'I') and ($value[$i] == 'V')) {
                    return 4;
                }

                // Gestion I
                if ($value[$i] == 'I') 
                    $result += 1;
                

                // Gestion V
                if ($value[$i] == 'V') {
                    $result += 5;
                }

                $previous = $value[$i];
            }
            return $result;
        }

    }

?>