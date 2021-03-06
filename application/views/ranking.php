
<div class="container">
	<?php if($this->session->flashdata('mensagem')){?>
		<div class="alert alert-success" role="alert">
			<?=$this->session->flashdata('mensagem') ?>
   		</div>
	<?php } ?>
	
	<h1>Ranking Digital - Clubes Paulistas de Futebol</h1>
    <h3>Julho/2020 - Facebook,Twitter,Instagram e Youtube</h3>
    <label for="divisao">Selecione a Divisão:</label>
    <form method="post" action="<?=base_url('welcome/index')?>">
        <select name="divisao" id="divisao" class="form-control form-control-sm mb-2" onchange="this.form.submit();">
            <option value="0" <?php if($divisao == 0) { echo "selected"; }?>>Todas</option>
            <option value="1" <?php if($divisao == 1) { echo "selected"; }?>>1ª Divisão</option>
            <option value="2" <?php if($divisao == 2) { echo "selected"; }?>>2ª Divisão</option>
            <option value="3" <?php if($divisao == 3) { echo "selected"; }?>>3ª Divisão</option>
            <option value="4" <?php if($divisao == 4) { echo "selected"; }?>>4ª Divisão</option>
        </select>
    </form>

	<table class="table table-bordered table-striped table-sm tabela my-3" style="font-size:14px;">
		<thead>
			<tr>
				<th>Posição</th>
				<th>Clube</th>
				<th>Divisão</th>
				<th>Facebook</th>
				<th>Instagram</th>
				<th>Twitter</th>
				<th>Youtube</th>
                <th>Total</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($clubes as $key => $clube): ?>
				<tr>
					<td></td>
					<td><img class="mr-1" src="<?=base_url('img/escudos/'.$clube->IMAGEM)?>.png" alt="<?=$clube->CLUBE?>" style="width:30px;height:30px;"><?=$clube->CLUBE?></td>
					<td><?=$clube->RANKING->DIVISAO?>ª divisão</td>
					<td><?=$clube->RANKING->FACEBOOK?></td>
					<td><?=$clube->RANKING->INSTAGRAM?></td>	
                    <td><?=$clube->RANKING->TWITTER?></td>					
                    <td><?=$clube->RANKING->YOUTUBE?></td>	
                    <td><?=$clube->RANKING->TOTAL?></td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>		
    <p class="mt-5"><small><strong>Data da Coleta: 15 de Julho de 2020 - somente dados das páginas oficiais dos clubes</strong></small></p>
    <p><small>Não são considerados dados declarados, apenas as contagens oficiais das próprias plataformas</small></p>
    <p><small>Critério: todos os clubes que participam do Campeonato Paulista Séries(A1,A2,A3 e B)</small></p>
    <p class="mb-5"><small >Informações coletadas: Facebook: curtidas da página. Twitter:seguidores. Instagram:seguidores. Youtube:inscritos.</small></p>
</div>