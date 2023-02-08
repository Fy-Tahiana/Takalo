<h1>Bonjour <?= $pseudo ?> </h1>
<p>Votre email <?= $email ?> </p>

<p>
<?php if ($en_ligne): ?>
Vous etes en ligne
<?php else: ?>
<?php endif; ?>
Hors ligne
</p>