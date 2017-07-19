<h3>موضوع:<?= $data['post']['title'] ?></h3>
<br>
<h4>متن:
<?= $data['post']['content'] ?>
</h4><br>
نویسنده:
<h5 style="color: #00C853">
<?= $data['post']['author']?>
</h5>
<br>
<h5><p>تعداد دفعات بازدید از این صفحه</p><?php
    echo $data['view_num'][0]['view_num'];
    ?>
</h5>
<div style="background: #eeeeee">
<form method="post" action="">
    <input type="hidden" name="id" value="<?= $data['post']['id']?>">
    <input type="submit" value="1" name="vote"> : this question is complaytlay clear and need some reseach
    <br>
    <input type="submit" value="-1" name="vote"> : this question is in poor condition and have not valuable info

</form>

<div style="width: 200px;height: 200px;background:#e8eaf6;margin: 0 auto">
    <p>امتیاز سوال</p>
<?php echo $data['view_vote'][0]['vote_num']; ?></div>
</div>