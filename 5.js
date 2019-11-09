const createMatrix = number => {

    // array semula
    let initialArray = [];
    let resultDiagonalKiri = 0;
    let resultDiagonalKanan = 0;

    // Tambah matrix 3 x 3 ke dalam array;
    for (let i = 0; i < number; i++) {
        initialArray.push([]);
    }

    // tambah angka random ke dalam matrix 3 x 3 
    for (let i = 0; i < number; i++) {
        for (let y = 0; y < number; y++) {
            initialArray[i][y] = Math.round(Math.random() * 10);
        }

    }
    // jumlah matrix secara diagonal dengan cara mengambil indeks
    for (let i = 0; i < initialArray.length; i++) {
        for (let y = 0; y < initialArray.length; y++) {
            let lastIndex = initialArray.length - 1;
            if (i == y) {
                resultDiagonalKiri += initialArray[i][y];
            }
            if ((lastIndex - i) == y) {
                resultDiagonalKanan += initialArray[i][y]
            }
        }
    }
    console.log(initialArray)
    return resultDiagonalKiri - resultDiagonalKanan;
}

let result = createMatrix(3);
console.log(result)