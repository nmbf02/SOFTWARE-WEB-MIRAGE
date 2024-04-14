<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GenerateAllModels extends Command
{
    protected $signature = 'generate:models';

    protected $description = 'Generate models for all tables in the database';

    public function handle()
    {
        $tables = DB::select('SHOW TABLES');
        foreach ($tables as $table) {
            $tableName = reset($table);
            $modelName = ucwords(Str::camel(Str::singular($tableName)));

            if (!class_exists("App\\Models\\$modelName")) {
                $this->call('make:model', [
                    'name' => "Models\\$modelName",
                    '-m' => true,
                ]);
            }
        }
    }
}
