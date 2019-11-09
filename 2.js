function Username(user) {

    var regex = /^[a-z]{5,5}$/;

    if (user.value.match(regex)) {

        alert('Benar')

        return true;

    } else {

        alert('Salah tidak boleh selain huruf kecil dan harus 5 huruf')

        return false;

    }

}

function Password(pass) {

    var regex = /^[0-9]{2}[@&]{1}[A-Za-z]{7,10}$/;

    if (pass.value.match(regex)) {

        alert('Benar')

        return true;

    } else {

        alert('Kombinasi salah , Kombinasi harus berupa 2 digit angka lalu diikuti simbol “@” atau simbol “&” dan diikuti 4 huruf besar')

        return false;

    }

}