<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('role');
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
                'username' => 'admin',
                'role' => 'admin',
                'password' => bcrypt('admin1234')
            )
        );

        $employees = DB::table('employees')->get();

        foreach($employees as $employee){
            DB::table('users')->insert(
                array(
                    'password' => bcrypt('admin1234'),
                    'updated_at' => null,
                    'created_at' => null
                )
            );
        }
    }
};
