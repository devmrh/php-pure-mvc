<h3>Pages</h3><br>

<table class="striped">
    <?php foreach ($data['pages'] as $page_data) { ?>
        <tr>
            <td><b><?= $page_data['title']?></b></td>
            <td>
                <a href="/admin/pages/edit/<?= $page_data['id'] ?>">
                    <button class="waves-effect waves-light btn">edit</button>
                </a>
                <a href="/admin/pages/delete/<?= $page_data['id'] ?>" onclick="return confirmDelete()">
                    <button class="waves-effect waves-light btn red">delete</button>
                </a>
            </td>
        </tr>
    <?php } ?>

</table>
<br>

<div>
    <a href="/admin/pages/add/">
        <button class="waves-effect waves-light btn green">new page</button>
    </a>
</div>