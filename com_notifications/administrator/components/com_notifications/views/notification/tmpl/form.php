<? defined('KOOWA') or die; ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_default/css/form.css" />

<form action="<?=@route('id='.$notification->id)?>" method="post" class="-koowa-form" id="mainform">
	<div style="float: left; width: 50%">
		<fieldset>
			<legend><?= @text('Notification Details') ?></legend>
		
			<label class="mainlabel">Title:</label>
			<input type="text" name="title" value="<?= $notification->title; ?>" /><br/>
			
			<label class="mainlabel">Table:</label>
			<input type="text" name="table" value="<?= $notification->table; ?>" /><br/>
		
			<label class="mainlabel">Type:</label>
			<?= @helper('listbox.notificationTypes') ?><br/>
			
			<label class="mainlabel">Parse Message:</label>
			<?= @helper('select.booleanlist', array('name'=>'parse', 'selected'=>$notification->parse)) ?><br/>
		
			<label class="mainlabel">Message Subject:</label>
			<input type="text" name="subject" value="<?= $notification->subject; ?>" /><br/>
		</fieldset>
		
		<fieldset>
			<legend><?= @text('Message Body') ?></legend>
			
			<?= @editor(array('height'=>300, 'name'=>'message')) ?>
		</fieldset>
	</div>
	
	<div style="float: left; width: 50%;"><div style="margin-left: 15px;">
		<?= @helper('accordion.startPane')?>
			<?= @helper('accordion.startPanel', array('title'=>'Trigger Settings')) ?>
				<label class="mainlabel">Insert:</label>
				<?= @helper('select.booleanlist', array('name'=>'insert', 'selected'=>$notification->insert)) ?><br/>
				
				<label class="mainlabel">Select:</label>
				<?= @helper('select.booleanlist', array('name'=>'select', 'selected'=>$notification->select)) ?><br/>
				
				<label class="mainlabel">Update:</label>
				<?= @helper('select.booleanlist', array('name'=>'update', 'selected'=>$notification->update)) ?><br/>
				
				<label class="mainlabel">Delete:</label>
				<?= @helper('select.booleanlist', array('name'=>'delete', 'selected'=>$notification->delete)) ?><br/>
				
				<label class="mainlabel">Named Trigger:</label>
				<input type="text" name="named" value="<?= $notification->named ?>"><br/>
			<?= @helper('accordion.endPanel') ?>
			
			<?= @helper('accordion.startPanel', array('title'=>'Email Settings')) ?>
				<label class="mainlabel">From Email:</label>
				<input type="text" name="fromEmail" value="<?= $notification->fromEmail ?>"><br/>
				
				<label class="mainlabel">From Name:</label>
				<input type="text" name="fromName" value="<?= $notification->fromName ?>"><br/>
				
				<label class="mainlabel">To:</label>
				<input type="text" name="to" value="<?= $notification->to ?>"><br/>
				
				<label class="mainlabel">Dynamic To:</label>
				<input type="text" name="dynamicTo" value="<?= $notification->dynamicTo ?>"><br/>
			<?= @helper('accordion.endPanel')?>
		
		<?= @helper('accordion.endPane')?>
	</div></div>
</form>
