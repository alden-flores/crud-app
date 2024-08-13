<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public $timestamps = false;
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            //I added foreign constraints to the ids of the barangay should they be deleted
            $table->foreignId('brgy_id')->references('id')->on('barangay')->cascadeOnDelete();
            $table->string('number');
            //According to the specs of the exam, the email is not required so I made it so that it is nullable
            $table->string('email')->default('N/A')->nullable();
            $table->string('case_type');
            //Considering that the patient may have a negative status, I made the coronavirus_status nullable
            $table->string('coronavirus_status')->default('N/A')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
