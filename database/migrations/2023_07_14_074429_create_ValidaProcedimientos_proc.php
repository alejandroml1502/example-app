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
        DB::unprepared("create PROCEDURE [dbo].[ValidaProcedimientos]
/* WITH ENCRYPTION, RECOMPILE, EXECUTE AS CALLER|SELF|OWNER| 'user_name'*/
AS
DECLARE @Observaciones VARCHAR(2000) = '';

IF NOT EXISTS
(
    SELECT 1
    FROM sys.sysobjects
    WHERE type = 'P'
          AND name = 'sp_ImportaEmpleadosAct'
)
BEGIN
    SET @Observaciones = 'El procedimiento sp_ImportaEmpleadosAct no existe.';
END;

IF NOT @Observaciones = ''
BEGIN
    THROW 51000, @Observaciones, 1;
END;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS ValidaProcedimientos");
    }
};
