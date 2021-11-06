# Requisitos
 - PHP 8 (com as extensões XML e mbstring)
 - Composer

# Correr a aplicação
 - Execute `composer install`, quando na raíz do projeto, para instalar as dependências.
 - Execute `php src/Main.php` para correr o código exemplo.

 # Testes
 - Execute `./vendor/bin/phpunit tests`, quando na raíz do projeto, para correr todos os testes unitários.

 # Notas
 - O enunciado sugere que a classe `Shape` tenha os atributos `width` e `length`. A implementação foi feita de acordo com o pedido, no entanto, considero que faria mais sentido a classe `Shape` ser abstrata, apenas com as propriedades `name` e `id`, dado que nem todas as figuras têm comprimento e largura.
 - A verificação da existência de identificadores únicos é feita através da classe `ShapesCollection`, que simula a persistência dos dados.
 - Para usar um novo método de geração de ids, basta criar uma nova implementação da interface `IdGenerator`.
