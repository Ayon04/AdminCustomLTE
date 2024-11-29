<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('fullname',length:30)->nullable(false);
            $table->string('email',length:20)->nullable(false)->unique();
            $table->string('mobile',length:11)->nullable(false)->unique();
            $table->string('password',length:20)->nullable(false);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
