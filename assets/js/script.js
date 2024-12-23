
// memvalidasi data user
function validateUser() {
    document.addEventListener('DOMContentLoaded', function() {
        const loginForm = document.getElementById('loginForm');
    
        loginForm.onsubmit = function(event) {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
    
            if (username.length < 3 || username.length > 10) {
                alert('Username harus memiliki panjang antara 3 dan 10 karakter!');
                event.preventDefault();
            }
            
            if (password.length < 8 || password.length > 15) {
                alert('Password harus memiliki panjang antara 5 dan 15 karakter!');
                event.preventDefault();
            }
        };
    });
}

// memvalidasi data mahasiswa
function validateMahasiswa() {
    document.addEventListener('DOMContentLoaded', function() {
        const createForm = document.getElementById('formMahasiswa');
    
        createForm.onsubmit = function(event) {
            const NIM = document.getElementById('NIM').value;
            const nama = document.getElementById('nama').value;
            const email = document.getElementById('email').value;
            const doswal = document.getElementById('doswal').value;
    
            if (NIM.length < 3 || NIM.length > 10) {
                alert('NIM harus memiliki panjang antara 3 dan 10 karakter!');
                event.preventDefault();
            }

            if (nama.length < 3 || nama.length > 30) {
                alert('Nama harus memiliki panjang antara 3 dan 10 karakter!');
                event.preventDefault();
            }
            
            if (!email.endsWith('@student.itera.ac.id')) {
                alert('Email harus menggunakan domain @student.itera.ac.id!');
                event.preventDefault();
            }

            if (doswal.length < 3 || doswal.length > 30) {
                alert('Nama Dosen Wali harus memiliki panjang antara 3 dan 10 karakter!');
                event.preventDefault();
            }
        };
    });
}

document.addEventListener('DOMContentLoaded', function() {
    validateUser();
    logIn();
    loadMahasiswa();
    validateMahasiswa();
});