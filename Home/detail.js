function myFunction() {
    let elements = document.querySelectorAll('div, button, nav, a, p, body, html, footer, i, input, span, :before, :after, b, h1');

    for (let i = 0; i < elements.length; i++) {
        elements[i].classList.toggle("dark-mode");
    }
}