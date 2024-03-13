<?php

use App\Models\Hotel;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Hotel::class)->constrained()->cascadeOnDelete()->nullable();
            $table->text('description');
            $table->integer('type')->comment('single => 1, double =>2, luxurius => 2','couple => 3','villa => 4');
            $table->decimal('price',8,0);
            $table->string('image')->nullable();
            $table->string('is_available')->default(0);
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
