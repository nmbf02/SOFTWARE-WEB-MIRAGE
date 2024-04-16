<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ManualDeUsuarioController extends Controller
{
    public function downloadFile(): BinaryFileResponse
    {
        $filePath = public_path('Manual-Usuario/Mirage - Manual de usuario.pdf');
        $headers = [
            'Content-Type' => 'application/pdf',
        ];
        $fileName = 'Mirage - Manual de usuario.pdf';

        return response()->download($filePath, $fileName, $headers);
    }
}
