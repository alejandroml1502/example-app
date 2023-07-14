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
create procedure [dbo].[RegistrarHuella] @bagednumber varchar(10) , @template int, @data varchar(3000)
as
	begin
	IF EXISTS (SELECT NULL  FROM dbo.USERINFO WHERE BADGENUMBER = @bagednumber)
	BEGIN
    	if not exists(select null from BioTemplate where BadgeNumber = @bagednumber and TemplateNO = @template)
		BEGIN
        
			declare @userid int
			select @userid = USERID from USERINFO where BADGENUMBER = @bagednumber
			insert into BioTemplate 
				(UserID,
				BadgeNumber,
				CreateOperator,
				CreateTime,
				ValidFlag,
				IsDuress,
				BioType,
				Version,
				DataFormat,
				TemplateNO,
				TemplateNOIndex,
				nOldType,
				TemplateData)
			values 
				(@userid,
				@bagednumber,
				NULL,
				NULL,
				'1',
				'0',
				1,
				'10.0',
				0,
				@template,
				0,
				0,
				@data)
		end
		else
		begin 
			update BioTemplate set TemplateData = @data where BadgeNumber = @bagednumber and TemplateNO = @template
		end

	END
    
	end");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS RegistrarHuella");
    }
};
