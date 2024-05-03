<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class OpenAPIController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/generate-user-suggestion",
     *     summary="Generate a suggestion for a user using OpenAPI",
     *     tags={"OpenAPI"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 property="message",
     *                 type="string",
     *                 example="My monthly income totals $3500. I am aiming to save at least 35 percent of this amount, with the remainder allocated for monthly expenses. In the previous month, my bills amounted to $500, while expenses for fuel and travel reached $1000. I allocated $400 for food expenses, and an additional $500 was dedicated to loan payments, leaving me with five more months to complete the loan payments. Shopping expenses accounted for $500. I also need to cover ongoing bills and daily necessities. Could you provide guidance on how I should distribute my monthly spending to reach my savings goal?"
     *             ),
     *         ),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successfully",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Bad request",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 property="message",
     *                 type="string",
     *                 example="Error message"
     *             ),
     *         ),
     *     ),
     * )
     */
    public function openAPISuggestion(Request $request)
    {
        $secretKey = config('services.open_api.secret_key');
        $message = [];
        $message[0]['role'] = "user";
        $message[0]['content'] =  $request->message;
        $data = [
            'model' => "gpt-3.5-turbo",
            'messages' => $message,
            'temperature' => 1,
            'n' => 1,
            'top_p' => 1,
            'stream' => false,
            'max_tokens' => 500,
            'frequency_penalty' => 0,
            'presence_penalty' => 0,
        ];
        $client = new Client([
            'base_uri' => 'https://api.openai.com/v1/',
            'headers' => [
                'Authorization' => 'Bearer ' . $secretKey,
                'Content-Type' => 'application/json',
            ],
        ]);

        $response = $client->post('chat/completions', [
            'json' => $data,
        ]);

        $responseData = json_decode($response->getBody(), true);

        return $responseData['choices'][0]['message']['content'];
    }
}
