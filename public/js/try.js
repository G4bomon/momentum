const track = document.getElementById('image-track');
const textids = ['text-1', 'text-2', 'text-3', 'text-4', 'text-5'];
const imageids = ['imagen-1', 'imagen-2', 'imagen-3', 'imagen-4', 'imagen-5'];
let shouldStopMove = false;

const handleOnDown = e => track.dataset.mouseDownAt = e.clientX;

const handleOnUp = () => {
  track.dataset.mouseDownAt = "0";
  track.dataset.prevPercentage = track.dataset.percentage;
}
let porcentaje;
const handleOnMove = e => {
  if (track.dataset.mouseDownAt === "0" || shouldStopMove) return;

  const mouseDelta = parseFloat(track.dataset.mouseDownAt) - e.clientX,
    maxDelta = window.innerWidth / 2;

  const percentage = (mouseDelta / maxDelta) * -100,
    nextPercentageUnconstrained = parseFloat(track.dataset.prevPercentage) + percentage,
    nextPercentage = Math.max(Math.min(nextPercentageUnconstrained, 0), -100);

  track.dataset.percentage = nextPercentage;

  track.style.transform = `translate(${nextPercentage}%, -50%)`;
  porcentaje= nextPercentage;
  for (const image of track.getElementsByClassName("image")) {
    image.style.objectPosition = `${100 + nextPercentage}% center`;
  }
}

let ancho;
let valor;

function obtenerAnchoPestana() {
  ancho = window.innerWidth;
  valor = calcular44vmin();
}

const calcular44vmin = () => {
  const viewportWidth = Math.min(window.innerWidth, window.innerHeight);
  const valor44vmin = 0.44 * viewportWidth;
  return valor44vmin;
};

window.onload = obtenerAnchoPestana;
window.onresize = obtenerAnchoPestana;
window.onmousedown = e => handleOnDown(e);

window.ontouchstart = e => handleOnDown(e.touches[0]);

window.onmouseup = e => handleOnUp(e);

window.ontouchend = e => handleOnUp(e.touches[0]);

window.onmousemove = e => handleOnMove(e);

window.ontouchmove = e => handleOnMove(e.touches[0]);

for (let i = 0; i < imageids.length; i++) {
  const imageId = imageids[i];
  const textId = textids[i];

  const imageElement = document.getElementById(imageId);
  const textElements = document.getElementsByClassName(textId); // Supongo que solo hay un elemento en la colección

  imageElement.addEventListener('click', function () {
    if (imageElement.classList.contains('full')) {
      track.style.transform = `translate(${porcentaje}%, -50%)`;
      track.style.transition = 'none';
      imageElement.classList.add('image');
      imageElement.classList.remove('full');

      for (const textElement of textElements) {
        textElement.classList.remove('visible');
      }

      shouldStopMove = false;
    } else {
      track.style.transition = '1s';
      track.style.transform = `translate(${-(ancho / 2) - i * valor}px, -50%)`;
      imageElement.classList.remove('image');
      imageElement.classList.toggle('full');

      for (const textElement of textElements) {
        textElement.style.opacity = 0;
      
      textElement.classList.add('visible'); // Assuming only one text element
      }
      shouldStopMove = true;

      setTimeout(() => {
        for (const textElement of textElements) {
          textElement.style.opacity = 1;
        }
      }, 1000);
    }
  });
}
