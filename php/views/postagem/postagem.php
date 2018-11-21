<?php 

		require __DIR__.'/../../models/funcoes.php';
		$idPostagem = $_GET['postagem'];
		$data = getComentarioByPostagem($idPostagem);
		$postagem = $data[1];
		$comentarios = $data[0];
		session_start();
		if(isset($_SESSION['usuario'])) $usuario = $_SESSION['usuario'];
		else $usuario = null;
		
		
?>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h2><?= $postagem->getNome() ?></h2>
			<p class="conteudoPostagem"> <?= $postagem->getConteudo()?>	 </p>
			<hr>
			<?php foreach ($comentarios as $key => $comentario) { ?>		
				<div class="row comentario">
					<b class="nomeComentario"> <?= $comentario->getUsuario()->getNome() ?> - </b><?= $comentario->getComentario() ?>
					<?php if($usuario != null && $usuario->getNivel()){ ?>
					<div class="row">
						<br>
						<button type="button" class="btn btn-danger excluirComentario" onclick="excluir('<?= $postagem->getId()?>', '<?= $comentario->getId()?>')">Excluir</button>
				
					</div>
					<?php } ?>
				</div>
			<?php } ?>
			<?php if(count($comentarios) == 0){ ?>
				<div>Esta postagem não possui nenhum comentário!</div>
			<?php } ?>
			<br><br>
			<?php if($usuario != null && $postagem->getAtivo()) {
				$id = $usuario->getId();
				$disabled = 'false';
			} else {
				$id = null;
				$disabled = 'true';
			}?>
			<form action="php/includes/novoComentario.php" method="POST">			  
			  <div class="form-group">
			    <label for="exampleFormControlTextarea1">Escrever um comentário
			    	<?php if($disabled == 'true') {?>
			    		<span style="margin-left: 20px; color: red; font-size: 10px;">*Comentário desativado</span>
			    	<?php } ?>
			    </label>
			    <input  type="text" name="id_usuario" value="<?= $id ?>" style="display: none;">
			    <input  type="text" name="id_post" value="<?= $postagem->getId() ?>" style="display: none;">
			    <textarea disabled="<?= $disabled ?>" required min="3" name="comentario" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			  </div>
			  <button disabled="<?= $disabled ?>" type="submit" class="btn btn-primary">Comentar</button>
			</form>
			<br>	
		</div>
	
		<div class="col-md-4">
			<div class="painelPostagem">
				<h3><?= $postagem->getUsuario()->getNome() ?></h3>
				<h4><?= $postagem->getData() ?></h4>
				<h4><?= $postagem->getTopico()->getNome() ?></h4>
				<h4><?= count($comentarios)?> <i class="fa fa-comments"></i></h4>
				<?php if($postagem->getUsuario()->getId() == $usuario->getId() && $postagem->getAtivo()){ ?>
				<button class="btn btn-primary fecharPostagem" data-postagem="<?= $postagem->getId() ?>">Fechar Postagem</button>
				<?php } if(!$postagem->getAtivo()) {?>
					<span class='label label-danger'>FECHADA</span>
				<?php } ?>

			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	let disabled = "<?= $disabled ?>"
	if(disabled == 'false'){
		$('textarea').prop('disabled',false)
		$('button').prop('disabled',false)
	}
	$('.fecharPostagem').click(function(){
		let postagem = $('.fecharPostagem').data('postagem')
		location.href = 'php/includes/fecharPostagem.php?postagem=' + postagem
	})

	function excluir(postagem, comentario){
		
		location.href = 'php/includes/excluirComentario.php?postagem=' + postagem +'&comentario=' + comentario
	}
</script>