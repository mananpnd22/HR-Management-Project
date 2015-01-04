<?php
	require_once( 'fpdf.php' );
	
	
	class PDF extends FPDF {
		function Header() {
			$this->SetFont( 'Arial', 'B', 24 ); //set font to Arial, Bold, and 16 Size
	
			//create heading with params
			//0 - 100% width
			//9 height
			//"Page Heading" - With this text
			//1 - border around it, and center aligned
			//1 - Move pionter to new line after writing this heading
			//'C' - center aligned
			$this->Cell( 0, 9, 'ITgyan', 1, 1, 'C' );
			
			$this->SetFont( 'Arial', '', 8 );
			$this->Cell( 0, 9, '3rd Floor,B Gold Coin Complex Near Jodhpur Char Rasta Satellite Ahmedabad - 380015 
			Phone : 0091 83476 50006 Email : info.itgyan@gmail.com Website : www.itgyan.co.in',1, 1, 'C' );
			
			$this->ln( 5 );
			?> <table width="100%" align="center">
						<tr>
						<td>ITgyan</td>
						</tr>
						</table>
						<?php
		}
		
		function Footer() {
			//move pionter at the bottom of the page
			$this->SetY( -15 );
			
			//set font to Arial, Bold, size 10
			$this->SetFont( 'Arial', 'B', 10 );
			
			//set font color to blue
			$this->SetTextColor( 52, 98, 185 );
			
			$this->Cell( 0, 10, 'www.iFadey.com', 0, 0, 'L' );
			
			//set font color to gray
			$this->SetTextColor( 150, 150, 150 );
			
			//write Page No
			$this->Cell( 0, 10, 'Page No: ' . $this->PageNo(), 0, 0, 'R' );
		}
	}
	
	
	$fpdf = new PDF();
	
	$fpdf->AddPage(); //add a page in pdf document
	
	$fpdf->SetFont( 'Arial', 'B', 15 ); //set font to Arial, Bold, and 14 Size
	$fpdf->MultiCell( 0, 6, 'This is multiline sub heading. This heading is created using MultiCell method.', 0, 1 );
	
	$fpdf->ln( 5 );
	
	$fpdf->SetFont( 'Arial', '', 12 ); //set font to Arial, Regular, and 12 Size
	
	//6 - line height
	//text to be displayed
	$fpdf->Write( 6,
		     "Lorem Ipsum is simply dummy text of the printing and typesetting industry.\nLorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
	);
	
	$fpdf->Image( 'myImage.jpg', 10, 65 );
	
	$fpdf->ln( 50 );
	
	$fpdf->Write( 5, 'This is some text' );
	
	$fpdf->Output(); //generate pdf file and send it to client
?>
