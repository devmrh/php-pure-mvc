<h3>سوال شما</h3>

<form method="post" action="">
    <input type="hidden" name="id" value="">

    <div class="row">
        <div class="input-field col s6">
            <input id="title" name="title" type="text" class="validate" value="">
            <label for="title">عنوان</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <textarea id="content" name="content" class="materialize-textarea large" cols="6" rows="6"></textarea>
            <label for="content"> متن سوال شما</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input id="author" name="author" type="text" class="validate" value="">
            <label for="author">نویسنده</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input id="tags" name="tags" type="text" class="validate" value="">
            <label for="tags">تگ</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input id="category" name="category" type="text" class="validate" value="">
            <label for="category">دسته</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input id="is_published" name="is_published" type="checkbox" checked="checked">
            <label for="is_published">منتشرشود؟</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>" />
            <button type="submit" class="waves-effect waves-light btn-large red">ارسال</button>
        </div>
    </div>
</form>