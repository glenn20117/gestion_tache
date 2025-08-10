document.addEventListener('DOMContentLoaded', function () {
    var alert = document.getElementById('alert');

    if (alert) {
        // Activation de l'effet de descente au chargement
        alert.classList.add('slide-down');

        // Après 5 secondes, faire remonter l'alerte
        setTimeout(function () {
            alert.classList.remove('slide-down');
            alert.classList.add('slide-up');
        }, 5000); // 5000ms = 5 secondes

        // Retirer l'alerte du DOM après la disparition
        setTimeout(function () {
            if (alert) {
                alert.remove();
            }
        }, 5500); // Attendre la fin de l'animation de disparition avant de retirer l'alerte
    }
});