const textids = ['text-1','text-2'];
const imageids =['imagen-1','imagen-2'];
const  track =document.getElementById ('image-track');

for(let i = 0; i < imageids.length; i++) {

  const imageId = imageids[i];
  const textId = textids[i];
  
  const imageElement = document.getElementById(imageId);
  const textElement = document.getElementById(textId);
  textElement.classList.add('hidden');
  // Código de click usando imageElement y textElement



  imageElement.addEventListener("click", function() {
    if (imageElement.classList.contains("full")) {
      track.style.transform ='translate(0%, -50%)';
      imageElement.classList.toggle("full");
      textElement.classList.toggle('visible');
    } else {
      track.style.transform ='none';
      imageElement.classList.toggle("full");
      textElement.style.opacity = 0;
      textElement.classList.toggle('visible');

      setTimeout(() => {
        textElement.style.opacity=1;
      }, 1000);
  }
  });
}
