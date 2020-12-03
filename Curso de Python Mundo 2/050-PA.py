print(f"{'='*20}\n 10 primeiros Termos\n{'='*20}")
a1 = int(input("Primeiro Termo: "))
r = int(input("Razão: "))

a10 = a1 + (10 - 1) * r

for an in range(a1, a10, r):
    print("{}".format(an), end="    ")