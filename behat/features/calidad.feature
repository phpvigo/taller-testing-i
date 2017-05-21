# language: es
Característica: Calidad

Escenario: HTML5 Válido de phpvigo
  Dado que accedo a https://phpvigo.com/
  Cuando verifico el html contra validator.w3.org
  Entonces El contenido html debe ser válido y no contener errores
