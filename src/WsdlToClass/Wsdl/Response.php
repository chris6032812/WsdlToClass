<?php

/**
 * WsdlToClass
 *
 * PHP Version 5.6
 *
 * @copyright 2015 Danny van der Sluijs <danny.vandersluijs@icloud.com>
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU-GPL
 * @link      http://dannyvandersluijs.nl
 */
namespace WsdlToClass\Wsdl;

use WsdlToClass\Generator\IStructureGenerator;

/**
 * A Response is a specific form of a Struct
 *
 * @author Danny van der Sluijs <danny.vandersluijs@icloud.com>
 */
class Response extends Struct
{
    /**
     * Create a response from a Struct
     * @param \WsdlToClass\Wsdl\Struct $struct
     * @return Response
     */
    public static function createFromStruct(Struct $struct)
    {
        $response = new static;
        $response
            ->setName($struct->getName())
            ->setProperties($struct->getProperties());

        return $response;
    }
}
