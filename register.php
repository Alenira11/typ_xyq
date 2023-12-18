<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Обработка данных
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Возвращение ответа в формате JSON
    echo json_encode(['success' => true, 'message' => 'Регистрация прошла успешно']);
} else {
    echo json_encode(['success' => false, 'message' => 'Неверный метод запроса']);
}
?>



