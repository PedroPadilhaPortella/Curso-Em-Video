from random import randint
tipopc = tipo = ''
win = lost = 0

while True:
    tipo = input("Par ou Impar? ").lower()
    
    jogador = int(input('Diga um valor de 1 a 5: '))
    pc = randint(1, 5)
    total = jogador + pc
    if(total % 2 == 0):
        result = "par"
    else:
        result = "impar"
    print(f"Voce jogou {jogador} e o computador {pc}, deu {total}, que é {result}")

    if(tipo == result):
        print("Você ganhou essa!")
        win += 1
    else:
        print("Você perdeu")
        lost += 1
    if(lost == 3 or win == 3):
        break
print(f"Você perdeu {lost} e ganhou {win}")