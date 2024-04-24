<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class PDFController extends Controller
{
    public function convertHTMLToPDF(Request $request)
    {
        $html = $request->input('html');
        $format = $request->input('format', 'Letter');
        $landscape = $request->input('landscape', true);

        // Comprueba si puppeteer está instalado correctamente
        $isPuppeteerInstalled = Process::fromShellCommandline('npm list --depth=0 | grep puppeteer')->run();
        if ($isPuppeteerInstalled) {
            $process = new Process(['node', '-e', 'require("puppeteer")']);
            $process->run();

            if (!$process->isSuccessful()) {
                throw new ProcessFailedException($process);
            }
        } else {
            throw new \Exception('Puppeteer is not installed. Please install it using npm install puppeteer');
        }

        // Ejecuta el script Node.js
        $process = new Process(['node', base_path('public/js/convertHTMLToPDF.js'), $html, $format, $landscape]);
        $process->run();

        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        return response()->file($process->getOutput());
    }
}