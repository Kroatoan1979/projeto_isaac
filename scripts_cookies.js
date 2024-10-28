// Verifica se o usuário já aceitou os cookies
window.onload = function() {
    if (!localStorage.getItem('cookiesAccepted')) {
        document.getElementById('cookie-banner').style.display = 'block';
    }
}

// Quando o usuário clica no botão de aceitar
document.getElementById('accept-cookies').onclick = function() {
    localStorage.setItem('cookiesAccepted', 'true');
    document.getElementById('cookie-banner').style.display = 'none';
}

// Quando o usuário clica no botão de rejeitar
document.getElementById('reject-cookies').onclick = function() {
    localStorage.setItem('cookiesRejected', 'true');
    localStorage.removeItem('cookiesAccepted');
    document.getElementById('cookie-banner').style.display = 'none';
}