<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Recetas - Cuchara Mágica</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #FFFBDE;
      color: #096B68;
      margin: 0;
    }

    header {
      background-color: #096B68;
      color: white;
      text-align: center;
      padding: 2rem;
    }

    main {
      padding: 2rem;
      max-width: 800px;
      margin: auto;
    }

    section {
      background-color: #90D1CA;
      padding: 2rem;
      border-radius: 10px;
      margin-bottom: 2rem;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      color: #129990;
    }

    h3 {
      margin-top: 1.5rem;
      color: #096B68;
    }

    ul, ol {
      margin-left: 1.5rem;
    }

    .volver {
      display: inline-block;
      margin-top: 2rem;
      text-decoration: none;
      background-color: #129990;
      color: white;
      padding: 0.7rem 1.5rem;
      border-radius: 5px;
      font-weight: bold;
      transition: background-color 0.3s;
    }

    .volver:hover {
      background-color: #096B68;
    }

    footer {
      background-color: #096B68;
      color: white;
      text-align: center;
      padding: 1rem;
    }
  </style>
</head>
<body>

<header>
  <h1>Recetas - Cuchara Mágica</h1>
</header>

<main>
<?php
if (isset($_GET['tipo'])) {
  $tipo = htmlspecialchars($_GET['tipo']);

  switch ($tipo) {
    case 'carnes':
      echo "<section>
              <h2>Recetas de Carnes</h2>

              <h3>Pollo al horno con hierbas</h3>
              <strong>Ingredientes:</strong>
              <ul>
                <li>4 muslos de pollo</li>
                <li>2 dientes de ajo picados</li>
                <li>1 cdita de tomillo, 1 cdita de romero</li>
                <li>Sal, pimienta y aceite de oliva</li>
              </ul>
              <strong>Preparación:</strong>
              <ol>
                <li>Precalienta el horno a 200°C.</li>
                <li>Mezcla las hierbas con ajo y aceite.</li>
                <li>Unta el pollo y hornea 45 minutos.</li>
              </ol>

              <h3>Costillas BBQ</h3>
              <ul>
                <li>1 kg de costillas de cerdo</li>
                <li>Sal, pimienta, salsa BBQ</li>
              </ul>
              <ol>
                <li>Hornea las costillas a 180°C por 1 hora.</li>
                <li>Agrega salsa BBQ y hornea 15 minutos más.</li>
              </ol>

              <h3>Estofado de res con papas</h3>
              <ul>
                <li>500 g carne de res en cubos</li>
                <li>2 papas, 1 zanahoria, ajo, cebolla</li>
                <li>1 taza de caldo, sal, pimienta</li>
              </ul>
              <ol>
                <li>Dora la carne, añade los demás ingredientes.</li>
                <li>Cocina tapado por 45 min a fuego bajo.</li>
              </ol>
            </section>";
      break;

    case 'ensaladas':
      echo "<section>
              <h2>Recetas de Ensaladas</h2>

              <h3>Ensalada César</h3>
              <ul>
                <li>Lechuga romana</li>
                <li>Crutones, parmesano</li>
                <li>Aderezo César</li>
              </ul>
              <ol>
                <li>Mezcla ingredientes y sirve frío.</li>
              </ol>

              <h3>Ensalada de quinoa y mango</h3>
              <ul>
                <li>1 taza quinoa cocida</li>
                <li>1 mango en cubos, 1/2 pepino</li>
                <li>Menta fresca, limón</li>
              </ul>
              <ol>
                <li>Mezcla todo y refrigera 15 minutos.</li>
              </ol>

              <h3>Ensalada griega</h3>
              <ul>
                <li>Tomate, pepino, cebolla morada</li>
                <li>Feta, aceitunas negras</li>
                <li>Aceite de oliva, orégano</li>
              </ul>
              <ol>
                <li>Mezcla todos los ingredientes y sirve frío.</li>
              </ol>
            </section>";
      break;

    case 'postres':
      echo "<section>
              <h2>Recetas de Postres</h2>

              <h3>Pastel de chocolate</h3>
              <ul>
                <li>1 taza harina, 1 taza azúcar</li>
                <li>1/2 taza cacao, 2 huevos</li>
                <li>1 taza leche, 1/2 taza aceite</li>
              </ul>
              <ol>
                <li>Mezcla los ingredientes y hornea a 180°C por 35 minutos.</li>
              </ol>

              <h3>Flan de coco</h3>
              <ul>
                <li>1 leche condensada, 1 leche de coco</li>
                <li>4 huevos, caramelo</li>
              </ul>
              <ol>
                <li>Licúa todo y hornea a baño maría 50 minutos.</li>
              </ol>

              <h3>Galletas de avena</h3>
              <ul>
                <li>1 taza avena, 1/2 taza harina</li>
                <li>1/2 taza mantequilla, 1 huevo</li>
                <li>1/2 taza azúcar morena</li>
              </ul>
              <ol>
                <li>Forma bolitas y hornea a 180°C por 12 minutos.</li>
              </ol>
            </section>";
      break;

    case 'bebidas':
      echo "<section>
              <h2>Recetas de Bebidas</h2>

              <h3>Limonada con hierbabuena</h3>
              <ul>
                <li>1 litro de agua</li>
                <li>Jugo de 4 limones</li>
                <li>Hierbabuena, azúcar, hielo</li>
              </ul>
              <ol>
                <li>Licúa todo y sirve fría.</li>
              </ol>

              <h3>Batido de fresa</h3>
              <ul>
                <li>1 taza fresas, 1 taza leche o yogur</li>
                <li>Azúcar o miel al gusto</li>
              </ul>
              <ol>
                <li>Licúa hasta que quede suave.</li>
              </ol>

              <h3>Café helado</h3>
              <ul>
                <li>1 taza café frío</li>
                <li>Leche, hielo, azúcar o leche condensada</li>
              </ul>
              <ol>
                <li>Licúa todo y sirve con hielo.</li>
              </ol>
            </section>";
      break;

    default:
      echo "<section><p>La categoría seleccionada no es válida.</p></section>";
  }

  echo "<div style='text-align:center;'><a class='volver' href='index.php'>&larr; Volver a seleccionar</a></div>";

} else {
  echo "<section><p>No se ha seleccionado ninguna categoría.</p>
        <div style='text-align:center;'><a class='volver' href='index.php'>&larr; Volver a seleccionar</a></div></section>";
}
?>
</main>

<footer>
  <p>&copy; 2025 Cuchara Mágica. Todos los derechos reservados.</p>
</footer>

</body>
</html>
