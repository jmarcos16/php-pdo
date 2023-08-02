<?php
namespace app\core;

class JsonResponse
{
    
    public function send(mixed $data = [], int $code = 200, $headers = [])
    {
        http_response_code($code);
        header('Content-Type: application/json');
        foreach ($headers as $key => $value) {
            header($key . ': ' . $value);
        }
        echo json_encode($data);
        return self::class;
    }

    public function sendError(string $message, int $code = 500)
    {
       self::send(['error' => $message], $code);
    }
}
