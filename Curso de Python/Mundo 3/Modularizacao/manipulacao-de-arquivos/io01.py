#!/usr/local/bin/python3

with open('pessoas.csv') as arquivo:
    with open('pessoas.txt', 'w') as saida:
        for registro in arquivo:
            pessoa = registro.strip().split(',')
            print("Nome: {}, idade: {}".format(*pessoa), file = saida)
print("Programa executado")