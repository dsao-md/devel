<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<div class="box">
<!-- Begin Form -->
<div id="commentform" class="commentform">
	<div id="respond">
		<h3 id="reply-title">Anmelden</h3>
		<?php $form=$this->beginWidget('CActiveForm', array(
		        'id'=>'login-form',
		        'enableClientValidation'=>true,
		        'clientOptions'=>array(
		                'validateOnSubmit'=>true,
		        ),
		)); ?>
			<p class="comment-notes">Deine Email-Adresse wird nicht autoatisch veröffentlicht. Notwendige Felder sind mit einem <span class="required">*</span> markiert.</p>
			<p class="comment-form-author">
		                <?php echo $form->labelEx($model,'username'); ?>
		                <?php echo $form->textField($model,'username'); ?>
				<strong><?php echo $form->error($model,'username'); ?></strong>
			</p>
			<p class="comment-form-email">
		                <?php echo $form->labelEx($model,'password'); ?>
				<?php echo $form->passwordField($model,'password'); ?>
				<strong><?php echo $form->error($model,'password'); ?></strong>
			</p>
			<p class="comment-form-url">
		                <?php echo $form->checkBox($model,'rememberMe'); ?>
		                <?php echo $form->label($model,'rememberMe'); ?>
		               <strong><?php echo $form->error($model,'rememberMe'); ?></strong>
			</p>
			<p class="form-submit">
				 <input style="opacity: 1;" name="submit" id="submit" value="Anmelden" type="submit"> 
			</p>
		<?php $this->endWidget(); ?>
	</div><!-- #respond -->
</div>
<!-- End Form -->
</div> <!-- End Box -->
