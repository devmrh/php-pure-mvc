<?php

foreach ($data['posts'] as $post ){ ?>

<div>
    <a href="/posts/view/<?= $post['id']?>/<?= $post['title']?>"><?= $post['title']?></a>

</div>
<?php } ?>





