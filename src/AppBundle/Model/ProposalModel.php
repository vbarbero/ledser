<?php
/**
 * Created by PhpStorm.
 * User: trading
 * Date: 8/02/18
 * Time: 1:46
 */

namespace AppBundle\Model;


class ProposalModel
{
    const PROPONENT = 1;
    const FREED = 2;
    const CLIENT = 3;


    public static function getTypeAsChoice()
    {
        return
            [
                'PROPONENT' => self::PROPONENT,
                'FREED' => self::FREED,
                'CLIENT' => self::CLIENT
            ];
    }

    public static function getType()
    {
        return
            [
                self::PROPONENT => 'PROPONENT',
                self::FREED => 'FREED',
                self::CLIENT => 'CLIENT'
            ];
    }

    public static function getOperationalTypeAsChoice()
    {
        return
            [
                'Discount' => 'Discount',
                'Advance' => 'Advance',
                'Loan' => 'Loan',
            ];
    }
}