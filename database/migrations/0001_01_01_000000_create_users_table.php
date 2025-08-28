<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // # Up: Creëert de users-tabel
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->default('klant');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    // # Down: Verwijdert de users-tabel
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
# create_users_table.php: Maakt de users-tabel met naam, e-mail, wachtwoord, en rol.