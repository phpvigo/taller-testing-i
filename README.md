# Taller de testing en PHP
Repositorio para taller de testing en 24 de Mayo de 2017 en PHPVIGO

Basado en:

http://osherove.com/tdd-kata-1/

Calculadora

1. Crear una calculadora con un método add(string $numbers)
    - El método puede aceptar 0, 1 ó 2 números y devolverá su suma (p.e. "3,7", "5").
    - Para una cadena vacía devolverá 0.

2. Haz que el método add pueda manejar un número desconocido de números.

3. Haz que el método add pueda manejar retornos entre números en lugar de comas.
    - "1\n2,3" es correcto (== 6);
    - "1,\n" no es correcto
       
4. Haz que el método pueda usar separadores diferentes.
    - La primera línea tiene la forma "//#\n" donde # es el nuevo separador
    - "//;\n1;2" sería válido
    - Esta línea es opcional
    

Calling Add with a negative number will throw an exception “negatives not allowed” - and the negative that was passed.if there are multiple negatives, show all of them in the exception message
