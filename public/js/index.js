function openModal(src) {
    document.getElementById('imageModal').src = src;
    var modal = new bootstrap.Modal(document.getElementById('galleryModal'));
    modal.show();
}

document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById('contactForm');
    const inputs = form.querySelectorAll('input, textarea');
    const alerta = document.getElementById('formAlert');
    const btnEnviar = document.getElementById('sendBtn');

    inputs.forEach(input => {
        input.addEventListener('input', function () {
            validate(this);
        });
    });

    function validate(camp) {
        if (camp.value.trim() === '') {
            camp.classList.add('is-invalid');
            camp.classList.remove('is-valid');
            return false;
        } else if (camp.type === 'email') {
            const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!regexEmail.test(camp.value)) {
                camp.classList.add('is-invalid');
                camp.classList.remove('is-valid');
                return false;
            }
        }
        camp.classList.remove('is-invalid');
        camp.classList.add('is-valid');
        return true;
    }

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        let validForm = true;

        inputs.forEach(input => {
            if (!validate(input)) {
                validForm = false;
            }
        });

        if (validForm) {
            alerta.classList.add('d-none');
            btnEnviar.disabled = true;
            btnEnviar.innerHTML = 'Enviando...';

            const formData = new FormData(form);

            fetch('https://school.bauti.dev/porfolio-far/contact', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    alerta.classList.remove('d-none', 'alert-danger', 'alert-success');
                    if (data.status === 'success') {
                        alerta.classList.add('alert-success');
                        alerta.textContent = data.message;
                        form.reset();
                        inputs.forEach(input => input.classList.remove('is-valid'));
                    } else {
                        alerta.classList.add('alert-danger');
                        alerta.textContent = data.message;
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alerta.classList.remove('d-none', 'alert-success', 'alert-danger');
                    alerta.classList.add('alert-danger');
                    alerta.textContent = 'Hubo un error de red al procesar la solicitud.';
                })
                .finally(() => {
                    btnEnviar.disabled = false;
                    btnEnviar.innerHTML = 'Enviar';
                });
        }
    });

    document.querySelectorAll('.galeria-img').forEach(img => {
        img.addEventListener('click', function () {
            document.getElementById('imagenPrincipalModal').src = this.getAttribute('data-full');
            new bootstrap.Modal(document.getElementById('modalGaleria')).show();
        });
    });
});

var numeroActual = '0';
var operadorActual = null;
var numeroViejo = '';

function mostrarCalculadora() {
    var pantalla = document.getElementById('calc-display');
    if (pantalla) {
        pantalla.value = numeroActual;
    }
}

function calcNum(num) {
    if (numeroActual == '0') {
        numeroActual = num;
    } else {
        numeroActual = numeroActual + num;
    }
    mostrarCalculadora();
}

function calcClear() {
    numeroActual = '0';
    operadorActual = null;
    numeroViejo = '';
    mostrarCalculadora();
}

function calcOp(op) {
    if (operadorActual != null) {
        calcEval();
    }
    numeroViejo = numeroActual;
    operadorActual = op;
    numeroActual = '0';
}

function calcEval() {
    if (operadorActual == null) {
        return;
    }

    var res = 0;
    var n1 = parseFloat(numeroViejo);
    var n2 = parseFloat(numeroActual);

    if (operadorActual == '+') {
        res = n1 + n2;
    } else if (operadorActual == '-') {
        res = n1 - n2;
    } else if (operadorActual == '*') {
        res = n1 * n2;
    } else if (operadorActual == '/') {
        if (n2 == 0) {
            alert("No se puede dividir por 0");
            return;
        }
        res = n1 / n2;
    }

    numeroActual = res.toString();
    operadorActual = null;
    numeroViejo = '';
    mostrarCalculadora();
}