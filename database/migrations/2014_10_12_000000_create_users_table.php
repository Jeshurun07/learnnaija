<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('mobile');
            $table->string('gender');
            $table->string('country');
            $table->string('state');
            $table->ipAddress('ipAddr');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('feedback', function (Blueprint $table) {
            $table->integer('feedbackId');
            $table->string('email');
            $table->text('feedback');
            $table->string('type');
            $table->string('ipAddr');
            $table->rememberToken();
            $table->timestamps();
            $table->primary('feedbackId');
        });
        Schema::create('img', function (Blueprint $table) {
            $table->integer('imgId');
            $table->string('link');
            $table->text('question');
            $table->primary('imgId');
        });
        Schema::create('instruction', function (Blueprint $table) {
            $table->integer('insId');
            $table->string('instruction');
            $table->string('section');
            $table->integer('subject');
            $table->primary('insId');
        });
        Schema::create('publisher', function (Blueprint $table) {
            $table->integer('pubId');
            $table->string('pubName');
            $table->string('country');
            $table->string('state');
            $table->string('subject');
            $table->primary('pubId');
        });
        Schema::create('question', function (Blueprint $table) {
            $table->integer('questionId');
            $table->string('diffultyLevel');
            $table->string('subject');
            $table->text('ques');
            $table->string('opt1');
            $table->string('opt2');
            $table->string('opt3');
            $table->string('opt4');
            $table->string('opt5');
            $table->string('corr');
            $table->string('topic');
            $table->integer('instruction');
            $table->integer('section');
            $table->primary('questionId');
        });
        Schema::create('score', function (Blueprint $table) {
            $table->integer('scoreId');
            $table->integer('user');
            $table->integer('subj');
            $table->smallinteger('score');
            $table->timestamps();
            $table->primary('scoreId');
        });
        Schema::create('section', function (Blueprint $table) {
            $table->integer('sectionId');
            $table->string('sectionName');
            $table->integer('subj');
            $table->primary('sectionId');
        });
        Schema::create('subject', function (Blueprint $table) {
            $table->integer('subjectId');
            $table->string('subjectName');
            $table->string('difficulty');
            $table->primary('subjectId');
        });
        Schema::create('textbook', function (Blueprint $table) {
            $table->integer('textId');
            $table->string('textName');
            $table->integer('publisher');
            $table->integer('subject');
            $table->integer('section');
            $table->decimal('rating',3,1);
            $table->string('author', 200);
            $table->primary('textId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
