<?php
	function comparaisonN($nbr1, $nbr2){
		if ($nbr1 > $nbr2) {
			echo "Le premier nombre est plus grand"; 
		}
		elseif ($nbr1 < $nbr2) {
			echo "Le premier nombre est plus petit";
		}
		else{
			echo "Les deux nombres sont identiques";
		}
	}comparaisonN(4, 9)
?>