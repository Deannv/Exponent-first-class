<h1>Hallo, <?= $nama ?></h1>
<ul>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <li>
            <?= $mhs['nama'] ?> dengan usia <?= $mhs['umur'] ?>
        </li>
    <?php endforeach ?>
</ul>