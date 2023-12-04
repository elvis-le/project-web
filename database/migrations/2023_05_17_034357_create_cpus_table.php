<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cpus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        DB::table('cpus')->insert([
            ['name'=>'Intel celeron'],
            ['name'=>'Intel pentium'],
            ['name'=>'Intel core i3'],
            ['name'=>'Intel core i5'],
            ['name'=>'Intel core i7'],
            ['name'=>'Amd ryzen 3'],
            ['name'=>'Amd ryzen 5'],
            ['name'=>'Amd ryzen 7'],
            ['name'=>'Amd ryzen 9'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cpus');
    }
};
