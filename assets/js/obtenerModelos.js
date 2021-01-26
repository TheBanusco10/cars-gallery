

let botones = document.getElementsByName('botonModelos');
let tituloModelo = document.getElementById('tituloModelo');
let marcasContenido = document.getElementById('marcasContenido');

botones.forEach(element => {
    element.addEventListener('click', (evt) => {

                getModelos(evt.target.dataset.id)
                            .then (response => {

                                tituloModelo.innerHTML = `${evt.target.dataset.id}`;
                                marcasContenido.innerHTML = '';

                                for (const key in response) {
                                    marcasContenido.innerHTML += `
                                    
                                        <article style="margin-bottom: 2rem; width: 50%">
                                            <header>
                                                <h3>${response[key]}</h3>
                                            </header>
                                        </article>
                                    
                                    
                                    `;
                                };


                            });

            });
});
        

            async function getModelos(marca) {

                let response = await fetch('modelos.php', {
                    method: 'POST',
                    headers: { 
                        "Content-type": "application/x-www-form-urlencoded; charset=UTF-8"
                        }, 
                    credentials: 'include',
                    body: 'marca=' + marca
                });

                return await response.json();

            }