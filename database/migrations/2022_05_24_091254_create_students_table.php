<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('Name')->nullable()->comment('اسم الحالة');
            $table->string('code')->comment('كود الحالة');
            $table->date('Birdth')->comment('تاريخ الميلاد');
            $table->string('Age')->comment('العمر');
            $table->string('National_ID')->nullable()->comment('الرقم القومي');
            $table->string('motherName')->nullable()->comment('اسم الأم');
            $table->string('NameFather')->nullable()->comment('اسم ولي الأمر');
            $table->string('CaseNumber')->comment('رقم القضية');
            $table->string('Address')->nullable()->comment('عنوان ولي الأمر');
            $table->date('CaseHistory')->nullable()->comment('تاريخ الإيداع');
            $table->string('Accusation')->comment('الإتهام');
            $table->string('pic')->nullable()->comment('صورة شخصية');
            $table->string('Transfer')->nullable()->comment('طريقة التحويل');
            $table->string('state')->nullable()->comment(' الحالة النفسية');
            $table->string('stateResult')->nullable()->comment('نتيجة الإختبار النفسي');
            $table->string('social_watcher')->comment('المراقب الإجتماعي');
            $table->string('stateEducation')->nullable()->comment('الحالة العلمية');
            $table->string('worker')->nullable()->comment('الإخصائي الإجتماعي');
            $table->string('Business')->nullable()->comment('المهن السابقة');
            $table->string('stateFamily')->nullable()->comment('حالة الأسرة الإقتصادية');
            $table->string('Brothers')->nullable()->comment('عدد الإخوة');
            $table->string('fatherJop')->nullable()->comment('وظيفة الأب');
            $table->string('motherJop')->nullable()->comment('وظيفة الأم');
            $table->string('Nots')->nullable()->comment('ملاحظات');
            $table->tinyInteger('ecape_yes')->default(0)->comment('هروب الفتيات');
            $table->tinyInteger('exit_yes')->default(0)->comment('خروج الفتيات');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
