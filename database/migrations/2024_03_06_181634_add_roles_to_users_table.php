<?php

use App\Models\User;
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
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('is_admin')->after('email')->nullable()->default(false);
            $table->boolean('is_revisor')->after('is_admin')->nullable()->default(false);
            $table->boolean('is_writer')->after('is_revisor')->nullable()->default(false);
        });

        $user = User::create([

            'name' => 'Admin',
            'email' => 'coders.aulab@live.it',
            'password' => bcrypt('12345678'),
            'is_admin' => true,
         
        ]);

        $user = User::create([

            'name' => 'Revisore',
            'email' => 'revisorecoders.aulab@live.it',
            'password' => bcrypt('12345678'),
            'is_revisor' => true,
        ]);
        $user = User::create([

            'name' => 'Redattore',
            'email' => 'redattorecoders.aulab@live.it',
            'password' => bcrypt('12345678'),
            'is_writer' => true,

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        User::where('email' , 'coders.aulab@live.it')->delete();
        Schema::table('users', function (Blueprint $table) 
        {
           $table->dropColumn(['is_admin' ,'is_revisor','is_writer']);
            
        });
    }
};
