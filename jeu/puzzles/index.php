<?php
	function shuffle_assoc($list) { 
		if (!is_array($list)) return $list; 

		$keys = array_keys($list); 
		shuffle($keys); 
		$random = array(); 
		foreach ($keys as $key) 
		$random[$key] = $list[$key]; 

		return $random; 
	} 
	
	function isImage($file){
		if(in_array(mime_content_type($file), array("image/jpeg", "image/gif", "image/png"))){
			return true;
		}
		return false;
	}

	$puzzleDir = './mountain';
	$piecesDir = $puzzleDir."/pieces";
	
	$handle = opendir($piecesDir);
	
	while (($file = readdir($handle)) !== false) {
		
		if(isImage($piecesDir."/".$file)){
			$nom = explode(".", $file);
			$pieces[$nom[0]] = $file;
		}
    }
	
	$shufpieces = shuffle_assoc($pieces);
	
	$infoPiece = getimagesize($piecesDir."/".reset($pieces));
	$widthPiece = $infoPiece[0]/2;
	$heightPiece = $infoPiece[1]/2;
	
	$nbLignes = 4;
	$nbColonnes = 4;
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css" type="text/css">
	</head>
	<body>
		<div id="loading">
			<span class="fas fa-cog fa-spin fa-6x"></span>
		</div>
	
        <div id="container">
			<div id="pieces" style="height: <?= $heightPiece*$nbLignes ?>px; width: <?= $widthPiece*$nbColonnes ?>px;">
			<?php
				foreach($shufpieces as $nom => $piece){
					
					$file = $piecesDir."/".$piece;
				
					echo "<div class='blocPiece'>
							<img class='piece' style='height:".$heightPiece."px; width:".$widthPiece."px;' id='$nom' src='$file'>
						  </div>";
				}
			?>
			</div>
			
			<div id="bg-plateau" style="height: <?= $heightPiece*$nbLignes ?>px; width: <?= $widthPiece*$nbColonnes ?>px;">
				<div id="plateau">
				<?php
					foreach($pieces as $nom){
						$datanom = explode(".", $nom);
						echo "<div class='drop' data-piece='$datanom[0]' style='height:".$heightPiece."px; width:".$widthPiece."px;'></div>";
					}
				?>
				</div>
			</div>
		
		</div>
		
        <script
		  src="https://code.jquery.com/jquery-3.4.1.min.js"
		  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
		  crossorigin="anonymous"></script>
        <script
		  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
		  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
		  crossorigin="anonymous"></script>
		  
        <script>
			
			function getRandomInt(min, max) {
				min = Math.ceil(min);
				max = Math.floor(max);
				return Math.floor(Math.random() * (max - min)) + min;
			}
			
			$(document).ready(function(){
				
				$("#loading").fadeOut(500, function(){
					$("#container").fadeIn(500);
				
					var pieces = $("#plateau").children().length;
					
					$(".piece").draggable({ 
						revert: false,
						cursor: "move",
						stack: ".piece"
					});
					
					$(".blocPiece").each(function(){
						var x = $(this).position();
						var top = x.top/5;
						var left = x.left/5;
						$(this).css({"top": getRandomInt(-top, top), "left": getRandomInt(-left, left)});
					});
					
					$(".drop").droppable({
						accept: ".piece",
						drop: function(event, ui){
							//je mets l'id de l'image dans une variable
							var id = ui.draggable.attr("id");
							//si le data-attribute piece est le même que l'id de l'image
							if($(this).data("piece") == id){
								pieces--;//une image de moins à placer
								var img = $("#"+id).attr("src");//je récupère l'attribut src de l'image que j'ai déposé
								
								ui.draggable.children("img").remove();//j'efface l'image déposable (draggable) de la liste des pièces disponibles
								ui.draggable.css("visibility", "hidden");
								//la boite dans laquelle j'ai déposé l'image aura un arriere plan avec la source de l'image déposée
								$(this).css({"background-image" : "url('"+img+"')"});
								$(this).animate({
									borderWidth: 5
								}, 300).animate({
									borderWidth: 0
								}, 300)
							}
							
							if(pieces == 0){
								$("#pieces").slideUp(500);
								
								$("#bg-plateau").animate({
									
									borderWidth: 20
								}, 500)
							}
							
						}
					});
				});
			});
			
        </script> 

    </body>  		
	
</html>
