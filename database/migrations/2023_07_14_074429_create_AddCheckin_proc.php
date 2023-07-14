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
CREATE procedure [dbo].[AddCheckin]  @ID INTEGER, @Pin varchar(10) , @Machine varchar(30), @FechaHora datetime, @Conexion int,  @ResponseText varchar(max) OUTPUT
as
begin
	Declare @APIURL varchar(max) = 'http://gglobal.tempus.la/' 

	set @APIURL = @APIURL + '/API/KioskoMovil/inertChecada'
	
	DECLARE @API VARCHAR(MAX)


	DECLARE @Object AS INTEGER;
	
	DECLARE @ResponseTextX AS VARCHAR(8000);

	--set @ResponseText = 'Inicializado'

	BEGIN TRY
		DECLARE @Body AS VARCHAR(max) = 
		'{
			\"Pin\": \"'+Cast(@Pin as varchar(10))+'\",
			\"FechaHora\": \"'+Cast(@FechaHora as varchar(max))+'\",
			\"Machine\": \"'+@Machine+'\",
			\"conexion\": \"'+Cast(@Conexion as varchar(10))+'\",
		}'; 

		EXEC sp_OACreate 'MSXML2.XMLHTTP', @Object OUT;
			EXEC sp_OAMethod @Object, 'open', NULL, 'post',@APIURL, 'false'

			EXEC sp_OAMethod @Object, 'setRequestHeader', null, 'Content-Type', 'application/json'
			EXEC sp_OAMethod @Object, 'send', null, @Body
			

			EXEC sp_OAMethod @Object, 'responseText', @ResponseTextX OUTPUT

			set  @ResponseText = @ResponseTextX;
			

			EXEC sp_OADestroy @Object
		END TRY
		BEGIN CATCH
			set @ResponseText = ERROR_MESSAGE();
		
			
		END CATCH	
		select @ResponseText

end
");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS AddCheckin");
    }
};
