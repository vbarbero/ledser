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


    public static function getOperationalTypeAsChoice()
    {
        return
            [
                'Discount' => 'Discount',
                'Advance' => 'Advance',
            ];
    }
}