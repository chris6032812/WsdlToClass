<?php

/*
 * wsdlToClass
 *
 * PHP Version 5.3
 *
 * @copyright 2015 Danny van der Sluijs <dammy.vandersluijs@icloud.com>
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU-GPL
 * @link      http://dannyvandersluijs.nl
 */
namespace WsdlToClass\Writer;
/**
 * Description of ResourceWriter
 *
 * @author dannyvandersluijs
 */
class ResourceWriter implements IWriter
{
    public function writeFile($filename, $content = '')
    {
        $handle = fopen($filename, 'w');
        fwrite($handle, $content);
        fclose($handle);
    }
}
