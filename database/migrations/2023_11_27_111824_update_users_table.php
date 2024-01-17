<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Add a new column
            $table->date('birthdate')->nullable();
            $table->foreignId('role_id')->nullable();
            $table->foreign('role_id')->reference('id')->on('roles');

            
            // You can also update existing columns
            // $table->string('name')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Reverse the changes made in the 'up' method
            $table->dropColumn('birthdate');
        });
    }
}

