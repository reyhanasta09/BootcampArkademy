const printWords = kata => {
    let vokal = {
        "a": "a",
        "e": "e",
        "i": "i",
        "u": "u",
        "o": "o"
    };
    kata = kata.toLowerCase();
    let kataVokal = "";
    let kataKonsonan = "";

    for (let i = 0; i < kata.length; i++) {
        if (kata[i] in vokal)
            kataVokal += kata[i];
        else
            kataKonsonan += kata[i];

    }
    return (kataVokal + kataKonsonan).split("").join("\n").toUpperCase();
}

let hasil = printWords("ARKADEMY")
console.log(hasil)