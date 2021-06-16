import math
def rotacion(filas, columnas, grados):
    filasM=3
    columnasM=3
    angulo = (grados* math.pi)/180
    A = [round(math.cos(angulo),1),round(-math.sin(angulo),1),0], [round(math.sin(angulo),1), round(math.cos(angulo),1), 0], [0,0,1]

    print("\nMatriz A\n")

    for i in range (0,filasM):
        print(A[i])

    print("\nMatriz B\n")
    B=[]

    for i in range(0,filas):
        B.append([0]*columnas)

    for i in range(0,filas):
        for j in range(0,columnas):
            B[i][j] = float(input("Ingresa el valor (%d,%d): " % (i,j)))

    for i in range (0,filas):
        print(B[i])
    
    print("\nResultado\n")

    C=[]

    for i in range(0,filas):
        C.append([0]*columnas)

    for i in range(0,filasM):
        for j in range(0,columnas):
            for k in range (0,columnasM):
                C[i][j] += A[i][k] * B[k][j]

    for i in range (filas):
        R=[]
        for j in range (columnas):
            R.append(round(C[i][j],2))
        print(R)

def main():
    
    filas = int(input("Ingresa el numero de filas: "))
    columnas = int(input("Ingresa el numero de columnas: "))
    grados = int(input("Ingresa el angulo: "))

    rotacion(filas, columnas, grados)

if __name__ == '__main__':
    main()