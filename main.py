# Leer los dos números
valor = input("Ingrese dos numeros (n k): ")
n, k = map(int, valor.split())

# Validar rangos
if 1 <= n <= 10**7 and 1 <= k <= 10**9:
    # Suma de 1 hasta n
    res = n * (n + 1) // 2

    # Verificar divisibilidad
    if res % k == 0:
        print("SI")
    else:
        print("NO")
else:
    print("No entran en el parametro")
