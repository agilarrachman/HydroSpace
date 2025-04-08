<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;
use Illuminate\Support\Facades\Log;

class GeminiController extends Controller
{
    public function index(Request $request)
    {
        // Validasi bahwa field 'question' harus diisi
        $request->validate([
            'question' => 'required|string',
        ]);

        $question = $request->question;

        // Tambahkan baris ini untuk logging
        Log::info('GEMINI_API_KEY: ' . env('GEMINI_API_KEY'));

        if (stripos($question, 'hai') !== false || stripos($question, 'halo') !== false) {
            return response()->json([
                'question' => $question,
                'answer' => "Halo HydroMates! Apakah ada yang HydroBot bisa bantu?"
            ]);
        }

        // Pre-prompt untuk JivaBot dengan informasi JivaJoy
        $prePrompt = "";


        // Gabungkan pre-prompt dengan pertanyaan pengguna
        $formattedQuestion = $prePrompt . " " . $question;

        // Inisialisasi klien API Gemini dengan API key dari file .env
        $client = new Client(env('GEMINI_API_KEY'));

        // Tentukan nama model Gemini yang akan digunakan
        $modelName = 'gemini-1.5-pro';

        // Gunakan API Gemini untuk menghasilkan respons berdasarkan pertanyaan
        $responseGenerateContent = $client->generativeModel($modelName)->generateContent(
            new TextPart($formattedQuestion),
        );

        // Ambil jawaban dari API
        $answer = $responseGenerateContent->text();

        // Kembalikan jawaban dengan sapaan dan informasi tambahan
        return response()->json(['question' => $question, 'answer' => $answer]);
    }
}
