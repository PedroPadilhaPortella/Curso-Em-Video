jogador = dict()
partidas = list()

jogador['nome'] = input("Nome: ")

n = int(input(f"Quantas partidas {jogador['nome']} jogou? "))

for i in range(0, n):
    partidas.append(int(input(f'   Quantos gols na partida {i + 1}? ')))

jogador['gols'] = partidas[:]

jogador['total'] = sum(partidas)

print("-="*30)

print(jogador)

print("-="*30)

for k, v in jogador.items():
    print(f"O campo {k} tem o valor {v}")

print("-="*30)

print(f'O jogador {jogador["nome"]} jogou {len(jogador["gols"])} partidas')

for i, e in enumerate(jogador['gols']):
    print(f"Na partida {i + 1}, ele fez {e} gols")
    
print(f"Total de {jogador['total']} gols")