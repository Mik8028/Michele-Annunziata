<?php

use App\Models\Article;
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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->longText('body');
            $table->string('image');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('SET NULL');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('SET NULL');
            $table->timestamps();
        });
      


        
        $articles = Article::create([

            'title' => 'Il potere della meditazione',
            
            'subtitle' => 'Scopri i benefici della meditazione',
            
            'body' => 'La meditazione è una pratica antica che offre numerosi benefici per il benessere mentale e fisico. In questo articolo, esploreremo il potere della meditazione e i suoi effetti positivi sulla nostra vita quotidiana. Scopriremo come la meditazione può aiutarti a ridurre lo stress, aumentare la consapevolezza, migliorare la concentrazione e promuovere la calma interiore. Ti guideremo attraverso tecniche di meditazione semplici e pratiche che puoi integrare facilmente nella tua routine quotidiana, per vivere una vita più equilibrata e soddisfacente.',
            
            'image' => 'public/images/004.jpg',
            
            'user_id' => '3',
            
            'category_id' => '1',
                     
            ]);

            $articles = Article::create([

                'title' => 'Esplorando i tesori nascosti dell\'arte urbana',
                
                'subtitle' => 'Dietro i muri si nascondono opere d\'arte',
                
                'body' => 'Le strade delle nostre città sono un laboratorio artistico a cielo aperto, dove artisti di strada esprimono la loro creatività attraverso murales, graffiti e installazioni. In questo articolo, esploreremo il mondo affascinante della street art e dei graffiti, scoprendo i talenti emergenti e gli artisti affermati che trasformano gli spazi urbani in opere d\'arte pubblica. Ti porteremo in un viaggio attraverso le città del mondo per scoprire i tesori nascosti e le storie dietro queste straordinarie espressioni artistiche.',
                
                'image' => 'public/images/003.jpg',
                
                'user_id' => '3',
                
                'category_id' => '2',
                         
                ]);

                $articles = Article::create([

                    'title' => 'Viaggiare con uno zaino in spalla',
                    
                    'subtitle' => 'Esplora nuovi orizzonti',
                    
                    'body' => 'Il viaggio con uno zaino in spalla è un\'esperienza liberatoria che ti permette di esplorare il mondo in modo leggero e senza vincoli. In questo articolo, condivideremo consigli pratici per viaggiare con uno zaino in spalla, dalle migliori strategie di imballaggio ai suggerimenti per la scelta dell\'attrezzatura essenziale. Ti guideremo attraverso le meraviglie di viaggiare in modo indipendente e flessibile, scoprendo luoghi nascosti, incontrando nuove persone e vivendo avventure indimenticabili lungo il percorso.',
                    
                    'image' => 'public/images/002.jpg',
                    
                    'user_id' => '3',
                    
                    'category_id' => '3',
                             
                    ]);



                    $articles = Article::create([

                        'title' => 'Cucina del mondo',
                        
                        'subtitle' => 'Assapora i sapori delle cucine internazionali',
                        
                        'body' => 'La cucina del mondo è un viaggio culinario che ti porta in giro per il globo, alla scoperta dei sapori unici e delle tradizioni gastronomiche di diverse culture. In questo articolo, esploreremo le cucine internazionali più affascinanti, dalla cucina italiana alla cucina indiana, dalla cucina messicana alla cucina giapponese. Assapora i sapori autentici e scopri le storie dietro ogni piatto, immergendoti nelle tradizioni culinarie di tutto il mondo.',
                        
                        'image' => 'public/images/005.jpg',
                        
                        'user_id' => '3',
                        
                        'category_id' => '4',
                                 
                        ]);

                        
                    $articles = Article::create([

                        'title' => 'L\'importanza della conservazione della biodiversità',
                        
                        'subtitle' => 'Proteggere la varietà della vita sulla Terra',
                        
                        'body' => 'La biodiversità è la varietà della vita sulla Terra e rappresenta la ricchezza e la bellezza del nostro pianeta. In questo articolo, esploreremo l\'importanza della conservazione della biodiversità e gli sforzi necessari per proteggere le specie animali e vegetali in pericolo. Scopriremo come la perdita di biodiversità possa avere gravi conseguenze sull\'equilibrio degli ecosistemi e sulla sopravvivenza delle nostre società. Ti invitiamo a unirti alla lotta per preservare la biodiversità e garantire un futuro sostenibile per tutti gli esseri viventi sulla Terra.',
                        
                        'image' => 'public/images/001.jpg',
                        
                        'user_id' => '3',
                        
                        'category_id' => '5',
                        
                    
                                 
                        ]);

                      
                        



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
