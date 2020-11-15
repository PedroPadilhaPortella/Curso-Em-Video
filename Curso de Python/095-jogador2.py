time = list()
jogador = dict()
partidas = list()

while True:
    jogador.clear()
    partidas.clear()

    jogador['nome'] = input("Nome: ")
    n = int(input(f"Quantas partidas {jogador['nome']} jogou? "))
    for i in range(0, n):
        partidas.append(int(input(f'   Quantos gols na partida {i + 1}? ')))
    jogador['gols'] = partidas[:]
    jogador['total'] = sum(partidas)
    time.append(jogador.copy())

    while True:
        resp = input("Adicionar novo Jogador [S/N]: ").upper()[0]
        if resp in 'SsNn':
            break
        print('Responda apenas com S ou N.')
    if resp in 'Nn':
        break

print("-="*40)
print("cod", end='')
for k in jogador.keys():
    print(f'{k:<15}', end="")
print()

print("-"*50)
for i, e in enumerate(time):
    print(f"{i:>3}  ", end="")
    for d in e.values():
        print(f'{str(d):<15}', end="")
    print()
print("-"*50)

while True:
    busca = int(input("Mostrar dados de qual jogador? [999 stop]: "))
    if busca == 999:
        break
    if busca >= len(time):
        print("Erro, não existe jogador com o código {}!".format(busca))
    else:
        print("\nLevantamento do jogador {}:".format(time[busca]['nome']))
        for i, g in enumerate(time[busca]['gols']):
            print(f'    No jogo {i + 1} fez {g} gols.')
    print("-"*50)