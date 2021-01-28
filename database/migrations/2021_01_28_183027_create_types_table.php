<?php

use App\Enums\Privacy;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("mimes");
            $table->string("disk");
            $table->enum("privacy", Privacy::toArray());
            $table->string("directory");
            $table->boolean("status");
            $table->string("src_back_rule")->nullable();
            $table->string("expiration_rule")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('types');
    }
}
