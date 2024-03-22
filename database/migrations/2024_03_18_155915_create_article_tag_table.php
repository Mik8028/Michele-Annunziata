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
        Schema::create('article_tag', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('article_id');
            $table->foreign('article_id')->references('id')->on('articles');

            $table->unsignedBigInteger('tag_id');
            $table->foreign('tag_id')->references('id')->on('tags');

            $table->timestamps();
        });

   DB::insert('INSERT INTO article_tag (article_id,tag_id) VALUES (1,1)'); 
   DB::insert('INSERT INTO article_tag (article_id,tag_id) VALUES (1,2)'); 
   DB::insert('INSERT INTO article_tag (article_id,tag_id) VALUES (1,3)'); 
   DB::insert('INSERT INTO article_tag (article_id,tag_id) VALUES (2,4)');
   DB::insert('INSERT INTO article_tag (article_id,tag_id) VALUES (2,5)'); 
   DB::insert('INSERT INTO article_tag (article_id,tag_id) VALUES (2,6)');  
   DB::insert('INSERT INTO article_tag (article_id,tag_id) VALUES (3,7)'); 
   DB::insert('INSERT INTO article_tag (article_id,tag_id) VALUES (3,8)'); 
   DB::insert('INSERT INTO article_tag (article_id,tag_id) VALUES (3,9)'); 
   DB::insert('INSERT INTO article_tag (article_id,tag_id) VALUES (4,10)');
   DB::insert('INSERT INTO article_tag (article_id,tag_id) VALUES (4,11)'); 
   DB::insert('INSERT INTO article_tag (article_id,tag_id) VALUES (4,12)');  
   DB::insert('INSERT INTO article_tag (article_id,tag_id) VALUES (5,13)');
   DB::insert('INSERT INTO article_tag (article_id,tag_id) VALUES (5,14)'); 
   DB::insert('INSERT INTO article_tag (article_id,tag_id) VALUES (5,15)');  

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_tag');
    }
};
