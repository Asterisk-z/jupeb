<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Models\Student;

Class NumberGenerator {

	public static function registerationNumber() {
		$time = time() * 999999;
		$num = substr($time,-10,10);
		return $num;
	}


	public static function acceptanceNumber() {
		$time = time() * 9999;
		$num = substr($time,-11,8);
		return $num;
	}


	public static function schoolFeeNumber() {
		$time = time() * 99999;
		$num = substr($time,-12,6);
		return $num;
	}

	// public static function applicationNumber() {
	// 	$year = date('y');
	// 	$id = count(Student::all());
	// 	$id = str_pad($id, 3, '0', STR_PAD_LEFT);
    //     $number = $year.''.$id.'';
	// 	$pin = 'PGACC|'.$number;
	// 	return $number;
	// }

	// public static function invoiceNumber() {
	// 	$time = time();
	// 	$num = substr($time,-6,6);
	// 	$pin = 'SIWES|PAY|'.$num.'';
	// 	return $pin;
	// }



}
