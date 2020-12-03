from time import sleep

def linha():
    print("-="*40)

def contador(inicio, fim, passo):
    print(f"\nContagem de {inicio} até {fim}, passo: {passo}:")
    
    if(passo < 0):
        passo *= -1
    if(passo == 0):
        passo = 1

    cont = inicio
    if inicio < fim:
        while(cont <= fim):
            print(f"{cont}", end=" ", flush=True)
            sleep(0.3)
            cont += passo
    else:
        while(cont >= fim):
            print(f"{cont}", end=" ", flush=True)
            sleep(0.3)
            cont -= passo


contador(1, 10, 1)
contador(10, 0, 2)
sleep(1)
linha()
print("Agora é sua vez, fala sua própria contagem!")
i = int(input("Inicio: "))
f = int(input("Fim: "))
p = int(input("Passo: "))
contador(i, f, p)
