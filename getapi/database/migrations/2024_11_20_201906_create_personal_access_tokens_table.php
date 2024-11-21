<?php

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
        Schema::create('custom_tokens', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->string('name'); // Name field
            $table->string('token', 64)->unique(); // Unique token field
            $table->text('description')->nullable(); // Optional description field
            $table->text('abilities')->nullable(); // Nullable abilities field
            $table->timestamp('last_used_at')->nullable(); // Last used timestamp
            $table->timestamp('expires_at')->nullable(); // Expiration timestamp
            $table->timestamps(); // Created at and Updated at fields
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};
