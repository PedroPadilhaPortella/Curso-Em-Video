print("Analizador de Triangulos\n===========================")
l1 = float(input("Lado 1:"))
l2 = float(input("Lado 2:"))
l3 = float(input("Lado 3:"))

if(l1 >= l2 + l3 or l2 >= l1 + l3 or l3 >= l1 + l2):
    print("Esses segmentos não podem formar um triangulo!")
else:
    print("Esses podem formar um triangulo!")