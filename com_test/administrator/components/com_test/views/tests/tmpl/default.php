<? defined('KOOWA') or die; ?>
<script src="media://lib_koowa/js/koowa.js" />

<form action="<?=@route()?>" method="get" class="-koowa-grid">
	<table class="adminlist">
		<thead>
			<tr>
				<th width="10">id</th>
				<th width="10">&nbsp;</th>
				<th><?= @helper('grid.sort', array('column'=>'title'))?></th>
			</tr>
		</thead>
		
		<tfoot>
			<tr>
				<td colspan="99">
					<?= @helper('paginator.pagination', array('total'=>$total))?>
				</td>
			</tr>
		</tfoot>
		
		<tbody>
			<? foreach ($tests as $test): ?>
			<tr>
				<td><?= $test->id; ?></td>
				<td><?= @helper('grid.checkbox', array('row'=>$test))?>
				<td>
					<a href="<?= @route('view=test&id='. $test->id) ?>">
						<?= $test->title; ?>
					</a>
				</td>
			</tr>
			<? endforeach; ?>
		</tbody>
	</table>
</form>
