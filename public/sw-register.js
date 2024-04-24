if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
        navigator.serviceWorker.register('public/sw-register.js')
            .then(function(registration) {
                console.log('Service Worker registrado com sucesso! Escopo: ', registration.scope);
            })
            .catch(function(err) {
                console.error('Falha ao registrar o Service Worker: ', err);
            });
    });
}
