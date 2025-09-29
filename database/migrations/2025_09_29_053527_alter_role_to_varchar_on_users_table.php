<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        // Pastikan nilai kosong/null diisi dulu supaya aman saat NOT NULL
        DB::statement('UPDATE `users` SET `role` = "users" WHERE `role` IS NULL OR `role` = ""');

        // Jika sebelumnya ENUM/numeric, ubah ke VARCHAR(20) NOT NULL DEFAULT "users"
        DB::statement('ALTER TABLE `users` MODIFY `role` VARCHAR(20) NOT NULL DEFAULT "users"');

        // (Opsional) Samakan semua nilai lama ke standar "users"/"admin"
        DB::statement('UPDATE `users` SET `role` = "users" WHERE `role` IN ("user","Users","USER")');
    }

    public function down(): void
    {
        // Kembalikan ke enum minimal kalau perlu (sesuaikan jika awalnya beda)
        DB::statement('ALTER TABLE `users` MODIFY `role` ENUM("user","admin") NOT NULL DEFAULT "user"');
    }
};
