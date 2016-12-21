<?php


namespace common\helpers;


class SummaryArrayHelper {

   public static function map(array $array, array $indexes = null, $keys)
    {
        $arrayRes = [];
        $i = 0;
        $valueNew = [];

        foreach ($array as  $value) {

            if(is_array($value)){

                if(is_array($keys)) {

                    foreach ($keys as $key){

                        if(array_key_exists($key, $value)){

                            $valueNew[$key] = $value[$key];

                        }

                    }
                } else {

                    if( array_key_exists($keys, $value)){

                        $valueNew = $value[$keys];

                    }

                }
            }

            if(isset($indexes)) {

                $arrayRes[$indexes[$i]] = $valueNew;

                $i++;

            } else {

                $arrayRes[$i] = $valueNew;
                $i++;
            }
        }

        return $arrayRes;

    }

} 