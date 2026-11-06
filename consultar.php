<?php include 'includes/header.php'; ?>

<section class="card">
    <h1>Consultar Reportes</h1>
    <p>Lista general de incidencias reportadas por la ciudadanía. Puedes revisar si los casos se encuentran pendientes, en tratamiento o resueltos.</p>
    
    <table style="width: 100%; border-collapse: collapse; margin-top: 1rem;">
        <thead>
            <tr style="background-color: #1b365d; color: white;">
                <th style="padding: 10px; text-align: left;">ID</th>
                <th style="padding: 10px; text-align: left;">Descripción</th>
                <th style="padding: 10px; text-align: left;">Ubicación</th>
                <th style="padding: 10px; text-align: left;">Estado</th>
                <th style="padding: 10px; text-align: center;">Acción</th>
            </tr>
        </thead>
        <tbody>
            <tr style="border-bottom: 1px solid #ddd;">
                <td style="padding: 10px;">#001</td>
                <td style="padding: 10px;">Bache profundo en vía principal</td>
                <td style="padding: 10px;">San José, Pavas</td>
                <td style="padding: 10px; color: #d97706; font-weight: bold;">En trámite</td>
                <td style="padding: 10px; text-align: center;"><a href="detalle.php" class="btn" style="padding: 0.3rem 0.8rem; font-size: 0.9rem;">Ver Detalle</a></td>
            </tr>
            <tr style="border-bottom: 1px solid #ddd;">
                <td style="padding: 10px;">#002</td>
                <td style="padding: 10px;">Hundimiento por tubería dañada</td>
                <td style="padding: 10px;">Cartago, Oriental</td>
                <td style="padding: 10px; color: #16a34a; font-weight: bold;">Resuelto</td>
                <td style="padding: 10px; text-align: center;"><a href="detalle.php" class="btn" style="padding: 0.3rem 0.8rem; font-size: 0.9rem;">Ver Detalle</a></td>
            </tr>
        </tbody>
    </table>
</section>

<?php include 'includes/footer.php'; ?>