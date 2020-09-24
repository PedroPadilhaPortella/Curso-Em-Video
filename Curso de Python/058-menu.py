n1 = int(input("Primeiro Valor:"))
n2 = int(input("Segundo Valor:"))
opcao = 0

while(opcao != 5):
    print('''[1] Somar
[2] Multiplicar
[3] Maior
[4] Novos Numeros
[5] Sair
''')
    opcao = int(input("Qual sua Opcão: "))
    if(opcao == 1):
        print(f"{n1} + {n2} = {n1 + n2}")
    elif(opcao == 2):
        print(f"{n1} x {n2} = {n1 * n2}")
    elif(opcao == 3):
        if(n1 > n2):
            maior = n1
        else:
            maior = n2
        print(f"O maior é {maior}")
    elif(opcao == 4):
        n1 = int(input("Primeiro Valor:"))
        n2 = int(input("Segundo Valor:"))
    else:
        print("Opção Inválida!!")

print("\nSaindo...")