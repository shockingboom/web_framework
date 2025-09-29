<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasColumn('users', 'role')) {
            // Ubah enum role → tambahkan 'owner'
            DB::statement("
                ALTER TABLE `users`
                MODIFY COLUMN `role`
                ENUM('root','admin','owner','user')
                NOT NULL DEFAULT 'user'
            ");
        } else {
            // Jika kolom belum ada, tambahkan langsung dengan enum lengkap
            DB::statement("
                ALTER TABLE `users`
                ADD COLUMN `role`
                ENUM('root','admin','owner','user')
                NOT NULL DEFAULT 'user'
                AFTER `password`
            ");
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('users', 'role')) {
            // Rollback: hapus 'owner' dari enum
            DB::statement("
                ALTER TABLE `users`
                MODIFY COLUMN `role`
                ENUM('root','admin','user')
                NOT NULL DEFAULT 'user'
            ");
        }
    }
};
