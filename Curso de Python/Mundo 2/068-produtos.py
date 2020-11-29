total = caros = maisBarato = cont = 0
nomeBarato = ''

while(True):
    nome = input("Nome do Produto: ")
    preco = float(input("Preço: R$ "))
    cont += 1
    total += preco
    if(preco > 1000):
        caros += 1
    if(preco < maisBarato):
        nomeBarato = nome
    if(cont == 1):
        maisBarato = preco
        nomeBarato = nome
    elif(preco < maisBarato):
        nomeBarato = nome
        maisBarato = preco

    resp = input("Quer continuar [s/n]? ").lower()
    if(resp == 'n'):
        break

print(f"Total da compra: {total}")
print(f"Total de mais caros: {caros}")
print(f"Mais Barato: {maisBarato}")