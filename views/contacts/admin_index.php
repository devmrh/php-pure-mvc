<h3>messages</h3><br>

<table class="striped" style="width: 100%">

    <tr>
        <td style="width: 5%">#</td>
        <td style="width: 10%">name</td>
        <td style="width: 25%">email</td>
        <td style="width: 50%">messages</td>

    </tr>
    <?php foreach ($data as $item) { ?>
    <tr>
        <td><?= $item['id']?></td>
        <td><?= $item['name']?></td>
        <td><?= $item['email']?></td>
        <td><?= $item['message']?></td>

    </tr>
<?php } ?>
</table>