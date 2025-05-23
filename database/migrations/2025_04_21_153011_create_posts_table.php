<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Category::class)->constrained('categories')->cascadeOnDelete();
            $table->string('title');
            $table->string('ft_image')->nullable();
            $table->string('slug')->unique();
            $table->longText('content');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->boolean('is_published')->default(false);
            $table->date('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
