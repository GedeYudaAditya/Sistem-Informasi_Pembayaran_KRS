<?php

defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Name			: Krs_Helper
 * Author		: MHJTI 2022
 * Created		: 1.11.2022
 * Description	: Berisi seluruh syntax helper untuk sistem iuran hmj / krs
 * Requirements	: PHP 5.4 atau diatasnya
 *
 * @package    SSO HMJ TI Undiksha
 * @author     Pengurus HMJ 2022 (Primagiant)
 * @filesource
 **/

function getSemesterFromAngkatan($angkatan)
{
    $smt = getDate()['year'] - $angkatan;
    switch (getDate()['month']) {
        case 'January':
            $smt = ($smt * 2) + 1;
            break;
        case 'February':
            $smt = ($smt * 2);
            break;
        case 'March':
            $smt = ($smt * 2);
            break;
        case 'April':
            $smt = ($smt * 2);
            break;
        case 'May':
            $smt = ($smt * 2);
            break;
        case 'June':
            $smt = ($smt * 2);
            break;
        case 'July':
            $smt = ($smt * 2);
            break;
        case 'August':
            $smt = ($smt * 2) + 1;
            break;
        case 'September':
            $smt = ($smt * 2) + 1;
            break;
        case 'October':
            $smt = ($smt * 2) + 1;
            break;
        case 'November':
            $smt = ($smt * 2) + 1;
            break;
        case 'December':
            $smt = ($smt * 2) + 1;
            break;
    }
    return $smt;
}
