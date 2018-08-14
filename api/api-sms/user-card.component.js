/**
 * Creation d'un composant
 */
class UserCardElement extends HTMLElement {
    constructor() {
        super();
    }
    connectedCallback(){
        this.innerHTML = "Bonjour a tous !";
    }
}
window.customElements.define('user-card', UserCardElement);