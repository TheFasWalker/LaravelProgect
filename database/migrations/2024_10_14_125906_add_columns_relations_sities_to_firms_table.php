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
        Schema::table('firms', function (Blueprint $table) {
            $table->unsignedBigInteger('sity_id')->nullable();
            $table->index('sity_id','firm_sity_idx');
            $table->foreign('sity_id', 'firm_sity_fk')->on('sities')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('firms', function (Blueprint $table) {
            $table->dropForeign('firm_sity_fk');
            $table->dropIndex('firm_sity_idx');
            $table->dropColumn('sity_id');
        });
    }
};
