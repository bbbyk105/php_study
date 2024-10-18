<?php
session_start();

header('X-FRAME-OPTIONS:DENY');

$pageFlag = 0;

if (!empty($_POST['btn_confirm'])) {
    $pageFlag = 1;
}
if (!empty($_POST['btn_submit'])) {
    $pageFlag = 2;
}

function h($str) 
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォーム</title>
</head>

<body>
<?php if ($pageFlag === 0): ?>
    <?php
    if (!isset($_SESSION['csrfToken'])) {
        $csrfToken = bin2hex(random_bytes(32));
        $_SESSION['csrfToken'] = $csrfToken;
    }

    $token = $_SESSION['csrfToken'];
    ?>


        <form method="POST" action="input.php">
            氏名
            <input type="text" name="your_name" value="<?php echo !empty($_POST["your_name"]) ? h($_POST["your_name"]) : ''; ?>">
            <br>
            メールアドレス
            <input type="email" name="email" value="<?php echo !empty($_POST["email"]) ? h($_POST["email"]) : ''; ?>">
            <br>
            <input type="submit" name="btn_confirm" value="確認する">
            <input type="hidden" name="csrf" value="<?php echo $token; ?>">
        </form>

<?php endif; ?>

<?php if ($pageFlag === 1): ?>
    <?php if(isset($_POST['csrf']) && $_POST['csrf'] === $_SESSION['csrfToken']) : ?>
        <form method="POST" action="input.php">
            氏名
            <?php echo h($_POST["your_name"]); ?>
            <br>
            メールアドレス
            <?php echo h($_POST["email"]); ?>
            <br>
            <input type="submit" name="back" value="戻る">
            <input type="submit" name="btn_submit" value="送信する">
            <input type="hidden" name="your_name" value="<?php echo h($_POST["your_name"]); ?>">
            <input type="hidden" name="email" value="<?php echo h($_POST["email"]); ?>">
            <input type="hidden" name="csrf" value="<?php echo h($_POST["csrf"]); ?>">
        </form>
    <?php else: ?>
        <p>不正なアクセスです。</p>
    <?php endif; ?>
<?php endif; ?>

<?php if ($pageFlag === 2): ?>
    <?php if(isset($_POST['csrf']) && $_POST['csrf'] === $_SESSION['csrfToken']) : ?>
        <p>送信が完了しました。</p>
        <?php unset($_SESSION['csrfToken']); ?>
    <?php else: ?>
        <p>不正なアクセスです。</p>
    <?php endif; ?>
<?php endif; ?>

</body>

</html>
