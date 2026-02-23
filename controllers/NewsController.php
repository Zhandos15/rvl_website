<?php

require_once __DIR__ . '/../models/news.php';

class NewsController extends Controller
{
    public function getAll()
    {
        $model = new NewsModel($this->pdo);
        $news = $model->getAll();
        $this->json($news);
    }
}
