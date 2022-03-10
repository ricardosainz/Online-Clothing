let indice = 1;/*Esto es para que en primer lugar salga la primera imágen*/
muestraSlides(indice);

function avanzaSlide(n){/*Si le damos a la flecha se le aplicará +1 o -1 si le damos alante o atrás*/
    muestraSlides( indice+=n );
}

function posicionSlide(n){/*Sirve para que funcione la barra*/
    muestraSlides(indice=n);
}

function muestraSlides(n){/*Creamos un algoritmo que pasa de la primera ala última imagen y viceversa*/
    let i;
    let slides = document.getElementsByClassName('miSlider');
    let barras = document.getElementsByClassName('barra');

    if(n > slides.length){/*Si n es mayor que el número de imágenes volverá a la posición inicial*/
        indice = 1;
    }
    if(n < 1){/*Si n es negativo irá a la última imágen*/
        indice = slides.length;
    }
    for(i = 0; i < slides.length; i++){
        slides[i].style.display = 'none';
    }
    for(i = 0; i < barras.length; i++){
        barras[i].className = barras[i].className.replace(" active", "");
    }
    slides[indice-1].style.display = 'block';
    barras[indice-1].className += ' active';
}