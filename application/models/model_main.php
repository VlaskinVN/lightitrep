<?php
    class Model_Portfolio extends Model
    {
        function number_to_roman($value)
        {
            if($value < 0) return "";
            if(!$value) return "0";

            $thousands = (int) ($value / 1000);
            $value -= $thousands * 1000;
            $result = str_repeat("M", $thousands);
            $table = array(
                900 => "CM", 500 => "D", 400 => "CD", 100 => "C",
                90 => "XC", 50 => "L", 40 => "XL", 10 => "X",
                9 => "IX", 5 => "V", 4 => "IV", 1 => "I");

            while($value) {
                foreach($table as $part => $fragment) if ($part <= $value) break;
                    $amount = (int) ($value / $part);

                $value -= $part * $amount;
                $result .= str_repeat($fragment, $amount);
            }
            return $result;
        }

        function roman_to_number($value)
        {
            $romans = array(
                'M' => 1000,
                'CM' => 900,
                'D' => 500,
                'CD' => 400,
                'C' => 100,
                'XC' => 90,
                'L' => 50,
                'XL' => 40,
                'X' => 10,
                'IX' => 9,
                'V' => 5,
                'IV' => 4,
                'I' => 1,
            );
            
            $roman = $value;
            $result = 0;
            $cnt = 0;

            while($roman){
                foreach ($romans as $key => $value) {
                    //echo "___strpos($roman, $key)<br>";
                    $cnt++; 
                    while (strpos($roman, $key) === 0) {    
                        if (!preg_replace("~($key){4,}~", '', $roman)){
                            return "error";
                        }                   

                        //echo "strpos($roman, $key)<br>";
                        $result += $value;
                        //echo "$result += $value<br>";
                        $roman = substr($roman, strlen($key));
                        $cnt = 0;
                    }         
                                
                    //echo "cnt = " . $cnt . "<br>";
                }
                //echo "$cnt == ".count($romans)." <br>";
                if ($cnt > 13) {
                    return "error";
                }
            }         
            return $result;
        }

        public function get_data()
        {	
            return "hello world!";
        }
    }    