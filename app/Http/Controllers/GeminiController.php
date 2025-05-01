<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;
use GeminiAPI\Enums\Role;
use GeminiAPI\Resources\Content;
use Illuminate\Support\Facades\Log;

class GeminiController extends Controller
{
    protected $historySessionKey = 'gemini_chat_history';
    protected $chatSessionStartedKey = 'gemini_chat_started'; // Penanda apakah sesi chat sudah dimulai
    protected $maxHistoryLength = 10;

    public function index(Request $request)
    {
        // Validasi bahwa field 'question' harus diisi
        $request->validate([
            'question' => 'required|string',
        ]);

        $question = $request->question;
        $history = session()->get($this->historySessionKey, []);
        $chatStarted = session()->get($this->chatSessionStartedKey, false);

        // Inisialisasi klien API Gemini
        $client = new Client(env('GEMINI_API_KEY'));
        // $modelName = 'gemini-2.0-flash';
        $modelName = 'gemini-2.0-flash-lite';

        try {
            $chat = $client->generativeModel($modelName)->startChat();

            // Jika ini adalah awal obrolan, buat riwayat awal dengan pre-prompt sebagai pesan model
            if (!$chatStarted && empty($history)) {
                $prePrompt = "Kamu adalah HydroBot, asisten virtual ahli dalam bidang hidroponik dari website HydroSpace. HydroSpace merupakan platform website yang berfokus untuk membuat berkebun hidroponik modern mudah diakses oleh siapa saja). Tugas utamamu adalah memberikan solusi praktis dan informasi spesifik untuk membantu pengguna mengatasi masalah dan berhasil dalam sistem hidroponik mereka. Jawab setiap pertanyaan dengan bahasa Indonesia yang jelas, ringkas, dan langsung ke poin.

        HydroSpace menyediakan edukasi yang lengkap melalui panduan dan video, toko daring yang praktis untuk membeli alat, bahan, dan bibit, serta dukungan instan melalui chatbot AI mereka, HydroBot. HydroSpace bertujuan untuk memberdayakan pemula agar percaya diri memulai hidroponik dengan menyediakan informasi yang mudah dipahami dan perlengkapan yang mudah didapatkan. Mereka menekankan komitmen mereka terhadap pertanian yang modern dan efisien, keberlanjutan lingkungan melalui penghematan air dan lahan, kesesuaian untuk pemula dengan sistem yang intuitif, dan solusi yang disesuaikan untuk berbagai kebutuhan, mulai dari hobi hingga bisnis.

        Didirikan pada tahun 2025, HydroSpace dikembangkan oleh tim yang terdiri dari Nurrizkyta Aulia sebagai Project Manager, Muhammad Fillah sebagai System Analyst, Agil ArRachman sebagai Programmer, dan Nasywa Shafa sebagai Quality Assurance. Hingga saat ini, HydroSpace telah membantu lebih dari 550 petani dan memuaskan lebih dari 850 pelanggan.

        Ketika menjawab, pertimbangkan faktor-faktor penting seperti:
        - Jenis tanaman yang ditanyakan.
        - Sistem hidroponik yang mungkin digunakan pengguna (misalnya, NFT, DFT, wick, rakit apung, tetes).
        - Aspek nutrisi (jenis pupuk, EC, pH).
        - Kondisi lingkungan tumbuh (suhu, kelembaban, cahaya).
        - Potensi masalah hama dan penyakit spesifik pada hidroponik.

        Berikan langkah-langkah konkret, saran troubleshooting yang sistematis, atau rekomendasi tindakan yang dapat segera diterapkan oleh pengguna. Hindari jawaban yang bersifat umum atau teoritis tanpa aplikasi praktis. Jika memungkinkan, sertakan tips atau peringatan penting terkait topik yang dibahas. Fokus pada memberikan nilai dan solusi yang paling relevan dan efektif bagi pengguna hidroponik. Jawab setiap pertanyaan dengan bahasa Indonesia yang user friendly, ramah, dan wajib sertakan emoji disetiap jawaban agar menarik. Ingatlah bahwa kamu adalah HydroBot dari HydroSpace, siap membantu para petani hidroponik mencapai keberhasilan! 🌱";

                $initialHistory = [
                    ['role' => 'model', 'message' => $prePrompt],
                    ['role' => 'user', 'message' => $question],
                ];
                session()->put($this->historySessionKey, $initialHistory);
                session()->put($this->chatSessionStartedKey, true);

                $formattedHistory = $this->formatHistoryForChat($initialHistory);
                $response = $chat->withHistory($formattedHistory)->sendMessage(new TextPart($question));
                $answer = $response->text();

                // Tambahkan jawaban model ke riwayat
                $updatedHistory = session()->get($this->historySessionKey);
                $updatedHistory[] = ['role' => 'model', 'message' => $answer];
                session()->put($this->historySessionKey, $updatedHistory);

                return response()->json(['question' => $question, 'answer' => $answer]);
            } else {
                // Jika sesi sudah dimulai, kirim riwayat percakapan dan pertanyaan pengguna
                $formattedHistory = $this->formatHistoryForChat($history);
                $response = $chat->withHistory($formattedHistory)->sendMessage(new TextPart($question));
                $answer = $response->text();

                // Tambahkan interaksi baru ke riwayat
                $history[] = ['role' => 'user', 'message' => $question];
                $history[] = ['role' => 'model', 'message' => $answer];
                $this->storeHistory($history, $request);

                return response()->json(['question' => $question, 'answer' => $answer]);
            }
        } catch (\Exception $e) {
            Log::error('Error communicating with Gemini API: ' . $e->getMessage());
            return response()->json(['error' => 'HydroBot sedang sedikit kelelahan 😴. Mohon coba bertanya lagi dalam beberapa saat ya! 🌱'], 503);            
            return response()->json(['error' => 'Terjadi kesalahan saat memproses permintaan.'], 500);
        }        
    }

    public function clearHistory(Request $request)
    {
        session()->forget($this->historySessionKey);
        session()->forget($this->chatSessionStartedKey);
        return redirect('/#ai');
    }

    protected function storeHistory(array $history, Request $request)
    {
        // Batasi panjang riwayat
        if (count($history) > $this->maxHistoryLength) {
            array_shift($history); // Hapus elemen terlama
        }
        session()->put($this->historySessionKey, $history);
    }

    protected function formatHistoryForChat(array $history): array
    {
        $formattedHistory = [];
        foreach ($history as $item) {
            $role = $item['role'] === 'user' ? Role::User : Role::Model;
            $formattedHistory[] = Content::text($item['message'], $role);
        }
        return $formattedHistory;
    }
}
