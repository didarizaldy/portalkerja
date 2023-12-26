<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->char('slug', 48)->unique();
            $table->string('title', 48);
            $table->enum('categories', ['informatika', 'mesin', 'elektro']);
            $table->integer('author')->unsigned();
            $table->integer('companies')->unsigned();
            $table->integer('editby')->unsigned()->nullable();
            $table->string('token', 32);
            $table->enum('graduate', ['megister', 'sarjana', 'diploma', 'smk', 'sma']);
            $table->enum('experience', ['fresh_graduate', 'oneyear', 'twoyear', 'advanced']);
            $table->string('skills', 32);
            $table->string('position', 32);
            $table->enum('work_type', ['remote', 'onsite', 'hybrid']);
            $table->integer('worksite')->unsigned();
            $table->decimal('salary', 10, 2)->nullable()->default(0.00);
            $table->integer('quota');
            $table->longText('jobdesk');
            $table->date('expireddate')->nullable();
            $table->timestamp('postdate')->useCurrent();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('author')->references('id')->on('users');
            $table->foreign('companies')->references('id')->on('companies');
            $table->foreign('editby')->references('id')->on('users');
            // $table->foreign('worksite')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
