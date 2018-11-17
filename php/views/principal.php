<?php include 'php/models/principal.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading clearfix">Quizz
                    <div class="pull-right">
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse07"
                            aria-expanded="false" aria-controls="collapse07"><i class="fa fa-bars"></i></button>
                    </div>
                </div>
                <div class="panel-body collapse in" id="collapse07">  
                    <p>Match com o presidente: o resultado irá identificar qual candidato à presidente nas eleições de 2018 tem opinião mais próxima da sua.</p>
                    <button type="button" class="btn btn-primary bt bt-ripple">IR PARA O QUIZZ</button>
                    <hr>
                </div>
            </div>
            <div class="panel panel-warning">
                <div class="panel-heading clearfix">Eleições
                    <div class="pull-right">
                        <button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#collapse01"
                            aria-expanded="false" aria-controls="collapse01"><i class="fa fa-bars"></i></button>
                    </div>
                </div>
                <div class="panel-body collapse in" id="collapse01">
                    <?php foreach ($topicos[0] as $k => $value): ?>
                        <?= inserirPostagemPaginaInicial('eleições', $postagens[$k]->getAtivo(), $postagens[$k]->getNome(), $postagens[$k]->getConteudo(), $postagens[$k]->getData(), $postagens[$k]->getUsuario()->getNome() ) ?>
                    <?php endforeach ?>
                    <?php if(count($topicos[0]) == 0) echo "Nenhum post com esse Tópico"; ?>
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading clearfix">Saúde
                    <div class="pull-right">
                        <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapse02"
                            aria-expanded="false" aria-controls="collapse02"><i class="fa fa-bars"></i></button>
                    </div>
                </div>
                <div class="panel-body collapse in" id="collapse02">
                    <?php foreach ($topicos[3] as $k => $value): ?>
                        <?= inserirPostagemPaginaInicial('eleições', $postagens[$k]->getAtivo(), $postagens[$k]->getNome(), $postagens[$k]->getConteudo(), $postagens[$k]->getData(), $postagens[$k]->getUsuario()->getNome() ) ?>
                    <?php endforeach ?>
                    <?php if(count($topicos[3]) == 0) echo "Nenhum post com esse Tópico"; ?>
                </div>
            </div>
            <div class="panel panel-danger">
                <div class="panel-heading clearfix">Segurança Pública
                    <div class="pull-right">
                        <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#collapse06"
                            aria-expanded="false" aria-controls="collapse06"><i class="fa fa-bars"></i></button>
                    </div>
                </div>
                <div class="panel-body collapse in" id="collapse06">
                    <?php foreach ($topicos[5] as $k => $value): ?>
                        <?= inserirPostagemPaginaInicial('eleições', $postagens[$k]->getAtivo(), $postagens[$k]->getNome(), $postagens[$k]->getConteudo(), $postagens[$k]->getData(), $postagens[$k]->getUsuario()->getNome() ) ?>
                    <?php endforeach ?>
                    <?php if(count($topicos[5]) == 0) echo "Nenhum post com esse Tópico"; ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading clearfix">Educação
                    <div class="pull-right">
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse03"
                            aria-expanded="false" aria-controls="collapse03"><i class="fa fa-bars"></i></button>
                    </div>
                </div>
                <div class="panel-body collapse in" id="collapse03">
                    <?php foreach ($topicos[1] as $k => $value): ?>
                        <?= inserirPostagemPaginaInicial('eleições', $postagens[$k]->getAtivo(), $postagens[$k]->getNome(), $postagens[$k]->getConteudo(), $postagens[$k]->getData(), $postagens[$k]->getUsuario()->getNome() ) ?>
                    <?php endforeach ?>
                    <?php if(count($topicos[1]) == 0) echo "Nenhum post com esse Tópico"; ?>
                </div>
            </div>
            <div class="panel panel-warning">
                <div class="panel-heading clearfix">Economia
                    <div class="pull-right">
                        <button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#collapse04"
                            aria-expanded="false" aria-controls="collapse04"><i class="fa fa-bars"></i></button>
                    </div>
                </div>
                <div class="panel-body collapse in" id="collapse04">
                    <?php foreach ($topicos[2] as $k => $value): ?>
                        <?= inserirPostagemPaginaInicial('eleições', $postagens[$k]->getAtivo(), $postagens[$k]->getNome(), $postagens[$k]->getConteudo(), $postagens[$k]->getData(), $postagens[$k]->getUsuario()->getNome() ) ?>
                    <?php endforeach ?>
                    <?php if(count($topicos[2]) == 0) echo "Nenhum post com esse Tópico"; ?>
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading clearfix">Energia e Meio Ambiente
                    <div class="pull-right">
                        <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapse08"
                            aria-expanded="false" aria-controls="collapse08"><i class="fa fa-bars"></i></button>
                    </div>
                </div>
                <div class="panel-body collapse in" id="collapse08">
                    <?php foreach ($topicos[4] as $k => $value): ?>
                        <?= inserirPostagemPaginaInicial('eleições', $postagens[$k]->getAtivo(), $postagens[$k]->getNome(), $postagens[$k]->getConteudo(), $postagens[$k]->getData(), $postagens[$k]->getUsuario()->getNome() ) ?>
                    <?php endforeach ?>
                    <?php if(count($topicos[4]) == 0) echo "Nenhum post com esse Tópico"; ?>
                   
                </div>
            </div>
            <div class="panel panel-danger">
                <div class="panel-heading clearfix">Regras do Fórum
                    <div class="pull-right">
                        <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#collapse05"
                            aria-expanded="false" aria-controls="collapse05"><i class="fa fa-bars"></i></button>
                    </div>
                </div>
                <div class="panel-body collapse in" id="collapse05">
                    <p>Ao confirmar o cadastro, o membro concorda em cumprir à risca todas as regras aqui estipuladas:</p>
                    <ul class="list-group">
                        <li class="list-group-item">O conteúdo das postagens não deve incluir discurso de ódio a outros usuários, propagandas partidárias, fake news ou informações pessoais do usuário cadastrado. Caso seja verificado o uso deste tipo de conteúdo por um moderador, a postagem será removida, podendo também implicar na exclusão da conta do autor da postagem.</li>
                        <li class="list-group-item">O conteúdo das postagens deve estar relacionado à educação, saúde, segurança pública, energia, economia, política ou eleições. Sendo a responsabilidade dos moderadores de verificar se o conteúdo é adequado ou não.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
	
</script>