<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    const TABLE = 'orders';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (! Schema::hasTable(self::TABLE)) {
            Schema::create(self::TABLE, function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
                $table->decimal('grand_total', 10, 2)->nullable();
                $table->string('payment_method')->nullable();
                $table->string('payment_status')->nullable();
                $table->enum('status', ['new', 'processing', 'shipped', 'delivered', 'cancelled'])->default('new');
                $table->string('currency')->nullable()->default('USD');
                $table->decimal('shipping_amount', 10, 2)->nullable();
                $table->string('shipping_method')->nullable();
                $table->text('notes')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(self::TABLE);
    }
};
