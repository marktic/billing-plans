<?php

/** @var \Nip\Records\Record $item */
?>
<td><?= htmlspecialchars($item->getName() ?? ''); ?></td>
<td><?= $this->load('/abstract/list/item-actions'); ?></td>
