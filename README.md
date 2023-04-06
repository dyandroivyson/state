# State

O **State** é um padrão de projeto comportamental que permite que um objeto altere seu comportamento quando seu estado interno muda. Parece como se o objeto mudasse de classe.

## Analogia com o mundo real
Muitos desenvolvedores, independente da linguagem, costumam usar um kanban para ter uma melhor visibilidade do status atual de determinada tarefa, e cada status é separado em uma coluna no quadro. Todos os status são estados atuais da tarefa que pode ser em andamento, em teste, em validação, até o último estado que é o finalizado.

## Aplicação
Utilize o padrão **State** quando você tem um objeto que se comporta de maneira diferente dependendo do seu estado atual, quando o número de estados é enorme, e quando o código estado específico muda com frequência.

Utilize o padrão quando você tem uma classe populada com condicionais gigantes que alteram como a classe se comporta de acordo com os valores atuais dos campos da classe.

## Implementação
Em nosso algoritmo, dividimos o problema na pasta *original* e a solução na pasta *refactored*.
Alteramos a nossa class Task para, ao invés de retornar uma string com o status atual da tarefa pra realizar verificações no index.php, retornar uma classe referente ao status. Dentro da classe poderia ter diversas implementações que, se fossem feitas dentro do *if* inicial, o código seria muito difícil de incluir novos status ou até mesmo de dá manutenção em status existentes.

## Fonte
- <a href="https://refactoring.guru/design-patterns/state" target="_blank">Refactoring Guru</a>
- - <a href="https://dev.to/zhukmax/design-patterns-in-php-8-state-1152" target="_blank">Dev.to</a>
