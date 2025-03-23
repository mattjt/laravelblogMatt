<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToContactSubmissionsTable extends Migration
{
    public function up()
    {
        Schema::table('contact_submissions', function (Blueprint $table) {
            $table->string('name')->after('id');
            $table->string('email')->after('name');
            $table->text('message')->after('email');
        });
    }

    public function down()
    {
        Schema::table('contact_submissions', function (Blueprint $table) {
            $table->dropColumn(['name', 'email', 'message']);
        });
    }
}
