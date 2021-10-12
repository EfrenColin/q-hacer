<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->uuid('guid')->unique()->index();
            $table->string('name');
            $table->text('bio')->nullable();
            $table->string('email')->unique();
            $table->string('phone',50)->nullable();
            $table->string('country_code',10)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->datetime('last_login_at')->nullable();
            $table->string('last_login_ip')->nullable();
            $table->string('status',50)->default(\App\Models\User::ACTIVE);
            $table->string('country')->nullable();
            $table->enum('gender', ['Hombre', 'Mujer', 'Otro','Sin definir'])->default('Sin definir');
            $table->foreignId('current_workspace_id')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
