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
create procedure [dbo].[RegistrarRostro] @bagednumber varchar(10) , @template int, @data varchar(max), @tamano int
as
	BEGIN
        IF  EXISTS (SELECT null FROM dbo.USERINFO WHERE BADGENUMBER = @bagednumber)
	BEGIN
		if not exists(select null from BioTemplate where BadgeNumber = @bagednumber and TemplateNO = @template)
		begin
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
				2,
				'7.0',
				0,
				@template,
				0,
				@tamano,
				@data)
		end
		else
		begin
		   update BioTemplate set TemplateData = @data, nOldType = @tamano where BadgeNumber = @bagednumber and TemplateNO = @template
		END
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
        DB::unprepared("DROP PROCEDURE IF EXISTS RegistrarRostro");
    }
};
