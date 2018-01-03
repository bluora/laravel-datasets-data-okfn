<?php

namespace Bluora\LaravelDatasetsOkfn\Migrations;

use DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataOkfnCountryPopulationCurrentTable extends Migration
{
    protected $table_name = 'data_okfn_country_population_current';
    protected $connection = 'default';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up($connection = null)
    {
        Schema::connection(!is_null($connection) ? $connection : $this->connection)->create($this->table_name, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255)->default('');
            $table->string('code', 3)->default('');
            $table->integer('year');
            $table->bigInteger('population');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->timestamp('archived_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection($this->connection)->drop($this->table_name);
    }
}
