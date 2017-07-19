
<br/>

<?php foreach ($data['pages'] as $page_data) { ?>
<div style="margin:20px 0">
    <a href="/pages/view/<?= $page_data['alias']?>"><?= $page_data['title']?></a>
</div>

<?php } ?>