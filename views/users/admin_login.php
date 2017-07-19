<form class="col s12" method="post" action="">
    <div class="row">
        <div class="input-field col s6">
            <input id="username" name="username" type="text" class="validate">
            <label for="username">First Name</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s8">
            <input id="password" name="password" type="password" class="validate">
            <label for="password">password</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>" />
            <button type="submit" class="waves-effect waves-light btn-large blue">submit</button>
        </div>
    </div>

</form>