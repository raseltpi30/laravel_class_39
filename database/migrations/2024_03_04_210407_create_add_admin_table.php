<?php

use App\Models\Admin;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $data = [
            'name' => 'Rasel',
            'email' => 'rasel2@gmail.com',
            'password' => Hash::make(111111),
            'phone' => '01774416430',
            'email_verified_at' => now(),
        ];

        Admin::create($data);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_admin');
    }
};
