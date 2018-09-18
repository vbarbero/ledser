<?php
/**
 * Created by PhpStorm.
 * User: trading
 * Date: 8/02/18
 * Time: 1:46
 */

namespace AppBundle\Model;


class CalculatorModel
{
    const PROPONENT = 1;
    const FREED = 2;
    const CLIENT = 3;


    public static function getStateAsChoice()
    {
        return
            [
                'Study' => self::STUDY,
                'Approved' => self::APPROVED,
                'deny' => self::DENY,
                'Issued contract' => self::ISSUE,
                'CLose' => self::CLOSE,
                'Lost' => self::LOST,
                'Unpaid' => self::UNPAID,
            ];
    }

    public static function getState()
    {
        return
            [
                self::STUDY => 'Study',
                self::APPROVED => 'Approved/deny',
                self::DENY => 'deny',
                self::ISSUE => 'Issued contract',
                self::CLOSE => 'CLose',
                self::LOST => 'Lost',
                self::UNPAID => 'UNpaid',
            ];
    }

    public static function getOperationalTypeAsChoice()
    {
        return
            [
                'Discount' => 'Discount',
                'Advance' => 'Advance',
            ];
    }
}