class Pegawai {
    private $nama;
    private $jenis_kelamin;
    private $jabatan;
    private $status;
    private $gaji;

    public function __construct($nama, $jenis_kelamin, $jabatan, $status, $gaji) {
        $this->nama = $nama;
        $this->jenis_kelamin = $jenis_kelamin;
        $this->jabatan = $jabatan;
        $this->status = $status;
        $this->gaji = $gaji;
    }

    public function tampilkanInformasi() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Jenis Kelamin: " . $this->jenis_kelamin . "<br>";
        echo "Jabatan: " . $this->jabatan . "<br>";
        echo "Status: " . $this->status . "<br>";
        echo "Gaji: " . $this->gaji . "<br>";
    }
}
$pegawai = new Pegawai("Budi", "Laki-laki", "Manager", "Menikah", 10000000);
$pegawai->tampilkanInformasi();
