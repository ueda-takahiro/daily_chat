<?php

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create(Comment::table(), function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->comment('ユーザID');
            $table->unsignedBigInteger('post_id')->comment('投稿ID');
            $table->text('body')->comment('本文');
            $table->softDeletes();
            $table->timestamps();

            $table->index(['user_id', 'post_id']);
            $table->foreign('user_id')->references('id')->on(User::table());
            $table->foreign('post_id')->references('id')->on(Post::table());
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists(Comment::table());
    }
}
