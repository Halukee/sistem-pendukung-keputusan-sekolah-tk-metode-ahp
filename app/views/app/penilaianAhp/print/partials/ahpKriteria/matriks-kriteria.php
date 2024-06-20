<div class="card">
    <h2 style="background-color: antiquewhite; padding: 10px;">
        Matriks Perbandingan Antar Kriteria
    </h2>
    <table style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th style="border: 1px solid #ddd; padding: 10px;">Kriteria</th>
                <?php
                $no = 1;
                foreach ($matriksOriginal as $kriteria_id1 => $item1) { ?>
                    <?php
                    $kodeKriteria = $data['kriteria'][$kriteria_id1]['kode_kriteria'];
                    ?>
                    <th style="border: 1px solid #ddd; padding: 10px;">
                        <span data-toggle="tooltip" data-placement="top" title="<?= $data['toconvert_kriteria'][$kodeKriteria]['nama_kriteria'] ?>">
                            <?= $kodeKriteria ?>
                        </span>
                    </th>
                <?php
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($matriksOriginal as $kriteria_id1 => $item1) { ?>
                <?php
                $kodeKriteria = $data['kriteria'][$kriteria_id1]['kode_kriteria'];
                ?>
                <tr>
                    <td style="border: 1px solid #ddd; padding: 10px;">
                        <span data-toggle="tooltip" data-placement="left" title="<?= $data['toconvert_kriteria'][$kodeKriteria]['nama_kriteria'] ?>">
                            <?= $kodeKriteria ?>
                        </span>
                    </td>
                    <?php
                    foreach ($item1 as $kriteria_id2 => $item) { ?>
                        <td style="border: 1px solid #ddd; padding: 10px;"><?= $item; ?></td>
                    <?php
                    }
                    ?>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>