/*===== LOGIN SHOW and HIDDEN =====*/

// Giriş ve kayıt formunu göstermek veya gizlemek için gereken elementler alınır
const signUp = document.getElementById('sign-up'),
      signIn = document.getElementById('sign-in'),
      loginIn = document.getElementById('login-in'),
      loginUp = document.getElementById('login-up');

// Kayıt olma linkine tıklandığında çalışacak olan fonksiyon
signUp.addEventListener('click', () => {
    // İlk önce varsa sınıflar kaldırılır
    loginIn.classList.remove('block');
    loginUp.classList.remove('none');

    // Sınıflar eklenir
    loginIn.classList.toggle('none');
    loginUp.classList.toggle('block');
});

// Giriş yapma linkine tıklandığında çalışacak olan fonksiyon
signIn.addEventListener('click', () => {
    // İlk önce varsa sınıflar kaldırılır
    loginIn.classList.remove('none');
    loginUp.classList.remove('block');

    // Sınıflar eklenir
    loginIn.classList.toggle('block');
    loginUp.classList.toggle('none');
});
