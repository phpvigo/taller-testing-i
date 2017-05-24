# language: es
Característica: Estándares Web
  Como desarrollador
  Quiero que se pasen diversos estándares y controles de calidad

  Validar:
    - HTML
    - CSS
    - Rendimiento
    - Otros

  Escenario: HTML5
    Dado que estoy en la página de inicio
    Cuando paso el validador HTML5 de w3c
    Entonces no hay errores de validación
