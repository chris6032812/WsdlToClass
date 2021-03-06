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

namespace WsdlToClass\Generator;

use WsdlToClass\Wsdl\Wsdl;

/**
 * The IClientGenerator ensures that a client class can be generated
 * @author Danny van der Sluijs <danny.vandersluijs@icloud.com>
 */
interface IClientGenerator
{
    /**
     * Generate a client class from a Wsdl object
     * @param Wsdl $wsdl
     */
    public function generateClient(Wsdl $wsdl);

    /**
     * Get the namespace
     * @return string
     */
    public function getNamespace();
}
