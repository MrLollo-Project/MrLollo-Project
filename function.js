function hello_func(){
    let data = sessionStorage.getItem('0');
    if (data != 'false') {
        alert("Benvenuto su iexsdiscovery.it\nQui potrai trovare:\n- I nostri progetti\n- Contattarci nel form apposito\n- Apprendere cosa facciamo nella nostra scuola");
        sessionStorage.setItem('0', 'false');
    }
}

window.onload = hello_func();