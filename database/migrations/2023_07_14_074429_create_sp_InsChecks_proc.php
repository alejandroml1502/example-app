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
        DB::unprepared("CREATE procedure [dbo].[sp_InsChecks](@USERID int
           ,@CHECKTIME datetime,
           @CHECKTYPE varchar(1),
           @VERIFYCODE int,
           @SENSORID varchar(5),
           @MachineId int,
           @UserExtFmt int,
           @WorkCode int,
           @Memoinfo varchar(20),
           @sn varchar(20))
		   as
		   begin
		   declare @ID varchar(10)

		   if EXISTS(select userid from USERINFO where Badgenumber = @USERID)
		   begin
				   select @ID = userid from USERINFO where Badgenumber = @USERID
				   IF NOT EXISTS (SELECT * FROM [CHECKINOUT] 
						   WHERE USERID = @ID
						   AND CHECKTIME = @CHECKTIME)
						   begin
							INSERT INTO [dbo].[CHECKINOUT]
									   ([USERID]
									   ,[CHECKTIME]
									   ,[CHECKTYPE]
									   ,[VERIFYCODE]
									   ,[SENSORID]
									   ,[MachineId]
									   ,[UserExtFmt]
									   ,[WorkCode]
									   ,[Memoinfo]
									   ,[sn])
										 VALUES
										   (@ID,
										   @CHECKTIME,
										   @CHECKTYPE,
										   @VERIFYCODE,
										   @SENSORID,
										   @MachineId,
										   @UserExtFmt,
										   @WorkCode,
										   @Memoinfo,
										   @sn)
							end

					IF NOT EXISTS (SELECT * FROM [acc_monitor_log] 
						   WHERE pin = @USERID
						   AND [time] = @CHECKTIME)
						   begin
						   
							declare @MachineAlias varchar(50) 
							select @id = id, @MachineAlias = MachineAlias from Machines where sn = @sn


							INSERT INTO [dbo].[acc_monitor_log]
									   ([status]
									   ,[log_tag]
									   ,[time]
									   ,[pin]
									   ,[card_no]
									   ,[device_id]
									   ,[device_name]
									   ,[verified]
									   ,[state]
									   ,[event_type]
									   ,[description]
									   ,[event_point_type]
									   ,[event_point_id]
									   ,[event_point_name])
								 VALUES
									   (0
									   ,0
									   ,@CHECKTIME
									   ,@USERID
									   ,''
									   ,@id
									   ,@MachineAlias
									   ,1
									   ,2
									   ,0
									   ,''
									   ,0
									   ,0
									   ,@SENSORID + '-1')
							end


		   end
		 

			end");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS sp_InsChecks");
    }
};
