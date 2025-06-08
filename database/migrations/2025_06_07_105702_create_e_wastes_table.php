<?php
// database/migrations/...._create_e_wastes_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('e_wastes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->text('description');
            $table->string('imageUrl')->nullable();
            $table->string('disposalMethod');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('e_wastes');
    }
};