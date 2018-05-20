<?php
	//cac la bai
	$array_cards = array("2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K", "A");
	//kieu bai: co, ro, chuong, bich - Hearts, Diamonds, Clovers, Spades
	$array_rank = array("H", "D", "C", "S");
	
	if(isset($_POST["ketqua"])){
		$maTayBai = $_POST["taybai"];
		$dodaichuoi = strlen($maTayBai);
		echo $maTayBai;
		echo "</br>";
		$dem_doi = 0;
		$dem_la = 0;
		
		//mang luu cac gia tri xuat hien cua quan bai
		$array_count = array(
			array(0, "s"),
			array(0, "s"),
			array(0, "s"),
			array(0, "s"),
			array(0, "s")
		);
		
		//lay ra tung la bai
		for($i = 0; $i <= $dodaichuoi - 2; $i+=2){
			$quanBaiArray = var_dump(substr($maTayBai, $i, 2));
			//if(($i % 2) != 0) $i+=1;
			echo substr($maTayBai, $i, 2);
		}
		//4 quan bai cung rank trong 5 la - 4C -
		//5 quan bai co 1 cap va 3 la - FH
		//3 quan bai trong 5 la cung rank - 3C
		//5 quan bai co 2 doi - 2P - 
		//2 quan bai cung rank trong 5 quan bai - 1P -
		//xet cac truong hop
		for($i = 0; $i < count($quanBaiArray) - 1; $i++){
			for($j = $i + 1; $j < count($quanBaiArray); $j++){
				if(substr($quanBaiArray[$i], 1, 1) == substr($quanBaiArray[$j], 1, 1)){
					if(substr($quanBaiArray[$i], 0, 1) == substr($quanBaiArray[$j], 0, 1)){
						echo "loi khi co 2 quan bai trung nhau!";
					}else {
						$array_count[$i][0]+= 1;
						$array_count[$i][1] = "s";
						$i+= 1;
					}
				}
			}
		}
		echo "</br>";
		echo "ket qua tay bai cua ban";
		echo "</br>";
		//xuat ket qua nhap
		for($i = 0, $j = 1; $i < 5; $i ++){
			if($array_count[$i][0] == 4) {
				echo "4C";
				break;
			}else if($array_count[$i][0] == 1){
				$dem_doi+=1;
			}else if($array_count[$i][0] == 2){
				$dem_la+=1;
			}else continue;
		}
		
		if($dem_doi == 1 && $dem_la == 0){
			echo "1P";	
		}else if($dem_doi == 2 && $dem_la == 0){
			echo "2P";	
		}else if($dem_doi == 0 && $dem_la == 1){
			echo "3C";	
		}else if($dem_doi == 1 && $dem_la == 1){
			echo "FH";
		}else echo "5C";
	}
?>
