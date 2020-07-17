
<div class="container">
	<?php if($this->session->flashdata('mensagem')){?>
		<div class="alert alert-success" role="alert">
			<?=$this->session->flashdata('mensagem') ?>
   		</div>
	<?php } ?>
	
	<h1>Clubes</h1>
	<table class="table table-bordered table-striped table-sm tabela" style="font-size:14px;">
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
					<td><?=$clube->CLUBE?></td>
					<td><?=$clube->DIVISAO?>ª divisão</td>
					<td><?=$clube->FACEBOOK?></td>
					<td><?=$clube->INSTAGRAM?></td>	
                    <td><?=$clube->TWITTER?></td>					
                    <td><?=$clube->YOUTUBE?></td>	
                    <td><?=$clube->TOTAL?></td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>		
</div>