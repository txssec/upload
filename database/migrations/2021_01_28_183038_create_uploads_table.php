<?php

use App\Enums\Status;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploads', function (Blueprint $table) {
            $table->id();
            $table->string("size");
            $table->string("src_front");
            $table->string("src_back")->nullable();
            $table->enum("status", Status::toArray());
            $table->date('expiration')->nullable();
            $table->string("mime");
            $table->string("origin");
            $table->date('approved_at')->nullable();
            $table->date('disapproved_at')->nullable();
            $table->string('disapproval_reason')->nullable();
            $table->nullableMorphs('owner');
            $table->foreignId('type_id')->references('id')->on('types');
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
        Schema::dropIfExists('uploads');
    }
}
