<h2 class="page-header">Empleados</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:250px;">Nombre</th>
            <th>Apellido</th>
            <th style="width:100px">Fecha N</th>
        </tr>
    </thead>
    <tbody>
        <?php if(count($model)>0): ?>
            <?php foreach($model as $item): ?>
                <tr>
                    <td>
                        <?php $item->nombre; ?>
                    </td>
                    <td>
                        <?php $item->apellido; ?>
                    </td>
                    <td>
                        <?php $item->fecha_nacimiento; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>