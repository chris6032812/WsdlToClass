<?php

/*
 * WsdlToClass
 *
 * PHP Version 5.6
 *
 * @copyright 2015 Danny van der Sluijs <danny.vandersluijs@icloud.com>
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU-GPL
 * @link      http://dannyvandersluijs.nl
 */
namespace WsdlToClass\Writer;

/**
 *
 * @author dannyvandersluijs
 */
interface IWriter
{
    public function writeFile($filename, $content = '');
}
