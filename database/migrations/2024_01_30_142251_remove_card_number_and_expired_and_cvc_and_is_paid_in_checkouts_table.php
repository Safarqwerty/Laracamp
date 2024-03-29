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
        Schema::table('checkouts', function (Blueprint $table) {
            // cara 1
            // $table->dropColum['card_number'];
            // $table->dropColum['expired'];
            // $table->dropColum['cvc'];
            // $table->dropColum['is_paid'];

            // cara 2 lebih simpel
            $table->dropColumn(['card_number', 'expired', 'cvc', 'is_paid']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('checkouts', function (Blueprint $table) {
            $table->string('card_number', 20)->nullable();
            $table->date('expired')->nullable();
            $table->string('cvc', 3)->nullable();
            $table->boolean('is_paid')->default(false);
        });
    }
};
