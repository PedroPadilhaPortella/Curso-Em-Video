#list comprehension

x = [1, 2, 3, 4, 5, 6]
y = [ i ** 2 for i in x]
z = [ i for i in x if i % 2 != 0]

print(y)
print(z)

# a = []
# for i in x:
#     a.append(i + 1)
# print(a)