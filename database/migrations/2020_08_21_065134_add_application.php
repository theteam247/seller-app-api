<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddApplication extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->char('first_name',255);
            $table->char('last_name',255);
            $table->char('shop_category',255);
            $table->char('portfolio_link',255)->unique();
            $table->boolean('has_online_shop');
            $table->char('online_shop_url',255)->nullable();
            $table->char('question_1_answer',255);
            $table->char('question_2_answer',255);
            $table->char('question_3_answer',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('applications');
    }
}
