<div class="field control-group formo-<?=$field->get('driver')?><?php if ($error = $field->error()) echo ' error'; ?>" id="field-container-<?=$field->alias()?>">
	<?php if ($label = $field->label()): ?>
		<label class="control-label" for="<?=$field->attr('id')?>"><?=$label?></label>
	<?php elseif ($title): ?>
		<span class="title"><?=$title?></span>
	<?php endif; ?>

	<div class="controls">
		<?=$field->open().$field->render_opts().$field->close()?>
	</div>


	<?php if ($msg = $field->error()): ?>
		<span class="help-block"><?=$msg?></span>
	<?php elseif ($msg = $field->get('message')): ?>
		<span class="help-block"><?=$msg?></span>
	<?php endif; ?>
</div>