export default class Produkter {
    constructor() {
        this.data = {
            password: "KickPHP"
        }
        this.rootElem = document.querySelector('.produkter');
        this.filter = this.rootElem.querySelector('.filter');
        this.items = this.rootElem.querySelector('.items');

        this.search = this.filter.querySelector('.search');
    }

    async init(){

        this.search.addEventListener('input', () => {
            this.render();
        });

        await this.render();
    }

    async render(){
        const data = await this.getData();
        console.log(data);

        const row = document.createElement('div');
        row.classList.add('row', 'g-4');

        for(const item of data){
            const col = document.createElement('div');
            col.classList.add('col-md-6', 'col-lg-4', 'col-xl-3');

            col.innerHTML = `      
            <div class="card">
                <img src="images/${item.prodBillede}" class="card-img-top">
                <div class="card-body">
                <h1 class="card-title text-center montserrat" style="font-size: 1.3rem">${item.prodNavn}</h1>
                <p class="card-text text-center montserrat mb-3">${item.prodPris} kr.</p>
                <a href="view.php?id=${item.prodId}" class="btn btn-mørkebrun text-white montserrat w-100">Se produkt</a>
                </div>
            </div>
             
           `;

            row.appendChild(col);
        }
        this.items.innerHTML = '';
        this.items.appendChild(row);
    }

    async getData(){
        this.data.search = this.search.value;

        const response = await fetch('api.php', {
            method:"POST",
            body: JSON.stringify(this.data)
        });
        return await response.json();

    }
}