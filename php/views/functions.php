<?php 
	function inserirPostagemPaginaInicial($topico,$fechada,$titulo,$texto,$dataPublicacao,$autorPublicacao, $id){
		switch ($topico) {
			case 'eleições':
				$tipoLabel = "warning";
				break;
			case 'saúde':
				$tipoLabel = "success";
				break;
			case 'segurança':
				$tipoLabel = "danger";
				break;
			case 'educação':
				$tipoLabel = "primary";
				break;
			case 'energia':
				$tipoLabel = "success";
				break;
			case 'economia':
				$tipoLabel = "warning";
				break;
		}
		echo "<div>";
           echo "<span class='label label-".$tipoLabel."'style='margin-right: 2px;'>".$topico."</span>";
           if($fechada != True) echo "<span class='label label-danger'>FECHADA</span>"; 
           echo "<h3>".$titulo."</h3>";
        echo "</div>";   
        echo "<p>".$texto."</p>";
        echo "<div>";
        echo "<span class='badge' style = 'margin-top: 2vh;'>Postado em ".$dataPublicacao." por ".$autorPublicacao."</span>";
        echo "<a class='btn icon-btn btn-primary pull-right' href='php/includes/postagem.php?postagem=". $id."'><span class='glyphicon btn-glyphicon glyphicon-comment img-circle text-primary'></span>Visualizar Discussão</a>";        
        echo "</div>";   
        echo "<hr>";
	}
 ?>