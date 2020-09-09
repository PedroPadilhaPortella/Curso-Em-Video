# zip => concatenar listas
arr1 = [1, 2, 3]
arr2 = ['pedro', 'daniel', 'samuel']
arr3 = [ True, True, True]

for numero, nome, vivo in zip(arr1, arr2, arr3):
    print(numero, nome, vivo)
