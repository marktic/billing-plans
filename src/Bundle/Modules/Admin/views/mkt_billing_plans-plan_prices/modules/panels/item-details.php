<?php

/** @var \Nip\Records\Record $item */
?>
<div class="card">
    <div class="card-header">
        <h5><?= $this->translate('.labels.title.singular'); ?></h5>
    </div>
    <div class="card-body">
        <?= $this->load('/abstract/view/item-details-actions'); ?>
    </div>
</div>
