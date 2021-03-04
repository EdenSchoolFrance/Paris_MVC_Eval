<?php
require APP_ROOT . '/views/inc/head.php';
require APP_ROOT . '/views/inc/nav.php';
?>

<div class="container-login">
    <div class="wrapper-login">
        <h2 font-color="orange">Signin</h2>
        <form method="post" action="<?= URL_ROOT ?>/users/login">
            <input type="text" name="email" placeholder="Email@gmail.com">
            <span class="invalidFeedback">
                <?= $data['emailError'] ?>
            </span>

            <input type="password" name="password" placeholder="Password">
            <span class="invalidFeedback">
                <?= $data['passwordError'] ?>
            </span>

            <button type="submit" id="submit" value="submit" cat-color="orange">Sign In</button>

            <p class="options">Not registered yet? <a href="<?= URL_ROOT ?>/users/register">Create an account</a></p>
        </form>
    </div>
</div>

<?php
	require APP_ROOT . '/views/inc/footer.php';
?>