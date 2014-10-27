<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Awakenweb\BeverageCleaner;

/**
 * Description of Scss
 *
 * @author Mathieu
 */
class Cleaner
{

    public static function clean(array $directoriesAndFiles)
    {
        $fs = new Filesystem();

        $fs->remove($directoriesAndFiles);
    }

}
