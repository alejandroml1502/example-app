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
        DB::unprepared("CREATE procedure [dbo].[RegistrarBiometrico] @bagednumber varchar(10), @biotype int, @templateData varchar(max), @template_no int, @template_no_index int, @version varchar(20)
as
	BEGIN
        IF  EXISTS (SELECT null FROM dbo.USERINFO WHERE BADGENUMBER = @bagednumber)
	BEGIN
		if not exists(select null from BioTemplate where BadgeNumber = @bagednumber and TemplateNO = @template_no and TemplateNOIndex = @template_no_index and Version =@version)
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
				@biotype,
				@version,
				0,
				@template_no,
				@template_no_index,
				0,
				@templateData)
		end/*
		else
		begin
		   update BioTemplate set TemplateData = @data, nOldType = @tamano where BadgeNumber = @bagednumber and TemplateNO = @template
		END*/
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
        DB::unprepared("DROP PROCEDURE IF EXISTS RegistrarBiometrico");
    }
};
