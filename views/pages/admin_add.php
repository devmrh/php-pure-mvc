<h3>add page</h3>

<form method="post" action="">
    <input type="hidden" name="id" value="">

    <div class="row">
        <div class="input-field col s6">
            <input id="alias" name="alias" type="text" class="validate" value="">
            <label for="alias">alias</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input id="title" name="title" type="text" class="validate" value="">
            <label for="title">title</label>
        </div>
    </div>
    <div class="input-field col s12">
        <textarea id="content" name="content" class="materialize-textarea"></textarea>
        <label for="content">content</label>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input id="is_published" name="is_published" type="checkbox" checked="checked">
            <label for="is_published">is_published?</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <button type="submit" class="waves-effect waves-light btn-large red">add page</button>
        </div>
    </div>
</form>