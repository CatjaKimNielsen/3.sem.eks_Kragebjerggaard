export default class Produkter {
    constructor() {
        this.data = {
            password: "KickPHP"
        }
        this.rootElem = document.querySelector('.produkter');
        this.filter = this.rootElem.querySelector('.filter');
        this.items = this.rootElem.querySelector('.items');

        this.nameSearch = this.filter.querySelector('.nameSearch');
        this.priceSearch = this.filter.querySelector('.priceSearch');
        this.categorySearch = this.filter.querySelector('.categorySearch');
    }

    async init(){

        this.nameSearch.addEventListener('input', () => {
            this.render();
        });

        this.priceSearch.addEventListener('input', () => {
            this.render();
        });

        this.categorySearch.addEventListener('input', () => {
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
                <div class="card-body montserrat">
                <h5 class="card-title text-center">${item.prodNavn}</h5>
                <p class="card-text text-center">${item.prodPris}</p>
                <a href="view.php?id=${item.prodId}" class="btn btn-mørkebrun text-white w-100">Se produkt</a>
                </div>
            </div>
             
           `;

            row.appendChild(col);
        }
        this.items.innerHTML = '';
        this.items.appendChild(row);
    }

    async getData(){
        this.data.nameSearch = this.nameSearch.value;
        this.data.priceSearch = this.priceSearch.value;
        this.data.categorySearch = this.categorySearch.value;

        const response = await fetch('api.php', {
            method:"POST",
            body: JSON.stringify(this.data)
        });
        return await response.json();

    }
}