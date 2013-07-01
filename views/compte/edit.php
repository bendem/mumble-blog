<h2>Éditer vos informations</h2>

<section class="middle">
	<h3>Modifier le mot de passe</h3>
	<?= $this->Form->startForm(null) ?>
	<?= $this->Form->input('action', 'hidden', array('value' => 'pass_edit')) ?>
	<?= $this->Form->input('old_password', 'Ancien mot de passe', array('type' => 'password')) ?>
	<?= $this->Form->input('password1', 'Nouveau mot de passe', array('type' => 'password')) ?>
	<?= $this->Form->input('password2', 'Confirmation', array('type' => 'password')) ?>
	<?= $this->Form->submit('Modifier') ?>
	<?= $this->Form->endForm() ?>
</section>
<section class="middle">
	<h3>Modifier l'email</h3>
	<?= $this->Form->startForm(null, array('alignment' => 'right')) ?>
	<?= $this->Form->input('action', 'hidden', array('value' => 'mail_edit')) ?>
	<?= $this->Form->input('mail', 'Nouvelle adresse email', array('type' => 'email', 'value' => $email)) ?>
	<?= $this->Form->submit('Modifier') ?>
	<?= $this->Form->endForm() ?>
</section>
