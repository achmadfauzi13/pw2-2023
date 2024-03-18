<?php
/**
* Task 4 - Function
* function kelulusan
* function grade
*/

	function kelulusan($hasil){
		/**
		* Function kelulusan, jika:
		* total nilai lebih dari 55 maka lulus
		* total nilai kurang dari 55 maka tidak lulus
		*/
		if($hasil > 55){
			$title = "Lulus";
		} else{
			$title = "Tidak lulus";
		}
		return $title;
	}
	
	function grade($total) {
	  /**
		* Function grade, jika:
		* total nilai <= 100 maka A
		* total nilai <= 84 maka B
		* total nilai <= 69 maka C
		* total nilai <= 55 maka D
		* total nilai <= 35 maka E
		* selain itu maka I
		*/ 
		if($total <= 100 && $total >= 85){
			$grade = "A";
			$predi = "Sangat memuaskan";
		} elseif($total <= 84 && $total >= 70){
			$grade = "B";
			$predi = "Memuaskan";
		} elseif($total <= 69 && $total >= 56){
			$grade = "C";
			$predi = "Cukup baik";
		} elseif($total <= 55 && $total >= 36){
			$grade = "D";
			$predi = "Cukup";
		} elseif($total <= 35 && $total >= 0){
			$grade = "E";
			$predi = "Ngulang";
		} else{
			$grade = "I";

		}
		return [$grade, $predi];
	}

	function rerata($nilaiuts, $nilaiuas, $nilaitgs) {
		$ratara = ($nilaiuts + $nilaiuas + $nilaitgs) / 3;
		return $ratara;
	}
?>