<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForegionKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('issues', function (Blueprint $table) {
            $table->foreign('pollution_id')->references('id')->on('pollutions')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('issue_source', function (Blueprint $table) {
            $table->foreign('issue_id')->references('id')->on('issues')->onDelete('cascade');
            $table->foreign('source_id')->references('id')->on('sources')->onDelete('cascade');
        });
        Schema::table('issue_tag', function (Blueprint $table) {
            $table->foreign('issue_id')->references('id')->on('issues')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        });
        Schema::table('blogs', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('blog_tag', function (Blueprint $table) {
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        });
        Schema::table('comments', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('issue_id')->references('id')->on('issues')->onDelete('cascade');
        });
        Schema::table('issue_vote', function (Blueprint $table) {
            $table->foreign('issue_id')->references('id')->on('issues')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('issue_sign', function (Blueprint $table) {
            $table->foreign('issue_id')->references('id')->on('issues')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('issues', function (Blueprint $table) {
            $table->dropForeign('issues_pollution_id_foreign');
            $table->dropIndex('issues_pollution_id_foreign');
            $table->dropForeign('issues_user_id_foreign');
            $table->dropIndex('issues_user_id_foreign');
        });
        Schema::table('issue_source', function (Blueprint $table) {
            $table->dropForeign('issue_issue_id_foreign');
            $table->dropIndex('issue_issue_id_foreign');
            $table->dropForeign('issue_source_id_foreign');
            $table->dropIndex('issue_source_id_foreign');
        });
        Schema::table('issue_tag', function (Blueprint $table) {
            $table->dropForeign('issue_tag_issue_id_foreign');
            $table->dropIndex('issue_tag_issue_id_foreign');
            $table->dropForeign('issue_tag_tag_id_foreign');
            $table->dropIndex('issue_tag_tag_id_foreign');
        });
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropForeign('blogs_user_id_foreign');
            $table->dropIndex('blogs_user_id_foreign');
        });
        Schema::table('blog_tag', function (Blueprint $table) {
            $table->dropForeign('blog_tag_blog_id_foreign');
            $table->dropIndex('blog_tag_blog_id_foreign');
            $table->dropForeign('blog_tag_tag_id_foreign');
            $table->dropIndex('blog_tag_tag_id_foreign');
        });
        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign('comments_user_id_foreign');
            $table->dropIndex('comments_user_id_foreign');
            $table->dropForeign('comments_issue_id_foreign');
            $table->dropIndex('comments_issue_id_foreign');
        });
        Schema::table('issue_vote', function (Blueprint $table) {
            $table->dropForeign('issue_vote_issue_id_foreign');
            $table->dropIndex('issue_vote_issue_id_foreign');
            $table->dropForeign('issue_vote_user_id_foreign');
            $table->dropIndex('issue_vote_user_id_foreign');
        });
        Schema::table('issue_sign', function (Blueprint $table) {
            $table->dropForeign('issue_sign_uissue_id_foreign');
            $table->dropIndex('issue_sign_issue_id_foreign');
            $table->dropForeign('issue_sign_user_id_foreign');
            $table->dropIndex('issue_sign_user_id_foreign');
        });
    }
}
