<div id="languageSelect" style="display: none;" class="dropdown">
	<com:Select items={$languages} />
</div>
<div id="themeSelect" style="display: none;" class="dropdown">
	<com:Select items={$languages} />
</div>
<div id="login">
	<div style="text-align: center; margin-bottom: 10px;">
	<img src="<% echo Yii::app()->request->baseUrl . "/images/logo.png"; %>" />
	</div>
	<?php echo CHtml::form(); ?>

	<div class="formItems non-floated" style="text-align: left;">
		<div class="item row1">
			<div class="left">
				<?php echo CHtml::activeLabel($form,'host'); ?>
			</div>
			<div class="right">
				<% if(!true) { %>
					<?php echo CHtml::activeDropDownList($form,'host',$hosts); ?>
				<% } else { %>
					<?php echo CHtml::activeTextField($form, 'host', array('value'=>'localhost')); ?>
				<% } %>
			</div>
		</div>
		<div class="item row2">
			<div class="left" style="float: none;">
				<?php echo CHtml::activeLabel($form,'username'); ?>
			</div>
			<div class="right">
				<?php echo CHtml::activeTextField($form,'username') ?>
				<?php echo CHtml::error($form, 'username'); ?>
			</div>
		</div>
		<div class="item row1">
			<div class="left">
				<?php echo CHtml::activeLabel($form,'password'); ?>
			</div>
			<div class="right">
				<?php echo CHtml::activePasswordField($form,'password'); ?>
			</div>
		</div>
	</div>

	<div class="buttons" style="position: absolute; bottom: 20px; width: 300px; ">
		<?php echo CHtml::submitButton('Login'); ?>
	</div>

	<?php echo CHtml::closeTag('form'); ?>
</div>