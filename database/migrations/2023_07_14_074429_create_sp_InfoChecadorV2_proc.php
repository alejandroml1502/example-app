<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("

CREATE PROCEDURE [dbo].[sp_InfoChecadorV2]
    @linea INT
AS
(SELECT foo.ID,
		foo.IP,
        foo.ProductType,
        foo.MachineAlias,
        foo.sn,
        CAST(foo.Enrolador as bit) as Enrolador,
		CASE WHEN foo.capUsuarios IS NULL THEN '0' ELSE foo.capUsuarios END AS 'capUsuarios',
		CASE WHEN foo.capHuellas IS NULL THEN '0' ELSE foo.capHuellas END AS 'capHuellas',
		CASE WHEN  foo.capRostros IS NULL THEN '0' ELSE  foo.capRostros END AS 'capRostros',
		CASE WHEN  foo.prioridad IS NULL THEN '0' ELSE  foo.prioridad END AS 'prioridad',
		foo.Port,
		foo.versionSDK
 FROM
 (
     SELECT ROW_NUMBER() OVER (ORDER BY ID) AS Row,
            *
     FROM dbo.Machines
	 WHERE Enabled = 1 
 ) AS foo
 WHERE foo.Row = @linea);
RETURN;


");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS sp_InfoChecadorV2");
    }
};
