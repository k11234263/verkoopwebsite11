<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // # Up: Maakt de categories-tabel
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
    }

    // # Down: Verwijdert de categories-tabel
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
# create_categories_table.php: Maakt de categories-tabel.