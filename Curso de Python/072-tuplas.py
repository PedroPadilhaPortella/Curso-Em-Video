tupla = (
    int(input("Digite um numero:")),
    int(input("Digite um numero:")),
    int(input("Digite um numero: ")),
    int(input("Digite um numero: ")),
    int(input("Digite um numero: "))
)

print(tupla)
print(f"O valor 9 apareceu {tupla.count(9)} vezes")
if 3 in tupla:
    print(f"O valor 3 apareceu na posição {tupla.index(3)}")
else:
    print("O valor 3 não foi encontrado!")
print(f"Pares: ")
for n in tupla:
    if(n % 2 == 0):
        print(n, end=" ")