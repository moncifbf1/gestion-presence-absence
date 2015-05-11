<? $this->load->view('templates/header'); ?>
<? $this->load->view('navigation/adminNav'); ?>
<div class="container">
    <table id="AbsenceTable">
        <thead>
        <tr>
            <th>ID</th>
            <th>ETUDIANT</th>
            <th>DATE</th>
            <th>HEURE</th>
        </tr>
        </thead>
        <tbody>
        <? foreach ($absences as $absence): ?>
            <!--<td><?= $absence->etudiant ?></td>-->


            <tr>
                <td><?= $absence->idAbsence ?></td>
                <td><?= $absence->etudiant ?></td>
                <td><?= $absence->dateAbsence ?></td>
                <td><?= $absence->heureAbsence ?></td>
            </tr>
        <? endforeach; ?>
        </tbody>
    </table>
</div>
<? $this->load->view('templates/footer'); ?>