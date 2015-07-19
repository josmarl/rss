<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlimentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alimentos', function(Blueprint $table)
		{
			$table->char('CTAL')->required();
			$table->integer('CALIM')->required();
			$table->string('NOMALIM')->required();
			$table->double('ENERC');
			$table->double('ENERCKJ');
			$table->double('WATERg');
			$table->double('PROCNTg');
			$table->double('FATg');
			$table->double('CHOCDFg');
			$table->double('CHOAVLg');
			$table->double('FibraCg');
			$table->double('FIBTGg');
			$table->double('ASHg');
			$table->double('CalcCAmg');
			$table->double('FosfPmg');
			$table->double('ZincZNmg');
			$table->double('HierroFEmg');
			$table->double('CARTBQmg');
			$table->double('Retinolug');
			$table->double('VITAmg');
			$table->double('THIAmg');
			$table->double('RIBFmg');
			$table->double('NIAmg');
			$table->double('VITCmg');
			$table->double('AscTmg');
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
		Schema::drop('alimentos');
	}

}
