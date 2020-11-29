print(f"{'='*20}\n 10 primeiros Termos\n{'='*20}")
a = int(input("Primeiro Termo: "))
r = int(input("Razão: "))
count = 0
total = 0
mais = 10
while(mais != 0):
    total += mais
    while(count <= total):
        print("{}".format(a), end="    ")
        a += r
        count += 1
    mais = int(input("\nQuantos termos quer mostar a mais? "))
print(f"Progressão finalizada com {total} termos mostrados")