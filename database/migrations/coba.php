use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NamaMigration extends Migration
{
    public function up()
    {
        Schema::create('nama_tabel', function (Blueprint $table) {
            $table->id();
            $table->string('kolom1');
            $table->string('kolom2');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nama_tabel');
    }
}
