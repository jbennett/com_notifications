<? defined('KOOWA') or die; ?>
<script src="media://lib_koowa/js/koowa.js" />

<form action="<?=@route()?>" method="get" class="-koowa-grid">
	<table class="adminlist">
		<thead>
			<tr>
				<th width="10">id</th>
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
			<? foreach ($notifications as $notification): ?>
			<tr>
				<td><?= $notification->id; ?></td>
				<td>
					<a href="<?= @route('view=notification&id='. $notification->id) ?>">
						<?= $notification->title; ?>
					</a>
				</td>
			</tr>
			<? endforeach; ?>
			
			<? if (!count($notifications)): ?>
			<tr>
				<td align="center" colspan="99">
					No Notifications Found
				</td>
			</tr>
			<? endif; ?>
		</tbody>
	</table>
</form>
