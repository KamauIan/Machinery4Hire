<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255);
            $table->integer('category_id')->unsigned();
            $table->integer('supplier_id')->unsigned()->index();
            $table->string('pic_of_machine');
            $table->string('contact');
            $table->text('description'); 
            $table->integer('pricing_rate');
            $table->text('pricing');
            $table->integer('location_id')->unsigned();
            $table->integer('items_available');

            $table->timestamps();


            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('listings');
    }
}


// <?php

// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Database\Migrations\Migration;

// class CreateListingsTable extends Migration
// {
//     /**
//      * Run the migrations.
//      *
//      * @return void
//      */


//     //Listings details created by the supplier after login
//     public function up()
//     {
//         Schema::create('listings', function (Blueprint $table) 
//         {
//             $table->increments('id');
//             $table->string('name',255);
//             $table->integer('category_id')->unsigned();
//             $table->string('pic_of_machine');
//             $table->text('description');
//             $table->text('pricing');
//             $table->integer('items_available');
//             $table->timestamps();

//             $table->foreign('category_id')->references('id')->on('categories');
//         });
//     }

//     /**
//      * Reverse the migrations.
//      *
//      * @return void
//      */
//     public function down()
//     {
//         Schema::drop('listings');
//     }
// }
