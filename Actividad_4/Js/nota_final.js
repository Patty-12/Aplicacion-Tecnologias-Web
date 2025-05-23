// declaramos las variables y asignamos valores

let parcial1 = 12;
let parcial2 = 15;
let proyectoFinal = 18;

// los pesos son: parcial 1:30% ; parcial 2:30% ; proyeecto final: 40%

console.log("La nota del parcial 1 es: " + parcial1);
console.log("La nota dek parcial 2 es: " + parcial2);
console.log("La nota del proyecto final es: " + proyectoFinal);

// formula

notaFinal = (parcial1 * 0.3) + (parcial2 * 0.3) + (proyectoFinal * 0.4);

console.log("Su nota final es: " + notaFinal);

// evaluacion
// si la nota final es mayor o igual a 14: aprobado directamente ; si la nota esta entree 10(inclusive) y 13.9: va a recuperacion ; si es menor que 10: pierde la materia

let resultado = "";

if(notaFinal >= 14){
    resultado = 'Aprobado directamente';
}else if(notaFinal >= 10){
    resultado = 'Va a recuperacion';
}else{
    resultado = 'pierde la materia';
}

// mostrar en la consola

console.log(resultado);