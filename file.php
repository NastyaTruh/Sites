$users = file('users.txt', FILE_IGNORE_NEW_LINES);

$username = $_POST['username'];
$password = $_POST['password'];

// Проверка наличия аккаунта
if (in_array("$username:$password", $users)) {
    // Успешный вход
    echo 'Вход выполнен успешно!';
} else {
    // Неверные учетные данные
    echo 'Неверное имя пользователя или пароль';
}