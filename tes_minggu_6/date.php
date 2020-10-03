<?php

/** 
 * Poin 2
 *  - 1 || Buatlah sebuah function untuk validasi input dari user untuk tanggal
 *  - 1 || validasi input dari user sesuai format ( dd/mm/yyyy ) 02/10/2020 
 * 
 *  contoh 
 *  1.user input data 02/10/2020
 *  2.output Friday, 02 October 2020 // ( day, date month year )
 */

 
function validDate($input_data)
{
$date = DateTime::createFromFormat($input_data, readline("Masukkan Angkanya : "));
    echo $date->format('l, d-M-Y');
}
// validDate('d/m/Y');


