<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *     version="1.0.0",
 *     title="L5-Swaggerサンプル",
 *     description="サンプル",
 * )
 */
class HelloController extends BaseController
{
    /**
     * @OA\Get(
     *     path="/hello",
     *     operationId="hello",
     *     tags={"タグ"},
     *     summary="ハロー",
     *     description="こんにちは",
     *     @OA\Response(
     *         response=200,
     *         description="成功",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="message",
     *                 type="string",
     *                 description="メッセージ",
     *                 example="Hello"
     *             )
     *         )
     *     )
     * )
     */
    public function index()
    {
        return ['message' => 'Hello'];
    }
}
