<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('categories') && Schema::hasTable('authors') && Schema::hasTable('books')) {
            Schema::table('books', function (Blueprint $table) {
                $table->foreign('author_id')->references('id')->on('authors')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
                $table->foreign('category_id')->references('id')->on('categories')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('categories') && Schema::hasTable('authors') && Schema::hasTable('books')) {
            Schema::table('books', function (Blueprint $table) {
                $table->dropForeign(['author_id', 'category_id']);
            });
        }
    }
}
