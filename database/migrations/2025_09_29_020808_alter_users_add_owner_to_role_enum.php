<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // urutan bebas; default tetap 'user'
        DB::statement("ALTER TABLE users MODIFY COLUMN role ENUM('root','admin','owner','user') NOT NULL DEFAULT 'user'");
    }

    public function down(): void
    {
        // rollback: hapus 'owner'
        DB::statement("ALTER TABLE users MODIFY COLUMN role ENUM('root','admin','user') NOT NULL DEFAULT 'user'");
    }
};
