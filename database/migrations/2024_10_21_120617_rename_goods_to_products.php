<?php

// переименование таблицы и обратно

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
            Schema::rename('goods', 'products');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
            Schema::rename('products', 'goods');
    }
};
