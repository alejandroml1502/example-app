<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Machines', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('MachineAlias', 20)->nullable();
            $table->integer('ConnectType')->nullable();
            $table->string('IP', 20)->nullable();
            $table->integer('SerialPort')->nullable()->default(1);
            $table->integer('Port')->nullable()->default(4370);
            $table->integer('Baudrate')->nullable();
            $table->integer('MachineNumber')->default(1);
            $table->boolean('IsHost');
            $table->boolean('Enabled')->default(false);
            $table->string('CommPassword', 12)->nullable();
            $table->smallInteger('UILanguage')->nullable()->default(-1);
            $table->smallInteger('DateFormat')->nullable()->default(-1);
            $table->smallInteger('InOutRecordWarn')->nullable()->default(-1);
            $table->smallInteger('Idle')->nullable()->default(-1);
            $table->smallInteger('Voice')->nullable()->default(-1);
            $table->string('FirmwareVersion', 50)->nullable();
            $table->string('ProductType', 20)->nullable();
            $table->smallInteger('LockControl')->nullable()->default(-1);
            $table->smallInteger('Purpose')->nullable();
            $table->integer('ProduceKind')->nullable();
            $table->string('sn', 20)->nullable();
            $table->string('PhotoStamp', 20)->nullable();
            $table->integer('IsIfChangeConfigServer2')->nullable();
            $table->integer('pushver')->nullable();
            $table->string('change_operator', 50)->nullable();
            $table->dateTime('change_time')->nullable();
            $table->string('create_operator', 50)->nullable();
            $table->dateTime('create_time')->nullable();
            $table->string('delete_operator', 50)->nullable();
            $table->dateTime('delete_time')->nullable();
            $table->integer('status')->nullable()->default(0);
            $table->integer('device_type')->nullable();
            $table->dateTime('last_activity')->nullable();
            $table->string('trans_times', 50)->nullable();
            $table->integer('TransInterval')->nullable();
            $table->string('log_stamp', 50)->nullable();
            $table->binary('oplog_stamp')->nullable();
            $table->binary('photo_stamp')->nullable();
            $table->string('UpdateDB', 50)->nullable()->default('1111101000');
            $table->string('device_name', 50)->nullable();
            $table->integer('transaction_count')->nullable();
            $table->string('main_time', 50)->nullable();
            $table->integer('max_user_count')->nullable();
            $table->integer('max_finger_count')->nullable();
            $table->integer('max_attlog_count')->nullable();
            $table->string('alg_ver', 50)->nullable();
            $table->string('flash_size', 50)->nullable();
            $table->string('free_flash_size', 50)->nullable();
            $table->string('language', 50)->nullable();
            $table->string('lng_encode', 50)->nullable()->default('gb2312');
            $table->string('volume', 50)->nullable();
            $table->string('is_tft', 50)->nullable();
            $table->string('platform', 50)->nullable();
            $table->string('brightness', 50)->nullable();
            $table->string('oem_vendor', 50)->nullable();
            $table->string('city', 50)->nullable();
            $table->integer('AccFun')->nullable()->default(0);
            $table->integer('TZAdj')->nullable()->default(8);
            $table->integer('comm_type')->nullable();
            $table->string('agent_ipaddress', 50)->nullable();
            $table->string('subnet_mask', 50)->nullable();
            $table->string('gateway', 50)->nullable();
            $table->integer('area_id')->nullable();
            $table->integer('acpanel_type')->nullable()->default(2);
            $table->boolean('sync_time')->default(false);
            $table->boolean('four_to_two')->default(false);
            $table->string('video_login', 50)->nullable();
            $table->integer('fp_mthreshold')->nullable();
            $table->integer('Fpversion')->nullable();
            $table->integer('max_comm_size')->nullable()->default(40);
            $table->integer('max_comm_count')->nullable()->default(20);
            $table->boolean('realtime')->default(false);
            $table->integer('delay')->nullable()->default(10);
            $table->boolean('encrypt')->default(false);
            $table->integer('dstime_id')->nullable();
            $table->integer('door_count')->nullable();
            $table->integer('reader_count')->nullable();
            $table->integer('aux_in_count')->nullable();
            $table->integer('aux_out_count')->nullable();
            $table->integer('IsOnlyRFMachine')->nullable();
            $table->string('alias', 50)->nullable();
            $table->string('ipaddress', 50)->nullable();
            $table->smallInteger('com_port')->nullable();
            $table->smallInteger('com_address')->nullable()->default(1);
            $table->integer('SimpleEventType')->nullable()->default(0);
            $table->integer('FvFunOn')->nullable()->default(0);
            $table->smallInteger('fvcount')->nullable()->default(0);
            $table->binary('deviceOption')->nullable();
            $table->integer('DevSDKType')->nullable();
            $table->binary('UTableDesc')->nullable();
            $table->boolean('IsTFTMachine')->nullable();
            $table->integer('PinWidth')->nullable();
            $table->integer('UserExtFmt')->nullable();
            $table->integer('FP1_NThreshold')->nullable();
            $table->integer('FP1_1Threshold')->nullable();
            $table->integer('Face1_NThreshold')->nullable();
            $table->integer('Face1_1Threshold')->nullable();
            $table->integer('Only1_1Mode')->nullable();
            $table->integer('OnlyCheckCard')->nullable();
            $table->integer('MifireMustRegistered')->nullable();
            $table->integer('RFCardOn')->nullable();
            $table->integer('Mifire')->nullable();
            $table->integer('MifireId')->nullable();
            $table->integer('NetOn')->nullable();
            $table->integer('RS232On')->nullable();
            $table->integer('RS485On')->nullable();
            $table->integer('FreeType')->nullable();
            $table->integer('FreeTime')->nullable();
            $table->integer('NoDisplayFun')->nullable();
            $table->integer('VoiceTipsOn')->nullable();
            $table->integer('TOMenu')->nullable();
            $table->integer('StdVolume')->nullable();
            $table->integer('VRYVH')->nullable();
            $table->integer('KeyPadBeep')->nullable();
            $table->integer('BatchUpdate')->nullable();
            $table->integer('CardFun')->nullable();
            $table->integer('FaceFunOn')->nullable();
            $table->integer('FaceCount')->nullable();
            $table->integer('TimeAPBFunOn')->nullable();
            $table->string('FingerFunOn', 5)->nullable();
            $table->string('CompatOldFirmware', 5)->nullable();
            $table->binary('ParamValues')->nullable();
            $table->string('WirelessSSID', 50)->nullable();
            $table->string('WirelessKey', 50)->nullable();
            $table->string('WirelessAddr', 50)->nullable();
            $table->string('WirelessMask', 50)->nullable();
            $table->string('WirelessGateWay', 50)->nullable();
            $table->boolean('IsWireless')->nullable()->default(false);
            $table->integer('managercount')->nullable()->default(-1);
            $table->integer('usercount')->nullable()->default(-1);
            $table->integer('fingercount')->nullable()->default(-1);
            $table->integer('SecretCount')->nullable()->default(-1);
            $table->integer('ACFun')->nullable();
            $table->string('BiometricType', 100)->nullable();
            $table->string('BiometricVersion', 100)->nullable();
            $table->string('BiometricMaxCount', 100)->nullable();
            $table->string('BiometricUsedCount', 100)->nullable();
            $table->integer('WIFI')->nullable();
            $table->integer('WIFIOn')->nullable();
            $table->integer('WIFIDHCP')->nullable();
            $table->integer('capHuellas')->nullable();
            $table->integer('capRostros')->nullable();
            $table->integer('capUsuarios')->nullable();
            $table->integer('Prioridad')->nullable();
            $table->boolean('Enrolador')->nullable();
            $table->dateTime('ultimaRecoleccion')->nullable();
            $table->string('VersionSDK', 5)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Machines');
    }
};
