nome = input("Insira seu nome: ")
sexo = input("Insira seu sexo: ")
peso = float(input("Insira seu peso: "))
altura = float(input("Insira sua altura em metros: "))

imc = peso / (altura * altura)
condicao = "Não definida"


if(sexo == "masculino"):
    if(imc > 31.1):
        condicao = "obeso"
    if(imc <= 31.1):
        condicao = "acima do peso ideal"
    if(imc <= 27.8):
        condicao = "marginalmente acima do peso"
    if(imc <= 26.4):
        condicao = "no peso normal"
    if(imc < 20.7):
        condicao = "abaixo do peso"

if(sexo == "feminino"):
    if(imc > 32.3):
        condicao = "obeso"
    if(imc <= 32.3):
        condicao = "acima do peso ideal"
    if(imc <= 27.3):
        condicao = "marginalmente acima do peso"
    if(imc <= 25.8):
        condicao = "no peso normal"
    if(imc < 19.1):
        condicao = "abaixo do peso"

print(f"{nome}, com base no peso e altura informados, o IMC é: {imc} e a condição é: {condicao}")