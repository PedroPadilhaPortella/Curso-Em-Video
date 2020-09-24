n = int(input("Digite um numero para fatorial: "))
c = n
fat = 1
while(c > 0):
    fat *= c
    c -= 1
print("O fatorial de {}! é {}".format(n, fat))