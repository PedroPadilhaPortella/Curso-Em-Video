print(f"{'='*20}\n 10 primeiros Termos\n{'='*20}")
a = int(input("Primeiro Termo: "))
r = int(input("Razão: "))
count = 0

while(count <= 10):
    print("{}".format(a), end="    ")
    a += r
    count += 1