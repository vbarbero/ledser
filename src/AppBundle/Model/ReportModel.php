<?php
/**
 * Created by PhpStorm.
 * User: trading
 * Date: 8/02/18
 * Time: 1:46
 */

namespace AppBundle\Model;


class ReportModel
{
    const PROPONENT = 1;
    const FREED = 2;
    const CLIENT = 3;
    const CALL = 1;
    const VISIT = 2;
    const EMAIL = 3;


    public static function getActionAsChoice()
    {
        return
            [
                'CALL FOLLOW UP' => self::CALL,
                'COMMERCIAL VISIT' => self::VISIT,
                'SEND EMAIL' => self::EMAIL,
            ];
    }

    public static function getAction()
    {
        return
            [
                self::CALL => 'CALL FOLLOW UP',
                self::VISIT => 'COMMERCIAL VISIT',
                self::EMAIL => 'SEND EMAIL'
            ];
    }

    public static function getDoneAsChoice()
    {
        return
            [
                'Yes' => true,
                'No' => false,
            ];
    }

    public static function getClientTypeAsChoice()
    {
        return
            [
                'PROPONENT' => self::PROPONENT,
                'FREED' => self::FREED,
                'CLIENT' => self::CLIENT
            ];
    }

    public static function getClientType()
    {
        return
            [
                self::PROPONENT => 'PROPONENT',
                self::FREED => 'FREED',
                self::CLIENT => 'CLIENT'
            ];
    }
}