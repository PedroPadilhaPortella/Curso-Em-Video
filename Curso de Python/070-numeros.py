numeros = ('zero', 'um', 'dois', 'três', 'quatro', 'cinco', 'seis', 'sete', 'oito', 'nove', 'dez', 'onze', 'doze', 'treze', 'quatrorze', 'quinze', 'dezesseis', 'dezessete', 'dezoito', 'dezenove', 'vinte')

while(True):
    while True:
        valor = int(input("Digite um numero entre 0 e 20: "))
        if(valor >= 0 and valor <= 20):
            break
        else:
            print("Tente novamente!")
    print(f"Você digitou {numeros[valor]}")
    teste = input("Testar de novo[s/n]: ")
    if(teste == "n"):
        break
print("Saindo...")
