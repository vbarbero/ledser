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
    const STUDY= 1;
    const APPROVED = 2;
    const ISSUE = 3;
    const CLOSE = 4;
    const LOST = 5;
    const DENY = 6;


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