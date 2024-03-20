<?php 
		/**
		 * Task 2
		 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
		 * Luas, Keliling dan Volume
		 * p = 29, l = 16, t = 7
		 */


		require_once 'class_balok.php';
		$balok1 = new Balok(3,5,4);
		$balok2 = new Balok(2,9,6);
		$balok3 = new Balok(3,6,7);
		$balok4 = new Balok(9,4,7);

		// luas
		echo 'balok1 :';
		echo '<hr>';
		echo '<br> Luas Balok1 adalah :' . $balok1->getLuas(). 'cm';
		echo '<br> Keliling Balok1 adalah :' . $balok1->getKeliling(). 'cm';
		echo '<br> Volume Balok1 adalah :' . $balok1->getVolume(). 'cm';
		echo '<hr>';
		echo 'balok2 :';
		echo '<hr>';
		echo '<br> Luas Balok2 adalah :' . $balok2->getLuas(). 'cm';
		echo '<br> Keliling Balok2 adalah :' . $balok2->getKeliling(). 'cm';
		echo '<br> Volume Balok2 adalah :' . $balok2->getVolume(). 'cm';
		echo '<br>';
		echo '<hr>';
		echo 'Balok3 :';
		echo '<hr>';
		echo '<br> Luas Balok3 adalah :' . $balok3->getLuas(). 'cm';
		echo '<br> Keliling Balok3 adalah :' . $balok3->getKeliling(). 'cm';
		echo '<br> Volume Balok3 adalah :' . $balok3->getVolume(). 'cm';
		echo '<hr>';
		echo 'balok4 :';
		echo '<hr>';
		echo '<br> Luas Balok4 adalah :' . $balok4->getLuas(). 'cm';
		echo '<br> Keliling Balok4 adalah :' . $balok4->getKeliling(). 'cm';
		echo '<br> Volume Balok4 adalah :' . $balok4->getVolume(). 'cm';
		echo '<hr>';



		
?>