from time import sleep

def maior(*valores):
    contador = maior = 0
    print("Analizando os valores recebidos...", end="  ")
    sleep(1)
    for valor in valores:
        print(valor, end=" ", flush=True)
        sleep(0.4)

        if contador == 0:
            maior = valor
        if valor > maior:
            maior = valor
        contador += 1
    print(f"\nForam informados {contador} valores")
    print("O maior valor é {}".format(maior))
    print("-="*30)

maior(2 ,9 ,5, 7, 1)
maior(4, 7 ,1)
maior(9, 12)
maior(6)
maior()