<?php

use App\Models\Room;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Room::class)->constrained()->cascadeOnDelete()->nullable();
            $table->date('reached_date');
            $table->date('arrived_date');
            $table->string('name');
            $table->string('email');
            $table->integer('adult');
            $table->integer('children');
            $table->integer('total');
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
