<? defined('KOOWA') or die; ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_default/css/form.css" />

<form action="<?=@route('id='.$test->id)?>" method="post" class="-koowa-form" id="mainform">
	<div style="float: left; width: 50%">
		<fieldset>
			<legend><?= @text('Test Details') ?></legend>
			<label class="mainlabel">Title:</label>
			<input type="text" name="title" value="<?= $test->title; ?>" /><br/>
			
			<?= @editor(array()); ?>
		</fieldset>
	</div>
	
	<div style="float: left; width: 50%;"><div style="margin-left: 15px;">
		<fieldset>
			<legend>Notification Settings</legend>
		</fieldset>
	</div></div>
</form>
