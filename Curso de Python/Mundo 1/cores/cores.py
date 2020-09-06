nome = str(input("Qual seu nome? "))
senha = str(input("Senha: "))
print("Usuario {}{}{} \nSenha: \33[0;31;47m{}\33[m".format('\33[1;35;40m', nome, '\33[m', senha))