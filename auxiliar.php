<?php
/**
 * Muestra un error.
 * @param  string $mensaje El mensaje de error
 */
function mostrarError($mensaje)
{
  echo "<h3>Error: $mensaje</h3>"; //en este caso sí merece la pena usar el echo
}

/**
 * Muestra la tabla de multiplicar.
 * @param  string|int $numero El número del cual sacar la tabla
 */
function mostrarTabla($numero)
{
  ?>
  <table border="1">
    <thead>
      <th><?= $numero ?></th>
      <th>x</th>
      <th>n</th>
      <th> = </th>
      <th>m</th>
    </thead>
    <tbody>
      <?php for ($i = 0; $i <= 10; $i++): ?> <!--si el código php es de una línea es mejor ponerlo todo junto apertura y cierre-->
        <tr>
          <td><?= $numero ?></td>
          <td>x</td>
          <td><?= $i ?></td>
          <td> = </td>
          <td><?= $numero * $i ?></td>  <!--en html sí se puede pasar el producto sin una variable-->
        </tr>
      <?php endfor ?>
    </tbody>
  </table>
  <?php
}
