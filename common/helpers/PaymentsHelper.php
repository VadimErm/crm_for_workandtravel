<?php
/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 05.01.17
 * Time: 12:38
 */

namespace common\helpers;


class PaymentsHelper {

    public static function getAmountPaid($payments){

        $sum = 0;
        foreach($payments as $payment) {
            if($payment->status == 1) {
                $sum += $payment->payment;
            }
        }
        return $sum;

    }
} 