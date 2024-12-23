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

// Fungsi untuk memanggil data mahasiswa dari getData.php (tapi pengisian tetap di PHP)

// function logIn() {
//     document.getElementById('loginForm').onsubmit = function(event) {
//         event.preventDefault();  // Mencegah reload
        
//         const formData = new FormData(this);
        
//         fetch('login.php', {
//             method: 'POST',
//             body: formData
//         })
//         .then(response => response.json())
//         .then(data => {
//             if (data.success) {
//                 window.location.href = 'index.html';
//             } else {
//                 alert('Username atau Password salah!');
//             }
//         })
//         .catch(error => {
//             console.error('Error:', error);
//             alert('Terjadi kesalahan. Coba lagi.');
//         });
//     };
// }

// function loadMahasiswa() {
//     fetch('getData.php')
//         .then(response => response.json())
//         .then(data => {
//             // Di sini hanya bisa digunakan untuk kebutuhan lain seperti filter atau refresh, bukan pengisian tabel
//             console.log(data); // Cek data di console (untuk debugging)
//         })
//         .catch(error => console.error('Error:', error));
// }

document.addEventListener('DOMContentLoaded', function() {
    validateUser();
    logIn();
    loadMahasiswa();
    validateMahasiswa();
});