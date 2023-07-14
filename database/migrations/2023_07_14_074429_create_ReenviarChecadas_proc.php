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
CREATE procedure [dbo].[ReenviarChecadas]  @fechaDesde datetime
as
begin
	

	DECLARE @id INT
	DECLARE @Time datetime
	DECLARE @pin INT
	DECLARE @device_name varchar(25)

	DECLARE cursor_name CURSOR FAST_FORWARD READ_ONLY FOR select id,time,pin,device_name from acc_monitor_log where time >= @fechaDesde  and EstatusEnvio = 0 and pin != ''

	OPEN cursor_name

	FETCH NEXT FROM cursor_name INTO @id,@Time,@pin,@device_name

	WHILE @@FETCH_STATUS = 0
	BEGIN
		declare @respuesta varchar(max)
		--select @id,@pin,@device_name,@Time

			declare @conexion int

		 select @conexion = conexion from USERINFO where BADGENUMBER = @Pin 
	
		exec AddCheckin @id,@pin,@device_name,@Time,@conexion, @respuesta out
		if (substring(@respuesta,0,15) = '{\"Status\":true')
			Begin
				update acc_monitor_log set EstatusEnvio = 1, MensajeAPI= @respuesta where id = @id
			End
		Else
			Begin
				update acc_monitor_log set EstatusEnvio = 0, MensajeAPI= @respuesta where id = @id
			End
		
		FETCH NEXT FROM cursor_name INTO @id,@Time,@pin,@device_name
	END

	CLOSE cursor_name
	DEALLOCATE cursor_name

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
        DB::unprepared("DROP PROCEDURE IF EXISTS ReenviarChecadas");
    }
};
