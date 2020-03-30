# Curso de Estrutura de dados e SPL em PHP

## Análise Assintótica

Matematicamente falando, a análise assintótica é o método de descrever o comportamento dos limites.

É desejável exprimir o consumo de tempo de um algoritmo de forma que não dependa da linguagem de programação.

Exemplos em uma pesquisa sequencial:
- Pior caso: f(n) = n
- Caso médio: f(n) = (n+1)/2
- Melhor caso: f(n) = 1

**Melhor caso**: menor tempo de execução sobre todas as entradas de tamanho n.

O **pior caso**: maior tempo de execução sobre todas as entradas tamanho n.

**Caso médio**: média dos tempos de execução de todas as entradas de tamanho n.

**Grande-O** (Big O) representa a complexidade no pior caso.

- É a mais utilizada, pois para vários algoritmos o pior caso ocorre em frequência.
Notação theta (limite assintótico firme)
Notação ômega (limite assintótico inferior, análise de melhor caso)

Conteúdo:
- Estrutura de Dados
    - Lista Duplamente encadeada
    - Pilha
    - Fila
    - Árvore (MinHeap e MaxHeap)
    - Fila Prioritária
    - StorageObject
- Iteradores
    - Iterator
    - AppendIterator