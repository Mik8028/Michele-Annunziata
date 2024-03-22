<?php

use App\Models\Tag;
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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

            $tagNames = ['Meditazione', 'Benessere', 'Equilibrio',];

            foreach ($tagNames as $tagName) {
             Tag::create(['name' => $tagName]);
        }

        $tagNames = ['Street art', 'Arte urbana', 'Cultura'];

            foreach ($tagNames as $tagName) {
             Tag::create(['name' => $tagName]);
        }

        
        $tagNames = ['Viaggi', 'Avventura', 'Esplorazione'];

        foreach ($tagNames as $tagName) {
         Tag::create(['name' => $tagName]);
    }

      
        $tagNames = ['Cucina', 'Cucina internazionale','food'];

        foreach ($tagNames as $tagName) {
        Tag::create(['name' => $tagName]);
}

        $tagNames = ['Biodiversità', 'Ambiente', 'Sostenibilità'];

        foreach ($tagNames as $tagName) {
        Tag::create(['name' => $tagName]);
}


      

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};
