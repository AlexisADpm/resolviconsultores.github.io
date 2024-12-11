export function menuhamburguesa(){

    //variables

    let dispActive = document.getElementById("ham-1");

    console.log(dispActive);

    //Activar por defecto el efecto del menu

    if(window.screen.width <= 425){
        dispActive.style.display = 'block';
        
    }
    else{
        dispActive.style.display = 'none';
    }




    //Se modifica si el tamaÃ±o de la ventana cambia
    window.addEventListener("resize", e=>{
        if(window.screen.width <= 425){
            dispActive.style.display = 'block';
            
        }
        else{
            dispActive.style.display = 'none';
        }
    })

}