<?php 
require 'quadre.php';
class Tauler{
		private $peces = array();
		private $tipus; //escac o aleat
		private $nRows = null;
		private $nCols = null;

		function __construct($nRows=null, $nCols=null,$tipus)
		{
			$this->tipus = $tipus;
			$this->nRows = $nRows;
			$this->nCols = $nCols;
			switch ($tipus) 
			{
				case 'escac':
					$this->escac($nRows,$nCols,$tipus);
					break;
				
				case 'aleat':
					$this->aleat($nRows,$nCols,$tipus);
					break;
			}
		}
		function escac($nRows = null, $nCols =null, $tipus)
		{
			$this->nRows = 8;
			$this->nCols = 8;
			for ($i=0; $i < $nRows; $i++) 
			{ 
				for ($z=0; $z < $nCols; $z++) 
				{ 
					if($i%2!=0)
					{

						if ($z%2==0) 
						{
							$color = "black";

						}
						else
						{
							$color ="white";
						}
						$this->peces[$i][$z] = new Quadre($color);
					}
					else
					{
						if ($z%2==0) 
						{
							$color = "white";

						}
						else
						{
							$color ="black";
						}
						$this->peces[$i][$z] = new Quadre($color);
					}
				}
			}
		}
		function aleat($nRows = null, $nCols =null, $tipus)
		{

			for ($i=0; $i < $nRows; $i++) 
			{ 
				for ($z=0; $z < $nCols; $z++) 
				{ 
					$random = rand(0,1);
					if($random==1)
					{
						$color = "black";

					}
					else
					{
						$color = "white";
					}
					$this->peces[$i][$z] = new Quadre($color);
					
				}
			}
		}
		function show(){
			echo '<body style="background-color:tomato;">';
			echo '<table>';
			for ($i=0; $i < $this->nRows; $i++) 
			{ 
				echo "<tr>";
				for ($z=0; $z < $this->nCols; $z++) 
				{ 
					echo $this->peces[$i][$z]->show();
				}
				echo "</tr>";
			}
			echo '</table>';
			echo '</body>';
		}

}
 ?>