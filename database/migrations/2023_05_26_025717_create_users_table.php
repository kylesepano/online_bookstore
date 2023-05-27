<?php

use App\Models\user;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('address')->nullable();
            $table->integer('status')->default(0)->nullable();
            $table->integer('user_type_id')->nullable();
            $table->timestamps();
        });

        user::create([
            'username' => "admin",
            'email' => "admin@admin",
            'password' => Hash::make('password'),
            'first_name' => "Admin",
            'last_name' => "Admin",
            'contact_number' => "09052347894",
            'address' => "Admin",
            'status' => 1,
            'user_type_id' => 1
        ]);
    }
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
