matriz = [[0, 0, 0], [0, 0, 0], [0, 0, 0]]

for l in range(0, 3):
    for c in  range(0, 3):
        matriz[l][c] = int(input(f"Valor [{l}, {c}]:"))

print(matriz)

for l in range(0, len(matriz)):
    for c in  range(0, len(matriz)):
        print(f"[{matriz[l][c]: ^5}]", end=" ")
    print()