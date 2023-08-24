<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora 44vmin</title>
</head>
<body>
  <p>El valor de 44vmin es: <span id="valor44vminUsuario"></span></p>

  <script>
    let valor;

// Función para calcular y mostrar el valor de 44vmin en la página
const calcular44vmin = () => {
  const viewportWidth = Math.min(window.innerWidth, window.innerHeight);
  const valor44vmin = 0.44 * viewportWidth;
  return valor44vmin;
};

// Llama a la función cuando se carga la página y cada vez que se redimensiona la ventana
window.onload = () => {
  valor = calcular44vmin();
  document.getElementById('valor44vminUsuario').textContent = valor;
};

window.onresize = () => {
  valor = calcular44vmin();
  document.getElementById('valor44vminUsuario').textContent = valor;
};
  </script>
</body>
</html>