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
        DB::unprepared("create PROCEDURE [dbo].[sp_InfoUsuario]
@enroll varchar(10),
/*@depcode varchar(20) output, */
@userName varchar(100) output
/*, @userCardNo varchar(10) output*/
AS      
	(SELECT  @userName = Name + ' ' + lastname /*, @userCardNo = CardNo, @depcode = DEFAULTDEPTID,*/
	FROM USERINFO
	WHERE Badgenumber = @enroll);
RETURN");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS sp_InfoUsuario");
    }
};
