# desafios-php-oo
Aqui estão alguns desafios em ordem crescente de dificuldade para me ajudar a consolidar os conceitos em PHP Orientado a Objetos

1. Desafio de Abstração e Encapsulamento
Crie uma classe abstrata chamada FormaGeometrica que tenha métodos abstratos calcularArea() e calcularPerimetro().
Crie duas classes que estendam FormaGeometrica: Retangulo e Circulo.
No Retangulo, implemente atributos privados para largura e altura, e métodos get e set.
No Circulo, implemente o atributo raio com os métodos get e set.
Implemente os métodos de cálculo para área e perímetro, e crie um script que instancia cada forma e exiba suas áreas e perímetros.

2. Desafio de Herança e Polimorfismo
Crie uma classe Veiculo com atributos marca e modelo, e um método mover().
Implemente as classes Carro e Moto, herdando de Veiculo.
Na classe Carro, sobreescreva o método mover() para mostrar a mensagem "Carro se movendo...".
Na classe Moto, faça o mesmo, mostrando "Moto se movendo...".
Crie um array com instâncias de Carro e Moto e itere sobre o array chamando mover(). Veja como o polimorfismo permite que cada instância execute o método apropriado.

3. Desafio de Interfaces
Crie uma interface RepositorioInterface que define os métodos salvar(), deletar() e buscar().
Implemente duas classes que implementam essa interface: UsuarioRepositorio e ProdutoRepositorio.
No UsuarioRepositorio, faça com que o método salvar() insira um usuário no banco de dados (use apenas simulação).
No ProdutoRepositorio, faça com que o método salvar() insira um produto no banco de dados.
Crie instâncias dessas classes e teste cada método para simular operações de CRUD.

4. Desafio de Atributos e Métodos Estáticos
Crie uma classe Contador com um atributo estático contador e métodos estáticos incrementar() e exibirContador().
Toda vez que incrementar() for chamado, ele deve aumentar o valor de contador em 1.
Teste chamando o método incrementar() algumas vezes e exiba o valor atual de contador sem instanciar a classe.

5. Sistema de Biblioteca
Crie uma classe Livro com atributos como titulo, autor e numeroDePaginas.
Crie uma interface Emprestavel com métodos emprestar() e devolver().
Crie uma classe LivroEmprestavel que extende Livro e implemente a interface Emprestavel.
Em LivroEmprestavel, implemente uma lógica para controlar se o livro está emprestado ou disponível.
Por fim, crie um script para emprestar e devolver livros, e implemente um contador de quantos livros estão emprestados.