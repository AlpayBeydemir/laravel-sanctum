<?php

namespace App\Traits;

use \Illuminate\Http\JsonResponse;
trait ApiResponse
{
    public function success(string $message, array $data = [], int $status = 200): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => $message ?? 'Success',
            'data' => $data ?? []
        ], $status);
    }

    public function error(string $message, int $status = 400): JsonResponse
    {
        return response()->json([
            'success' => false,
            'message' => $message ?? 'Something went wrong'
        ], $status);
    }
}
