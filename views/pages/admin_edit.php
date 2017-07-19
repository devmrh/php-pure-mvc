<h3>edit page</h3>

<form method="post" action="">
    <input type="hidden" name="id" value="<?= $data['page']['id']?>">

    <div class="row">
        <div class="input-field col s6">
            <input id="alias" name="alias" type="text" class="validate" value="<?=$data['page']['alias'] ?>">
            <label for="alias">alias</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input id="title" name="title" type="text" class="validate" value="<?= $data['page']['title'] ?>">
            <label for="title">title</label>
        </div>
    </div>
    <div class="input-field col s12">
        <textarea id="content" name="content" class="materialize-textarea"><?= $data['page']['content'] ?></textarea>
        <label for="content">content</label>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input id="is_published" name="is_published" type="checkbox" <?php if ($data['page']['is_published']) { ?> checked="checked" <?php } ?>">
            <label for="is_published">is_published?</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <button type="submit" class="waves-effect waves-light btn-large red">send message</button>
        </div>
    </div>
</form>