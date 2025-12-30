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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
$table->string('kode')->unique();
$table->string('nama');
$table->foreignId('kategori_asset_id')->constrained();
$table->foreignId('lokasi_id')->constrained();
$table->foreignId('kondisi_asset_id')->constrained();
$table->foreignId('supplier_id')->nullable()->constrained();
$table->date('tanggal_perolehan');
$table->decimal('nilai', 15, 2);
$table->enum('status', ['aktif', 'dipinjam', 'dihapus']);
$table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
