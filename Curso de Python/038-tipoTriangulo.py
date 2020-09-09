from cgi import print_directory


print("Analizador de Triangulos\n===========================")
l1 = float(input("Lado 1:"))
l2 = float(input("Lado 2:"))
l3 = float(input("Lado 3:"))

if(l1 >= l2 + l3 or l2 >= l1 + l3 or l3 >= l1 + l2):
    print("Esses segmentos não podem formar um triangulo!")
elif(l1 == l2 and l2 == l3):
    print("Esse triangulo é equilatero")
elif(l1 == l2 or l2 == l3 or l3 == l1 ):
    print("Esse triangulo é isosceles")
else:
    print("Esse triangulo é escaleno")