<?php

require_once __DIR__ . '/../models/contact.php';

class ContactController extends Controller
{
    public function send()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->json(['error' => 'Метод не разрешён']);
        }

        $name = trim($_POST['name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $message = trim($_POST['message'] ?? '');

        if (!$name || !$email || !$message) {
            $this->json(['error' => 'Заполните все поля']);
        }

        $model = new ContactModel($this->pdo);
        $model->create($name, $email, $message);

        $this->json(['success' => 'Сообщение отправлено']);
    }
}
